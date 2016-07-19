<?php
// src/Quizzero/QuizBundle/Form/QuizType.php
namespace Quizzero\QuizBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;




class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
        $builder->add('results', CollectionType::class, array(
            'entry_type' => ResultType::class
        ));
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'Quizzero\QuizBundle\Entity\Quiz',
            'validation_groups' => false,
        ));
    }
}