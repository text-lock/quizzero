<?php
namespace Quizzero\QuizBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Quizzero\QuizBundle\Entity\Result;
use Quizzero\QuizBundle\Entity\Question;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;



class ResultType extends AbstractType
{
   
   public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA , function (FormEvent $event) {
           
            $result = $event->getData();
            $question = $result->getQuestion();
            $form = $event->getForm();
            $answer = $result->getAnswer();
 
            if(!is_array($answer)){ 
                $answer = explode(";", $answer);
           
            }

            $q_type = $answer[0];
            unset($answer[0]);
            $answer = array_combine($answer, $answer);

            $form->add('question');

            
           if($q_type == "radio"){
                $form->add('answer', ChoiceType::class, array(
                    'choices' => $answer,
                    'multiple' => false,
                    'expanded' => true,
                    'required'=>false,
                    'placeholder' => false,
                ));
            }elseif($q_type == "checkbox"){
                $form->add('answer', ChoiceType::class, array(
                    'choices' => $answer,
                    'multiple' => true,
                    'expanded' => true,
                    'required'=>false,
                ));
            }
            elseif($q_type == "textarea"){   
                $form->add('answer','textarea',array(
                    'data' => '', 
                    'required'=>false));
            }
            elseif($q_type == "text"){
               $form->add('answer','text',array(
                    'data' => '',
                    'required'=>false));
            }

            
        });   


    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
           'data_class' => 'Quizzero\QuizBundle\Entity\Result',
           'validation_groups' => false,
        ));
    }
}