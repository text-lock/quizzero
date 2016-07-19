<?php

namespace Quizzero\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class AdminQuizType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('image', 'file', array( 'data_class' => null, 'validation_groups' => false,))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quizzero\QuizBundle\Entity\Quiz'
        ));

        $resolver->setDefaults(array(
        'attr'=>array('novalidate'=>'novalidate')
         ));
    }

   public function getName()
    {
        return 'quiz';
    }

}
