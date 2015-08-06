<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-08-05
 * Time: 20:42
 */

namespace SzybkoBudujemyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('description', 'textarea')
            ->add('file', 'file')
            ->add('submit', 'submit');
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'Photo';
    }
}
