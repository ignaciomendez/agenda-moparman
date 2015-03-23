<?php
namespace MDOAgendaMoparmanBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class GallerypickerType extends AbstractType {


    public function getName()
    {
        return 'gallerypicker';
    }

    public function getParent(){
        return 'choice';
    }
}