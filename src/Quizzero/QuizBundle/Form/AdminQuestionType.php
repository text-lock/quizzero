<?php

namespace Quizzero\QuizBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AdminQuestionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type', ChoiceType::class, array(
                'choices' => array(
                    'textarea' => 'textarea',
                    'text' => 'text',
                    'radio'   => 'radio',
                    'checkbox' => 'checkbox',
                ),
                'choices_as_values' => true,
                'preferred_choices' => array('muppets', 'arr', )
    
            ))
            ->add('quiz')
            ->add('body')
            ->add('image', 'file', array( 'data_class' => null, ))
            ->add('variates', HiddenType::class);
            
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quizzero\QuizBundle\Entity\Question', 
        ));
         $resolver->setDefaults(array(
             'attr'=>array('novalidate'=>'novalidate', )
         ));

    }
}
