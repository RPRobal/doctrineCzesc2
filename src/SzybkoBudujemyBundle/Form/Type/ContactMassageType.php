<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-08-06
 * Time: 11:19
 */

namespace SzybkoBudujemyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactMassageType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', 'text')
            ->add('massage', 'textarea')
            ->add('submit', 'submit')
        ;
    }
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'ContactMassage';
    }
}