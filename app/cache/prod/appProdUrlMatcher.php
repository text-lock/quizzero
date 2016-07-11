<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin/qu')) {
            if (0 === strpos($pathinfo, '/admin/questions')) {
                // questionlink_index
                if (rtrim($pathinfo, '/') === '/admin/questions') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_questionlink_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'questionlink_index');
                    }

                    return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::indexAction',  '_route' => 'questionlink_index',);
                }
                not_questionlink_index:

                // questionlink_new
                if ($pathinfo === '/admin/questions/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_questionlink_new;
                    }

                    return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::newAction',  '_route' => 'questionlink_new',);
                }
                not_questionlink_new:

                // questionlink_show
                if (preg_match('#^/admin/questions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_questionlink_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionlink_show')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::showAction',));
                }
                not_questionlink_show:

                // questionlink_edit
                if (preg_match('#^/admin/questions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_questionlink_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionlink_edit')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::editAction',));
                }
                not_questionlink_edit:

                // questionlink_delete
                if (preg_match('#^/admin/questions/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_questionlink_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionlink_delete')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_questionlink_delete:

            }

            if (0 === strpos($pathinfo, '/admin/quiz')) {
                // quizlink_index
                if (rtrim($pathinfo, '/') === '/admin/quiz') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quizlink_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quizlink_index');
                    }

                    return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::indexAction',  '_route' => 'quizlink_index',);
                }
                not_quizlink_index:

                // quizlink_new
                if ($pathinfo === '/admin/quiz/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_quizlink_new;
                    }

                    return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::newAction',  '_route' => 'quizlink_new',);
                }
                not_quizlink_new:

                // quizlink_show
                if (preg_match('#^/admin/quiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quizlink_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizlink_show')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::showAction',));
                }
                not_quizlink_show:

                // quizlink_edit
                if (preg_match('#^/admin/quiz/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_quizlink_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizlink_edit')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::editAction',));
                }
                not_quizlink_edit:

                // quizlink_delete
                if (preg_match('#^/admin/quiz/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_quizlink_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizlink_delete')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::deleteAction',));
                }
                not_quizlink_delete:

            }

        }

        if (0 === strpos($pathinfo, '/result')) {
            // result_new
            if ($pathinfo === '/result/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_result_new;
                }

                return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\ResultController::newAction',  '_route' => 'result_new',);
            }
            not_result_new:

            // result_show
            if (preg_match('#^/result/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_result_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'result_show')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\ResultController::showAction',));
            }
            not_result_show:

        }

        // QuizzeroQuizBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'QuizzeroQuizBundle_homepage');
            }

            return array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\PageController::indexAction',  '_route' => 'QuizzeroQuizBundle_homepage',);
        }

        // QuizzeroQuizBundle_quiz_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'QuizzeroQuizBundle_quiz_show')), array (  '_controller' => 'Quizzero\\QuizBundle\\Controller\\QuizController::showFrontAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
