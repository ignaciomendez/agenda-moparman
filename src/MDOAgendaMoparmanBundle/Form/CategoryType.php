<?php
namespace MDOAgendaMoparmanBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CategoryType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->add('categories');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MDOAgenciaMoparmanBundle\\Entity\\Category',
        ));
    }

    public function getName()
    {
        return 'categories';
    }
}