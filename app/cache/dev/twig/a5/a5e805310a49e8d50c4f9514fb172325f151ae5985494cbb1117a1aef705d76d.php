<?php

/* QuizzeroQuizBundle::layout.html.twig */
class __TwigTemplate_83cf8b97f4f3f9494f8b780c248b55d956e9405318b075de36cc82ad3a7510f7 extends Twig_Template
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
        $__internal_2d21d4eeba1f423c83793a7f4df3c460d7b1c28cb1d5ba73472b997b4f6811a1 = $this->env->getExtension("native_profiler");
        $__internal_2d21d4eeba1f423c83793a7f4df3c460d7b1c28cb1d5ba73472b997b4f6811a1->enter($__internal_2d21d4eeba1f423c83793a7f4df3c460d7b1c28cb1d5ba73472b997b4f6811a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d21d4eeba1f423c83793a7f4df3c460d7b1c28cb1d5ba73472b997b4f6811a1->leave($__internal_2d21d4eeba1f423c83793a7f4df3c460d7b1c28cb1d5ba73472b997b4f6811a1_prof);

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
