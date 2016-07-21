<?php
// src/Quizzero/QuizBunble/Controller/PageController.php

/*Render Quiz list on main page*/

namespace Quizzero\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
    	$em = $this-> getDoctrine()
    			   -> getManager();
    	$quizzes = $em-> getRepository('QuizzeroQuizBundle:Quiz')
    				  -> getLatestQuizzes();
        
        return $this-> render('QuizzeroQuizBundle:Page:index.html.twig', array(
        	'quizzes'=> $quizzes, ));

    }
}

