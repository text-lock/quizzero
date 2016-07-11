<?php

namespace Quizzero\QuizBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Quizzero\QuizBundle\Entity\Quiz;
use Quizzero\QuizBundle\Entity\Question;
use Quizzero\QuizBundle\Form\QuizType;
use Quizzero\QuizBundle\Form\QuestionType;


/**
 * Quiz controller.
 *
 * @Route("/admin/quiz")
 */
class QuizController extends Controller
{

//front_end quizzes 
    public function showFrontAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $quiz = $em->getRepository('QuizzeroQuizBundle:Quiz')->find($id);

        

        $form = $this->createFormBuilder()
            ->add('quiz_id', HiddenType::class, array('data' => $id))
            ->add('save', SubmitType::class, array('label' => 'Get your result'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $results = $request->request->get('result');

            return $this->redirectToRoute('result_new', ['request' => $request], 307);  //Write quiz results to DB
         
        }

        if (!$quiz) {
            throw $this->createNotFoundException('Unable to find Quiz.');
        }
        $questions = $em->getRepository('QuizzeroQuizBundle:Question')
                   ->getQuestionsForQuiz($quiz->getId());

        return $this->render('QuizzeroQuizBundle:Quiz:show.html.twig', array(
            'quiz'      => $quiz,
            'questions' => $questions,
            'form' => $form->createView()
        ));
    }


    /**
     * Lists all Quiz entities.
     *
     * @Route("/", name="quizlink_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $quizzes = $em->getRepository('QuizzeroQuizBundle:Quiz')->findAll();

        return $this->render('QuizzeroQuizBundle:Quiz:admin_index.html.twig', array(
            'quizzes' => $quizzes,
        ));
    }

    /**
     * Creates a new Quiz entity.
     *
     * @Route("/new", name="quizlink_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $quiz = new Quiz();
        $form = $this->createForm('Quizzero\QuizBundle\Form\QuizType', $quiz);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            // $file stores the uploaded file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $quiz->getImage();
            if ($file){
              // Generate a unique name for the file before saving it
              $fileName = md5(uniqid()).'.'.$file->guessExtension();
              // Move the file to the directory where brochures are stored
              $file->move(
                  $this->getParameter('images_directory'),
                  $fileName
              );
  			      
              $quiz->setImage($fileName);
            }
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();

            return $this->redirectToRoute('quizlink_edit', array('id' => $quiz->getId()));
        }

        return $this->render('QuizzeroQuizBundle:Quiz:admin_new.html.twig', array(
            'quiz' => $quiz,
            'form' => $form->createView(),
        ));



    }

    /**
     * Finds and displays a Quiz entity.
     *
     * @Route("/{id}", name="quizlink_show")
     * @Method("GET")
     */
    public function showAction(Quiz $quiz)
    {
        

        return $this->render('QuizzeroQuizBundle:Quiz:admin_show.html.twig', array(
            'quiz' => $quiz,
           
        ));
    }

    /**
     * Displays a form to edit an existing Quiz entity.
     *
     * @Route("/{id}/edit", name="quizlink_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Quiz $quiz, Question $question = NULL)
    {
     
        $QuizEditForm = $this->createForm('Quizzero\QuizBundle\Form\QuizType', $quiz);
        $QuizEditForm->handleRequest($request);

        if (!$question) $question = new Question;


        $QuestionEditForm = $this->createForm('Quizzero\QuizBundle\Form\QuestionType', $question);
        $QuestionEditForm->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        
        $old_image = $this->get('request')->request->get('old_image');

        if ($QuizEditForm->isSubmitted() && $QuizEditForm->isValid()) {
            // $file stores the uploaded file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            
            //check image update
            $file = $quiz->getImage();
            
            if(!$file) $fileName = $old_image;
            else{  
            
              // Generate a unique name for the file before saving it
              $fileName = md5(uniqid()).'.'.$file->guessExtension();
              
              // Move the file to the directory where brochures are stored
              $file->move(
                  $this->getParameter('images_directory'),
                  $fileName
              );

              
            }
    
            // instead of its contents
            $quiz->setImage($fileName);
        
            $em->persist($quiz);
            $em->flush();

            return $this->redirectToRoute('quizlink_edit', array('id' => $quiz->getId()));
        }


        $questions = $em->getRepository('QuizzeroQuizBundle:Question')
                  ->getQuestionsForQuiz($quiz->getId());


        return $this->render('QuizzeroQuizBundle:Quiz:admin_edit.html.twig', array(
            'quiz' => $quiz,
            'questions' => $questions,
            'quiz_edit_form' => $QuizEditForm->createView(),
            'question_edit_form' => $QuestionEditForm->createView(),
        
        ));
    }

    /**
     * Deletes a Quiz entity.
     *
     * @Route("/delete/{id}", name="quizlink_delete")
     * @Method("GET")
     */
    public function deleteAction(Quiz $quiz)
    {
         
        $em = $this->getDoctrine()->getManager();
        $em->remove($quiz);
        $em->flush();
        
        return $this->redirectToRoute('quizlink_index');
    }

  
}
