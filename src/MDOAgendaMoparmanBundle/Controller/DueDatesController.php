<?php

namespace MDOAgendaMoparmanBundle\Controller;

//use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
use MDOAgendaMoparmanBundle\Entity\DueDate;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DueDatesController extends Controller {
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/due-dates',
                'section' => 'Vencimientos'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $duedates = $em->getRepository('MDOAgendaMoparmanBundle:DueDate')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:DueDates:list.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'duedates' => $duedates));
    }

    public function addAction(Request $request)
    {
        $letter = false;

        $em = $this->getDoctrine()->getManager();

        if($request->query->get('success') !== null)
            $letter = 'success';

        $vehicles = $em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findAll();
        $vehicle_select[0] = 'Ninguno';
        foreach($vehicles as $vehicle)
            $vehicle_select[$vehicle->getId()] = $vehicle->getTitle();

        $form = $this->createFormBuilder()
            ->add('vehicle', 'choice', array(
                'choices'   => $vehicle_select,
                'label' => 'Vehículo',
            ))
            ->add('vehicle_description', 'text', array('label' => 'Vehículo (en caso de no estar en el listado)', 'required' => false))
            ->add('start_date', 'date',array('label' => 'Fecha de Inicio del Trámite','required' => false))
            ->add('due_date', 'date',array('label' => 'Fecha de Vencimiento del Trámite','required' => false))
            ->add('price', 'number',array('label' => 'Monto','required' => false))
            ->add('reminder', 'choice',array('choices' => array(30 => 'Un mes (30 días)', 7 => 'Una semana', 1 => 'Un día'),'label' => 'Recordatorio','required' => false))
            ->add('description', 'text',array('label' => 'Descripción del trámite','required' => true))
            ->add('notes', 'textarea',array('label' => 'Notas','required' => false))
            ->add('save', 'submit', array('label' => 'Crear Vencimiento'))
            ->getForm();

        $form->handleRequest($request);

        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/due-dates',
                'section' => 'Vencimientos'
            ),
            array (
                'link' => '/due-dates/add',
                'section' => 'Agregar Vencimiento'
            )
        );

        if ($form->isValid()) {
            $data = $form->getData();

            $duedate = new DueDate();
            $duedate->setVehicleDescription($data['vehicle_description']);
            $duedate->setStartDate($data['start_date']);
            $duedate->setDueDate($data['due_date']);
            $duedate->setPrice($data['price']);
            $duedate->setReminders($data['reminder']);
            $duedate->setDescription($data['description']);
            $duedate->setNotes($data['notes']);

            if($data['vehicle'] !== 0)
                $duedate->setVehicle($em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findById($data['vehicle'])[0]);


            $em = $this->getDoctrine()->getManager();
            $em->persist($duedate);
            $em->flush();

            return $this->redirect('/due-dates/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:DueDates:new.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs,'form' => $form->createView()));
    }

    public function editAction($id, Request $request){
        $letter = false;

        $em = $this->getDoctrine()->getManager();

        $duedate = $em->getRepository('MDOAgendaMoparmanBundle:DueDate')->findById($id)[0];

        if($request->query->get('success') !== null)
            $letter = 'success';

        $vehicles = $em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findAll();

        $vehicle_select[0] = 'Ninguno';
        foreach($vehicles as $vehicle)
            $vehicle_select[$vehicle->getId()] = $vehicle->getTitle();

        $form = $this->createFormBuilder()
            ->add('vehicle', 'choice', array(
                'choices'   => $vehicle_select,
                'label' => 'Vehículo',
            ))
            ->add('vehicle_description', 'text', array('label' => 'Vehículo (en caso de no estar en el listado)', 'required' => false, 'data' => $duedate->getVehicleDescription()))
            ->add('start_date', 'date',array('label' => 'Fecha de Inicio del Trámite','required' => false, 'data' => $duedate->getStartDate()))
            ->add('due_date', 'date',array('label' => 'Fecha de Vencimiento del Trámite','required' => false, 'data' => $duedate->getDueDate()))
            ->add('price', 'number',array('label' => 'Monto','required' => false, 'data' => $duedate->getPrice()))
            ->add('reminder', 'choice',array('data' => $duedate->getReminders(), 'choices' => array(30 => 'Un mes (30 días)', 7 => 'Una semana', 1 => 'Un día'),'label' => 'Recordatorio','required' => false))
            ->add('description', 'text',array('data' => $duedate->getDescription(), 'label' => 'Descripción del trámite','required' => true))
            ->add('notes', 'textarea',array('data' => $duedate->getNotes(), 'label' => 'Notas','required' => false))
            ->add('save', 'submit', array('label' => 'Editar Vencimiento'))
            ->getForm();

        $form->handleRequest($request);

        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/due-dates',
                'section' => 'Vencimientos'
            ),
            array (
                'link' => '#',
                'section' => 'Editar Vencimiento'
            )
        );

        if ($form->isValid()) {
            $data = $form->getData();

            $duedate->setVehicleDescription($data['vehicle_description']);
            $duedate->setStartDate($data['start_date']);
            $duedate->setDueDate($data['due_date']);
            $duedate->setPrice($data['price']);
            $duedate->setReminders($data['reminder']);
            $duedate->setDescription($data['description']);
            $duedate->setNotes($data['notes']);

            if($data['vehicle'] !== 0)
                $duedate->setVehicle($em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findById($data['vehicle'])[0]);
            else
                $duedate->setVehicle(null);


            $em = $this->getDoctrine()->getManager();
            $em->persist($duedate);
            $em->flush();

            return $this->redirect('/due-dates/edit/'.$id.'?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:DueDates:edit.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs,'form' => $form->createView()));
    }

    public function deleteAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $duedate = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:DueDate')
                ->find($delete_id);
            $em->remove($duedate);
        }
        $em->flush();
        return $this->redirect('/due-dates?success');
    }

    public function showAction($id){

        $duedate = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:DueDate')
            ->findById(intval($id))[0];

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'Home'),
            array('link' => '/due-dates', 'section' => 'Contactos'),
            array('link' => '/due-dates/$id', 'section' => $duedate->getDescription())
        );
        return $this->render('MDOAgendaMoparmanBundle:DueDates:single.html.twig', array('breadcrumbs' => $breadcrumbs, 'due' => $duedate));
    }
}