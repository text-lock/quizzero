<?php

namespace Quizzero\QuizBundle\Controller;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
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

        $block_quiz =  $request->request->get('quiz');
        $block_results = $block_quiz['results'];
        $quiz_id = $block_quiz['quiz'];

               
        $em = $this->getDoctrine()->getManager();
        $questions = $em-> getRepository('QuizzeroQuizBundle:Question')
                      ->  getQuestionsForQuiz($quiz_id);
        $quiz_session = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getQuizSession();
        $quiz = $em->getRepository('QuizzeroQuizBundle:Quiz')->find($quiz_id);

        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($user != 'anon.') $user_id = $user->getId(); else $user = null;
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        foreach ($block_results as $result) {
            $answer = array(); //USER aanswer list
            $correct = array(); //CORRECT answer list
            $tmp = array();

            $results = new Result();
            $question_id = $result['question'];
            if(!isset($result['answer'])) $result['answer'] = '' ;
            $question = $em->getRepository('QuizzeroQuizBundle:Question')->find($question_id);

            $question_type = $question->getType();
            if(is_array($result['answer'])) $answer = $result['answer'];
                else $answer[0] = $result['answer'];

            $variants = json_decode($question->getVariates());
            for ($i = 0; $i < count($variants); ++$i){
                $tmp = get_object_vars($variants[$i]);
                if ($tmp['isCorrect']) $correct[] = $tmp['value'];
            }

            sort($correct);
            sort($answer);
  
            if(($question_type == 'textarea' and $correct[0] =='') 
                    or ($correct == $answer))
                $isCorrect = true;
            else $isCorrect = false;
          
            $results->setUser($user);
            $results->setAnswer(implode(" ",$answer));
            $results->setQuiz($quiz);
            $results->setQuestion($question);
            $results->setQuizSession($quiz_session);
            $results->setIsCorrect($isCorrect);
         
            $em->persist($results);
            $em->flush();
        }
            
        return $this->redirectToRoute('result_show', array('id' => $quiz_session, ));      
    }

    /**
     * Finds and displays a Result entities.
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
        
        $quiz = $em->getRepository('QuizzeroQuizBundle:Quiz')->find($quiz_id);

        foreach ($questions as $question){
            $correct = '';
            $correct_ = json_decode($question->getVariates());
            for ($i = 0; $i < count($correct_); ++$i){
                $tmp = get_object_vars($correct_[$i]);
                if ($tmp['isCorrect'] == true)
                $correct .= " ".$tmp['value'];
            }
            $question->setVariates($correct);

        }

        if ($loggeduser == $resultuser)

            return $this-> render('QuizzeroQuizBundle:Result:show.html.twig', array(
              'results'=> $results,
              'questions'=> $questions,
              'quiz'=> $quiz,
              ));

        else return $this->redirect($this->generateUrl('QuizzeroQuizBundle_homepage'));

    
    }


    

}

