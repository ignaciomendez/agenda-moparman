<?php

namespace MDOAgendaMoparmanBundle\Controller;


use MDOAgendaMoparmanBundle\Entity\Vehicle;
use MDOAgendaMoparmanBundle\Entity\VehicleCategory;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VehiclesController extends Controller {
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/vehicles',
                'section' => 'Mercadería'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $vehicles = $em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:Vehicles:list.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'vehicles' => $vehicles));
    }

    public function addVehicleAction(Request $request)
    {

        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/vehicles',
                'section' => 'Mercadería'
            ),
            array (
                'link' => '/vehicles/add',
                'section' => 'Nueva Mercadería'
            )
        );

        $categories = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')
            ->findAll();

        foreach($categories as $category){
            $categories_select[$category->getId()] = $category->getName();
        }

        $contacts = $this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Contact')->findAll();
        foreach($contacts as $contact){
            $contacts_select[$contact->getId()] = $contact->getName();
        }

        $form = $this->createFormBuilder()
            ->add('name', 'text',array('label' => 'Nombre'))
            ->add('plate', 'text',array('label' => 'Patente'))
            ->add('description', 'textarea',array('label' => 'Descripción'))
            ->add('notes', 'textarea',array('label' => 'Notas'))
            ->add('categories', 'choice', array('label' => 'Marca(s)', 'expanded' => true, 'multiple' => true, 'choices' => $categories_select))
            ->add('owner', 'choice', array('label' => 'Dueño', 'choices' => $contacts_select))
            ->add('save', 'submit', array('label' => 'Agregar Mercadería'))
            ->getForm();

        $form->handleRequest($request);

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        if ($form->isValid()) {
            $data = $form->getData();

            $vehicle = new Vehicle();
            $vehicle->setTitle($data['name']);
            $vehicle->setPlate($data['plate']);
            $vehicle->setDescription($data['description']);
            $vehicle->setNotes($data['notes']);

            foreach($data['categories'] as $category)
                $vehicle->addCategories($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')->findById($category)[0]);

            $vehicle->addOwner($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Contact')->findById($data['owner'])[0]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicle);
            $em->flush();

            return $this->redirect('/vehicles/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Categories:new.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => $breadcrumbs,
            'letter' => $letter
        ));

    }

    public function deleteVehiclesAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $vehicle = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:Vehicle')
                ->find($delete_id);
            $em->remove($vehicle);
        }
        $em->flush();
        return $this->redirect('/vehicles?success');
    }

    public function editVehicleAction($id, Request $request){
        $categories = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')
            ->findAll();

        foreach($categories as $category){
            $categories_select[$category->getId()] = $category->getName();
        }

        $contacts = $this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Contact')->findAll();
        foreach($contacts as $contact)
            $contacts_select[$contact->getId()] = $contact->getName();

        $actual_vehicle = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Vehicle')
            ->findById($id)[0];

        foreach($actual_vehicle->getCategories() as $category)
            $selected_categories[] = $category->getId();

        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/vehicles',
                'section' => 'Mercadería'
            ),
            array (
                'link' => '/vehicles/edit/'.$id,
                'section' => 'Editar '.$actual_vehicle->getTitle()
            )
        );

        $form = $this->createFormBuilder()
            ->add('name', 'text',array('label' => 'Nombre', 'data' => $actual_vehicle->getTitle()))
            ->add('plate', 'text',array('label' => 'Patente', 'data' => $actual_vehicle->getPlate()))
            ->add('description', 'textarea',array('label' => 'Descripción', 'data' => $actual_vehicle->getDescription()))
            ->add('notes', 'textarea',array('label' => 'Notas', 'data' => $actual_vehicle->getNotes()))
            ->add('categories', 'choice', array('label' => 'Marca(s)', 'expanded' => true, 'multiple' => true, 'data' => $selected_categories, 'choices' => $categories_select))
            ->add('owner', 'choice', array('label' => 'Dueño', 'choices' => $contacts_select, 'data' => $actual_vehicle->getOwners()[0]->getId()))
            ->add('save', 'submit', array('label' => 'Agregar Mercadería'))
            ->getForm();

        $form->handleRequest($request);

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        if ($form->isValid()) {
            $data = $form->getData();

            $actual_vehicle->setTitle($data['name']);
            $actual_vehicle->setPlate($data['plate']);
            $actual_vehicle->setDescription($data['description']);
            $actual_vehicle->setNotes($data['notes']);


            foreach($categories_select as $category => $name)
                $actual_vehicle->removeCategory($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')->findById($category)[0]);

            foreach($data['categories'] as $category)
                $actual_vehicle->addCategories($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')->findById($category)[0]);

            foreach($contacts_select as $contact => $name)
                $actual_vehicle->removeOwner($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Contact')->findById($contact)[0]);

            $actual_vehicle->addOwner($this->getDoctrine()->getRepository('MDOAgendaMoparmanBundle:Contact')->findById($data['owner'])[0]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($actual_vehicle);
            $em->flush();

            return $this->redirect('/vehicles/edit/'.$id.'?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Categories:new.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => $breadcrumbs,
            'letter' => $letter
        ));
    }
} 