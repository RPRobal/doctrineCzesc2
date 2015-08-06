<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-08-05
 * Time: 14:42
 */

namespace SzybkoBudujemyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RealizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('place', 'text')
            ->add('save', 'submit', array('label'=> 'Zapisz' ))
        ;
    }
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
       return 'realization';
    }
}
