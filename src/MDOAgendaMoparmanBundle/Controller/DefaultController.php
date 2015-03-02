<?php

namespace MDOAgendaMoparmanBundle\Controller;

use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MDOAgendaMoparmanBundle\Entity\Contact;
use MDOAgendaMoparmanBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction($name='welt')
    {
        $breadcrumbs = array(
            array(
                'link' => '#',
                'section' => 'Home'
            ),
            array (
                'link' => '/contacts',
                'section' => 'Contacts'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('MDOAgendaMoparmanBundle:Contact')->findAll();
        return $this->render('MDOAgendaMoparmanBundle:Default:contacts.html.twig', array('name' => $name, 'breadcrumbs' => $breadcrumbs, 'contacts' => $contacts));
    }

    public function addContactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('MDOAgendaMoparmanBundle:Category')->find(1);

        $contact = new Contact();
        $contact->setName("Sergio Milardovich");
        $contact->setEmail("sergio@gmail.com");
        $contact->setPhone("(03465) 412423");
        $contact->setCity("Villada");
        $contact->setPhoto("algo.png");
        $contact->setNotes("Lorem Ipsum");


        $category->addContact($contact);



      //  $em->persist($category);
        $em->persist($contact);
        $em->flush();

        return new Response('Created contact id '.$contact->getId());
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
            array('link' => '#', 'section' => $category->getName())
        );

        return $this->render('MDOAgendaMoparmanBundle:Default:contacts.html.twig', array('breadcrumbs' => $breadcrumbs, 'contacts' => $contacts));

    }
}
