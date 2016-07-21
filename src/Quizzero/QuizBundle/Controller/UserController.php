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
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{

    /**
     * Finds and displays a Result entity.
     *
     * @Route("user/", name="user_show")
     * @Method("GET")
     */
    public function showAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this-> getDoctrine()
                   -> getManager();
        $results = $em-> getRepository('QuizzeroQuizBundle:Result')
                      -> getUserResults($user);
                
        return $this-> render('QuizzeroQuizBundle:User:show.html.twig', array(
              'results'=> $results,
              ));
    }
}

