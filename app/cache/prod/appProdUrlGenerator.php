<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'questionlink_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/questions/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionlink_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/questions/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionlink_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/questions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionlink_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/questions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionlink_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/questions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quizlink_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/quiz/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quizlink_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/quiz/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quizlink_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/quiz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quizlink_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/quiz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quizlink_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/quiz',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'result_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\ResultController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/result/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'result_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\ResultController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/result',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'QuizzeroQuizBundle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'QuizzeroQuizBundle_quiz_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::showFrontAction',  ),  2 =>   array (    'methods' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
