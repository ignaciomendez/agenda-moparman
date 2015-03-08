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

class CategoriesController extends Controller
{
    public function indexAction(Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '#',
                'section' => 'Home'
            ),
            array (
                'link' => '/categories',
                'section' => 'Categorías'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('MDOAgendaMoparmanBundle:Category')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:Categories:index.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'categories' => $contacts));
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

            $category = new Category();
            $category->setName($data['name']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect('/categories/add?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Categories:new.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => array(
                array(
                    'link' => '/',
                    'section' => 'Home'
                ),
                array(
                    'link' => '/categories',
                    'section' => 'Categorías'
                ),
                array(
                    'link' => '/categories/add',
                    'section' => 'Agregar Categoría'
                )
            ),
            'letter' => $letter
        ));

    }


}