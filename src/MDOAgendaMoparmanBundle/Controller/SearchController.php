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

class SearchController extends Controller
{
    public function indexAction($result, Request $request)
    {
        $breadcrumbs = array(
            array(
                'link' => '#',
                'section' => 'Home'
            ),
            array (
                'link' => '#',
                'section' => 'Buscar'
            ),
            array (
                'link' => '/search/'.$result,
                'section' => $result
            ),
        );


        $letter = false;
        if($request->query->get('success') !== null)
            $letter = 'success';

        $em = $this->getDoctrine()->getManager();
        $categories = $em->createQuery("SELECT c FROM MDOAgendaMoparmanBundle:Category c WHERE c.name LIKE :searchterm")
            ->setParameter('searchterm', '%'.$result.'%')->getResult();
        $contacts = $em->createQuery("SELECT c FROM MDOAgendaMoparmanBundle:Contact c WHERE c.name LIKE :searchterm OR c.email LIKE :searchterm OR c.city LIKE :searchterm OR c.phone LIKE :searchterm OR c.photo LIKE :searchterm")
            ->setParameter('searchterm', '%'.$result.'%')->getResult();


        return $this->render('MDOAgendaMoparmanBundle:Search:results.html.twig', array('letter' => $letter,'breadcrumbs' => $breadcrumbs, 'result' => $result, 'contacts' => $contacts, 'categories' => $categories));
    }




}
