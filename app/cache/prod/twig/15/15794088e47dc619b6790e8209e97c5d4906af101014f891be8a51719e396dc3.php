<?php

/* QuizzeroQuizBundle::layout.html.twig */
class __TwigTemplate_b2401a8a011a9f48ef83ee144b146b52023fddf973b7fc75515016db8a9a4cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzeroQuizBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
