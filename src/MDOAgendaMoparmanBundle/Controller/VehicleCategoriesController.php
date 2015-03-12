<?php

namespace MDOAgendaMoparmanBundle\Controller;

use MDOAgendaMoparmanBundle\Entity\Vehicle;
use MDOAgendaMoparmanBundle\Entity\VehicleCategory;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VehicleCategoriesController extends Controller {
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/vehicle-categories',
                'section' => 'Marcas'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:VehicleCategories:list.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'categories' => $categories));
    }

    public function addCategoryAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('name', 'text',array('label' => 'Nombre'))
            ->add('save', 'submit', array('label' => 'Crear Categoría'))
            ->getForm();

        $form->handleRequest($request);

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        if ($form->isValid()) {
            $data = $form->getData();

            $category = new VehicleCategory();
            $category->setName($data['name']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect('/vehicle-categories/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:VehicleCategories:new.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => array(
                array(
                    'link' => '/',
                    'section' => 'Home'
                ),
                array(
                    'link' => '/vehicle-categories',
                    'section' => 'Marcas'
                ),
                array(
                    'link' => '/vehicle-categories/add',
                    'section' => 'Agregar Marca'
                )
            ),
            'letter' => $letter
        ));

    }

    public function deleteCategoriesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $category = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')
                ->find($delete_id);
            $em->remove($category);
        }
        $em->flush();
        return $this->redirect('/vehicle-categories?success');
    }

    public function editCategoryAction($id, Request $request){
        $letter = null;
        if($request->query->get('success') !== null)
            $letter = 'success';

        $category = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:VehicleCategory')
            ->findById($id)[0];

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'home'),
            array('link' => '/vehicle-categories', 'section' => 'Marcas'),
            array('link' => '/vehicle-categories/edit/'.$category->getId(), 'section' => $category->getName())
        );

        $form = $this->createFormBuilder()
            ->add('name', 'text', array('label' => 'Nombre', 'data' => $category->getName()))
            ->add('save', 'submit', array('label' => 'Editar Marca'))
            ->getForm();



        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $category->setName($data['name']);


            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect('/vehicle-categories/edit/'.$id.'?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:VehicleCategories:edit.html.twig', array( 'form' => $form->createView(),'letter' => $letter,'breadcrumbs' => $breadcrumbs, 'category' => $category));
    }
} 