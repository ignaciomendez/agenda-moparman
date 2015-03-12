<?php

namespace MDOAgendaMoparmanBundle\Controller;

//use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
//use MDOAgendaMoparmanBundle\Form\CategoryType;
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
                'link' => '/',
                'section' => 'Home'
            ),
            array (
                'link' => '/categories',
                'section' => 'Categorías'
            )
        );

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('MDOAgendaMoparmanBundle:Category')->findAll();

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:Categories:list.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'categories' => $categories));
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

    public function deleteCategoriesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $category = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:Category')
                ->find($delete_id);
            $em->remove($category);
        }
        $em->flush();
        return $this->redirect('/categories?success');
    }

    public function editCategoryAction($id, Request $request){
        $letter = null;
        if($request->query->get('success') !== null)
            $letter = 'success';

        $category = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Category')
            ->findById($id)[0];

        $breadcrumbs = array(
            array('link' => '/', 'section' => 'home'),
            array('link' => '/categories', 'section' => 'Categorías'),
            array('link' => '/categories/edit/'.$category->getId(), 'section' => $category->getName())
        );

        $form = $this->createFormBuilder()
            ->add('name', 'text', array('label' => 'Nombre', 'data' => $category->getName()))
            ->add('save', 'submit', array('label' => 'Editar Categoría'))
            ->getForm();



        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $category->setName($data['name']);


            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect('/categories/edit/'.$id.'?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Categories:edit.html.twig', array( 'form' => $form->createView(),'letter' => $letter,'breadcrumbs' => $breadcrumbs, 'category' => $category));
    }

}
