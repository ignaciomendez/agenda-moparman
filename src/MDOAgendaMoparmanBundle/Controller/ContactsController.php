<?php

namespace MDOAgendaMoparmanBundle\Controller;

//use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
use MDOAgendaMoparmanBundle\Form\CategoryType;
use MDOAgendaMoparmanBundle\Entity\Contact;
use MDOAgendaMoparmanBundle\Entity\Category;
use MDOAgendaMoparmanBundle\Entity\Picture;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDOAgendaMoparmanBundle\Form\Type\GallerypickerType;

class ContactsController extends Controller
{
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/contacts',
                'section' => 'Contactos'
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

        $pictures = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Picture')
            ->findAll();

        $pictures_select = array();
        foreach($pictures as $picture)
            $pictures_select[$picture->getId()] = $picture->getPath();

        $form = $this->createFormBuilder()
            ->add('name', 'text',array('label' => 'Nombre','required' => false))
            ->add('email', 'email',array('label' => 'E-mail','required' => false))
            ->add('phone', 'text',array('label' => 'Teléfono','required' => false))
            ->add('city', 'text',array('label' => 'Ciudad','required' => false))
            ->add('address', 'text',array('label' => 'Dirección','required' => false))
            ->add('notes', 'textarea',array('label' => 'Notas','required' => false))
            ->add('categories', 'choice', array(
                'choices'   => $categories_select,
                'multiple'  => true,
                'expanded' => true,
                'label' => 'Categorías',
            ))
            ->add('picture',new GallerypickerType(), array('label' => 'Foto','multiple'  => true, 'choices' => $pictures_select))
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
            $contact->setAddress($data['address']);
            $contact->setCity($data['city']);
            $contact->setEmail($data['email']);
            $contact->setPhone($data['phone']);
            $contact->setNotes($data['notes']);
            $contact->setPhoto('');


            foreach($data['picture'] as $index => $picture)
                $contact->addPicture($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Picture')->find($picture));

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

        return $this->render('MDOAgendaMoparmanBundle:Contacts:list.html.twig', array('breadcrumbs' => $breadcrumbs, 'contacts' => $contacts, 'letter' => null));

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
            array('link' => '/contacts', 'section' => 'Contactos'),
            array('link' => '/contact/$id', 'section' => $contact->getName())
        );
        return $this->render('MDOAgendaMoparmanBundle:Contacts:single.html.twig', array('breadcrumbs' => $breadcrumbs, 'contact' => $contact));
    }

    public function editContactAction($id, Request $request){
        $letter = null;

        if($request->query->get('success') !== null)
            $letter = 'success';

        $contact = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Contact')
            ->findById($id)[0];

        $categories = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Category')
            ->findAll();

        foreach($categories as $category){
            $categories_select[$category->getId()] = $category->getName();
        }

        $used_categories = $contact->getCategory();
        foreach($used_categories as $used_category){
            $used_categories_select[] = $used_category->getId();
        }

        $pictures = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Picture')
            ->findAll();
        $pictures_select = array();
        foreach($pictures as $picture)
            $pictures_select[$picture->getId()] = $picture->getPath();

        $used_pictures = $contact->getPicture();
        foreach($used_pictures as $used_picture){
            $used_pictures_select[] = $used_picture->getId();
        }

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'home'),
            array('link' => '/contacts', 'section' => 'Contactos'),
            array('link' => '/contacts/edit/'.$contact->getId(), 'section' => $contact->getName())
        );

        $form = $this->createFormBuilder()
            ->add('name', 'text', array('label' => 'Nombre', 'data' => $contact->getName(),'required' => false))
            ->add('email', 'email', array('label' => 'E-mail','data' => $contact->getEmail(),'required' => false))
            ->add('phone', 'text', array('label' => 'Teléfono','data' => $contact->getPhone(),'required' => false))
            ->add('city', 'text', array('label' => 'Ciudad','data' => $contact->getCity(),'required' => false))
            ->add('address', 'text', array('label' => 'Dirección','data' => $contact->getAddress(),'required' => false))
            ->add('notes', 'textarea', array('label' => 'Notas','data' => $contact->getNotes(),'required' => false))
            ->add('categories', 'choice', array('data' => $used_categories_select, 'expanded' => true, 'multiple' => true, 'choices' => $categories_select))
            ->add('picture',new GallerypickerType(), array('data' => $used_pictures_select, 'label' => 'Foto','multiple'  => true, 'choices' => $pictures_select))
            ->add('save', 'submit', array('label' => 'Editar Contacto'))
            ->getForm();



        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            //die(var_dump($data));

            $contact->setName($data['name']);
            $contact->setAddress($data['address']);
            $contact->setCity($data['city']);
            $contact->setEmail($data['email']);
            $contact->setPhone($data['phone']);
            $contact->setNotes($data['notes']);
            $contact->setPhoto('');

            foreach($categories_select as $category => $name)
                $contact->removeCategory($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Category')->find($category));

            foreach($data['categories'] as $category)
                $contact->addCategory($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Category')->find($category));

            foreach($contact->getPicture() as $picture)
                $contact->removePicture($picture);

            foreach($data['picture'] as $index => $picture)
                $contact->addPicture($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Picture')->find($picture));

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirect('/contact/edit/'.$id.'?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Contacts:edit.html.twig', array( 'form' => $form->createView(),'letter' => $letter,'breadcrumbs' => $breadcrumbs, 'contact' => $contact));
    }

}
