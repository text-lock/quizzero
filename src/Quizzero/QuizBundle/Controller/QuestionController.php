<?php
/*Render Quiz list on main page*/
namespace Quizzero\QuizBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Quizzero\QuizBundle\Entity\Question;
use Quizzero\QuizBundle\Entity\Quiz;
use Quizzero\QuizBundle\Form\AdminQuestionType;
use Quizzero\QuizBundle\Form\AdminQuizType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


/**
 * Question controller.
 *
 * @Route("admin/questions")
 */
class QuestionController extends Controller
{
    
   
    /**
     * Creates a new Question entity.
     *
     * @Route("/new", name="questionlink_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $question = new Question();
        $QuestionEditForm = $this->createForm('Quizzero\QuizBundle\Form\AdminQuestionType', $question);
        $QuestionEditForm->handleRequest($request);

        if ($QuestionEditForm->isSubmitted() && $QuestionEditForm->isValid()) {

            $file = $question->getImage();
            if ($file){
              // Generate a unique name for the file before saving it
              $fileName = md5(uniqid()).'.'.$file->guessExtension();
              // Move the file to the directory where brochures are stored
              $file->move(
                  $this->getParameter('images_directory'),
                  $fileName
              );
                  
              $question->setImage($fileName);
            }

            
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();
            $quiz = $question -> getQuiz();
            return $this->redirectToRoute('quizlink_edit', array('id' => $quiz->getId(),));
        }

        return $this->render('QuizzeroQuizBundle:Question:admin_edit.html.twig', array(
            'question' => $question,
            'question_edit_form' => $QuestionEditForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Question entity.
     *
     * @Route("/{id}/edit", name="questionlink_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Question $question)
    {
        
        $QuestionEditForm = $this->createForm('Quizzero\QuizBundle\Form\AdminQuestionType', $question);
        $QuestionEditForm->handleRequest($request);

        $old_image = $this->get('request')->request->get('old_image');

        if ($QuestionEditForm->isSubmitted() && $QuestionEditForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

             //check image update
            $file = $question->getImage();
            
            if(!$file) $fileName = $old_image;
            else{  
            
              // Generate a unique name for the file before saving it
              $fileName = md5(uniqid()).'.'.$file->guessExtension();
              
              $file->move($this->getParameter('images_directory'), $fileName);
            }

            $question->setImage($fileName);
            $quiz = $question -> getQuiz();
            
            $em->persist($question);
            $em->flush();
            $quiz = $question -> getQuiz();       
            
            return $this->redirectToRoute('quizlink_edit', array('id' => $quiz->getId()));
        }

        return $this->render('QuizzeroQuizBundle:Question:admin_edit.html.twig', array(
            'question' => $question,
            'question_edit_form' => $QuestionEditForm->createView(),
            
        ));
    }

    /**
     * Deletes a Question entity.
     *
     * @Route("/{id}/delete", name="questionlink_delete")
     * @Method("GET")
     */
    public function deleteAction(Question $question)
    {
        $quiz = $question->getQuiz();
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($question);
        $em->flush();
        
        return $this->redirectToRoute('quizlink_edit', array('id' => $quiz->getId()));
        
    }


    
}
