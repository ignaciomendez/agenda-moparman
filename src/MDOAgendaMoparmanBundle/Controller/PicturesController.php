<?php

namespace MDOAgendaMoparmanBundle\Controller;

//use MyProject\Proxies\__CG__\OtherProject\Proxies\__CG__\stdClass;
use MDOAgendaMoparmanBundle\Entity\Picture;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PicturesController extends Controller
{

    public function uploadAction(Request $request)
    {

        $picture = new Picture();
        $form = $this->createFormBuilder($picture)
            ->add('description', 'textarea',array('label' => 'Descripción','required' => false))
            ->add('file', 'file',array('label' => 'Archivo','required' => true))
            ->add('save', 'submit', array('label' => 'Subir'))
            ->getForm();

        $form->handleRequest($request);

        $letter = false;

        if($request->query->get('success') !== null)
            $letter = 'success';

        if ($form->isValid()) {
            $file = $form->get('file')->getData();
            $name = md5($file->getClientOriginalName().time());
            $dir = __DIR__.'/../../../web/uploads/pictures';
            $file->move($dir,$name) ;

            $em = $this->getDoctrine()->getManager();
            $picture->setPath($name);
            $em->persist($picture);
            $em->flush();
            return $this->redirect('/upload?success');
        }

        return $this->render('MDOAgendaMoparmanBundle:Pictures:upload.html.twig', array(
            'form' => $form->createView(),
            'breadcrumbs' => array(
                array(
                    'link' => '/',
                    'section' => 'Home'
                ),
                array(
                    'link' => '/gallery',
                    'section' => 'Fotos'
                ),
                array(
                    'link' => '/upload',
                    'section' => 'Subir Foto'
                )
            ),
            'letter' => $letter
        ));
    }

    public function galleryAction(Request $request)
    {

        $pictures = $this->getDoctrine()
            ->getRepository('MDOAgendaMoparmanBundle:Picture')
            ->findAll();

        $letter = null;
        if($request->query->get('success') !== null)
            $letter = 'success';

        return $this->render('MDOAgendaMoparmanBundle:Pictures:gallery.html.twig', array(
            'breadcrumbs' => array(
                array(
                    'link' => '/',
                    'section' => 'Home'
                ),
                array(
                    'link' => '/gallery',
                    'section' => 'Fotos'
                )
            ),
            'letter' => $letter,
            'pictures' => $pictures
        ));
    }

    public function deleteAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        foreach($request->request->get("delete_ids") as $delete_id){
            $picture = $this->getDoctrine()
                ->getRepository('MDOAgendaMoparmanBundle:Picture')
                ->find($delete_id);
            $em->remove($picture);
        }
        $em->flush();
        return $this->redirect('/gallery?success');
    }

}
