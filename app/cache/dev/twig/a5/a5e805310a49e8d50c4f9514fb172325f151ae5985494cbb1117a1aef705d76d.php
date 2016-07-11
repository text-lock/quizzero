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
        $__internal_284b948e398b3b80ab46cd323b86c299860866de31e3aeb009187ccadee85c97 = $this->env->getExtension("native_profiler");
        $__internal_284b948e398b3b80ab46cd323b86c299860866de31e3aeb009187ccadee85c97->enter($__internal_284b948e398b3b80ab46cd323b86c299860866de31e3aeb009187ccadee85c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284b948e398b3b80ab46cd323b86c299860866de31e3aeb009187ccadee85c97->leave($__internal_284b948e398b3b80ab46cd323b86c299860866de31e3aeb009187ccadee85c97_prof);

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
