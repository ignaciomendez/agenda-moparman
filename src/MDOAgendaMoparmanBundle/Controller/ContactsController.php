<?php

namespace MDOAgendaMoparmanBundle\Controller;

//use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
use MDOAgendaMoparmanBundle\Form\CategoryType;
use MDOAgendaMoparmanBundle\Entity\Contact;
use MDOAgendaMoparmanBundle\Entity\Category;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactsController extends Controller
{
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '#',
                'section' => 'Home'
            ),
            array (
                'link' => '/contactos',
                'section' => 'Contacts'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('MDOAgendaMoparmanBundle:Contact')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:Contacts:list.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'contacts' => $contacts));
    }

    public function addContactAction(Request $request)
    {
        // createFormBuilder is a shortcut to get the "form factory"
        // and then call "createBuilder()" on it
        $categories = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Category')
            ->findAll();

        $categories_select = array();
        foreach($categories as $category){
            $categories_select[$category->getId()] = $category->getName();
        }

        $form = $this->createFormBuilder()
            ->add('name', 'text')
            ->add('email', 'email')
            ->add('phone', 'text')
            ->add('city', 'text')
            ->add('notes', 'textarea')
            ->add('categories', 'choice', array(
                'choices'   => $categories_select,
                'multiple'  => true,
                'expanded' => true,
            ))
            ->add('save', 'submit', array('label' => 'Crear Contacto'))
            ->getForm();

        $form->handleRequest($request);

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        if ($form->isValid()) {
            $data = $form->getData();

            $contact = new Contact();
            $contact->setName($data['name']);
            $contact->setCity($data['city']);
            $contact->setEmail($data['email']);
            $contact->setPhone($data['phone']);
            $contact->setNotes($data['notes']);
            $contact->setPhoto('');

            foreach($data['categories'] as $category)
                $contact->addCategory($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Category')->find($category));

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirect('/contacts/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Contacts:new.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => array(
                array(
                    'link' => '/',
                    'section' => 'Home'
                ),
                array(
                    'link' => '/contacts',
                    'section' => 'Contactos'
                ),
                array(
                    'link' => '/contacts/add',
                    'section' => 'Agregar Contacto'
                )
            ),
            'letter' => $letter
        ));
/*
        $category->addContact($contact);



      //  $em->persist($category);
        $em->persist($contact);
        $em->flush();

        return new Response('Created contact id '.$contact->getId());
        */
    }

    public function showContactsAction($id)
    {
        $category = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Category')
            ->find($id);

        $contacts = $category->getContacts();

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'Home'),
            array('link' => '/contacts', 'section' => 'Contactos'),
            array('link' => '/contacts/category/'.$id, 'section' => $category->getName())
        );

        return $this->render('MDOAgendaMoparmanBundle:Contacts:list.html.twig', array('breadcrumbs' => $breadcrumbs, 'contacts' => $contacts));

    }

    public function getnameAction($name)
    {

        echo $name;

    }

    public function deleteContactsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $contact = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:Contact')
                ->find($delete_id);
            $em->remove($contact);
        }
        $em->flush();
        return $this->redirect('/contacts?success');
    }


    public function showContactAction($id){

        $contact = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Contact')
            ->findById(intval($id))[0];

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'Home'),
            array('link' => '/contacts', 'section' => 'Contacts'),
            array('link' => '/contact/$id', 'section' => $contact->getName())
        );
        return $this->render('MDOAgendaMoparmanBundle:Contacts:single.html.twig', array('breadcrumbs' => $breadcrumbs, 'contact' => $contact));
    }

    public function editContactAction($id, Request $request){
        $letter = null;
        $contact = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Contact')
            ->findById($id)[0];

        $categories_select = $contact->getCategories();

        $breadcrumbs = array(array('link' => '#', 'section' => 'home'));

        $form = $this->createFormBuilder($contact)
            ->add('name', 'text', array('label' => 'Nombre'))
            ->add('email', 'email', array('label' => 'E-mail'))
            ->add('phone', 'text', array('label' => 'Teléfono'))
            ->add('city', 'text', array('label' => 'Ciudad'))
            ->add('notes', 'textarea', array('label' => 'Notas'))
            ->add('categories', 'collection', array('type' => new CategoryType()))
            ->add('save', 'submit', array('label' => 'Editar Contacto'))
            ->getForm();

        $form->handleRequest($request);

        return $this->render('MDOAgendaMoparmanBundle:Contacts:edit.html.twig', array( 'form' => $form->createView(),'letter' => $letter,'breadcrumbs' => $breadcrumbs, 'contact' => $contact));
    }

}
