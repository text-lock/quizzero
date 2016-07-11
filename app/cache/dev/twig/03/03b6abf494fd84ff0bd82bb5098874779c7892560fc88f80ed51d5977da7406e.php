<?php

/* QuizzeroQuizBundle:Question:admin_edit.html.twig */
class __TwigTemplate_bebfe2902d81947cb72eb285518a5dd7d4f76f954d116cdc5b98c40f92c69642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizzeroQuizBundle::layout.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizzeroQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eefc9d631ab1878e74e5a0181c9aa4b55fe0a26cfb05afc0ac175a49f92c7f2 = $this->env->getExtension("native_profiler");
        $__internal_8eefc9d631ab1878e74e5a0181c9aa4b55fe0a26cfb05afc0ac175a49f92c7f2->enter($__internal_8eefc9d631ab1878e74e5a0181c9aa4b55fe0a26cfb05afc0ac175a49f92c7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Question:admin_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eefc9d631ab1878e74e5a0181c9aa4b55fe0a26cfb05afc0ac175a49f92c7f2->leave($__internal_8eefc9d631ab1878e74e5a0181c9aa4b55fe0a26cfb05afc0ac175a49f92c7f2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7875b09066112119827a2764e78b6abaf51ffd71688cf1b34d3109d60a73340d = $this->env->getExtension("native_profiler");
        $__internal_7875b09066112119827a2764e78b6abaf51ffd71688cf1b34d3109d60a73340d->enter($__internal_7875b09066112119827a2764e78b6abaf51ffd71688cf1b34d3109d60a73340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 5)->display($context);
        // line 6
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle:Question:admin_form.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 6)->display($context);
        
        $__internal_7875b09066112119827a2764e78b6abaf51ffd71688cf1b34d3109d60a73340d->leave($__internal_7875b09066112119827a2764e78b6abaf51ffd71688cf1b34d3109d60a73340d_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Question:admin_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/*  	*/
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/* 	{% include 'QuizzeroQuizBundle:Question:admin_form.html.twig' %}*/
/* {% endblock %}*/
/*     */
/* */
/* */
