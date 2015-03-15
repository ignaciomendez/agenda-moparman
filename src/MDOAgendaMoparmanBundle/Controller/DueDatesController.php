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
        foreach($vehicles as $vehicle)
            $vehicle_select[$vehicle->getId()] = $vehicle->getTitle();

        $form = $this->createFormBuilder()
            ->add('vehicle', 'choice', array(
                'choices'   => $vehicle_select,
                'label' => 'Vehículo',
            ))
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
            $duedate->setStartDate($data['start_date']);
            $duedate->setDueDate($data['due_date']);
            $duedate->setPrice($data['price']);
            $duedate->setReminders($data['reminder']);
            $duedate->setDescription($data['description']);
            $duedate->setNotes($data['notes']);
            $duedate->setVehicle($em->getRepository('MDOAgendaMoparmanBundle:Vehicle')->findById($data['vehicle'])[0]);


            $em = $this->getDoctrine()->getManager();
            $em->persist($duedate);
            $em->flush();

            return $this->redirect('/due-dates/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:DueDates:new.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs,'form' => $form->createView()));    }
}