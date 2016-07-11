<?php

namespace Quizzero\QuizBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Quizzero\QuizBundle\Entity\Result;
use Quizzero\QuizBundle\Entity\Question;
use Quizzero\QuizBundle\Entity\Quiz;
use Quizzero\QuizBundle\Entity\User;


/**
 * Result controller.
 *
 * @Route("/user/result")
 */
class ResultController extends Controller
{

    /**
     * Creates a new Result entity.
     *
     * @Route("/new", name="result_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $results =  $request->request->get('result');
        $form_data =  $request->request->get('form');
        $quiz_id = $form_data['quiz_id'];

       

               
        $em = $this->getDoctrine()->getManager();
        

        $questions = $em-> getRepository('QuizzeroQuizBundle:Question')
                      ->  getQuestionsForQuiz($quiz_id);

        $quiz_session = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getQuizSession();

        //get user_id
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') $user_id = $user->getId(); else $user = null;

        foreach ($questions as $question) {
            
            if (isset($results[$question -> getId()])) $res = $results[$question -> getId()];
                else $res=' ';
           

            if (is_array($res)) $res = implode(";",$res);

            print_r($res);

            $correct = $em-> getRepository('QuizzeroQuizBundle:Question')
                      -> getCorrectAnswer($question -> getId(), $res);

            if ($res == $correct or $correct == '') $isCorrect = true; else $isCorrect = false;
            $result = new Result();

            $quiz = $em->getRepository('QuizzeroQuizBundle:Quiz')->find($quiz_id);
            
            $result->setUser($user);
            $result->setCorrect($correct);
            $result->setAnswer($res);
            $result->setIsCorrect($isCorrect);
            $result->setQuiz($quiz);
            $result->setQuestion($question);
            $result->setQuizSession( $quiz_session);

            
            $em->persist($result);
            $em->flush();
            
        }print_r($results);

        return $this->redirectToRoute('result_show', array('id' => $quiz_session, ));      
    }

    /**
     * Finds and displays a Result entity.
     *
     * @Route("/{id}", name="result_show")
     * @Method("GET")
     */
    public function showAction(Result $quiz_session)
    {
        $em = $this-> getDoctrine()
                   -> getManager();
        $results = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getResultData($quiz_session);
        
        $quiz_id = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getQuizId($quiz_session);

        $resultuser = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getQuizzedUser($quiz_session);

        $questions = $em-> getRepository('QuizzeroQuizBundle:Question')
                      -> getQuestionsForQuiz($quiz_id);



        $loggeduser = $this->container->get('security.context')->getToken()->getUser();
        $loggeduser = $loggeduser->getId();

        //echo $resultuser."-".$loggeduser;die;

       
        //if ($user != 'anon.') $user_id = $user->getId();        
        
        $quiz = $em->getRepository('QuizzeroQuizBundle:Quiz')->find($quiz_id);

        if ($loggeduser == $resultuser)
          return $this-> render('QuizzeroQuizBundle:Result:show.html.twig', array(
              'results'=> $results,
              'questions'=> $questions,
              'quiz'=> $quiz
              ));
        else return $this->redirect($this->generateUrl('QuizzeroQuizBundle_homepage'));

    
    }


    

}

