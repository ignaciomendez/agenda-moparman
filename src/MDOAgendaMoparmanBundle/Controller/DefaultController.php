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
                'link' => '/',
                'section' => 'Home'
            )
        );
        return $this->render('MDOAgendaMoparmanBundle:Default:contacts.html.twig', array('name' => $name, 'breadcrumbs' => $breadcrumbs, 'contacts' => $contacts));
    }
    
}
