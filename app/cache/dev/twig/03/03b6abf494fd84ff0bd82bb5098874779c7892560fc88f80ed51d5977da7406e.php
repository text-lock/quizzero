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
        $__internal_d71d4227b761de461277cc2218ef7d6cb89b8185713b3c8ceb22998bb2b7ec16 = $this->env->getExtension("native_profiler");
        $__internal_d71d4227b761de461277cc2218ef7d6cb89b8185713b3c8ceb22998bb2b7ec16->enter($__internal_d71d4227b761de461277cc2218ef7d6cb89b8185713b3c8ceb22998bb2b7ec16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Question:admin_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71d4227b761de461277cc2218ef7d6cb89b8185713b3c8ceb22998bb2b7ec16->leave($__internal_d71d4227b761de461277cc2218ef7d6cb89b8185713b3c8ceb22998bb2b7ec16_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_70d9dffbb8e3e4efe32f87ec1b1144d37f49ad535a0e5a231c686ade3621b9ac = $this->env->getExtension("native_profiler");
        $__internal_70d9dffbb8e3e4efe32f87ec1b1144d37f49ad535a0e5a231c686ade3621b9ac->enter($__internal_70d9dffbb8e3e4efe32f87ec1b1144d37f49ad535a0e5a231c686ade3621b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 5)->display($context);
        // line 6
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle:Question:admin_form.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 6)->display($context);
        
        $__internal_70d9dffbb8e3e4efe32f87ec1b1144d37f49ad535a0e5a231c686ade3621b9ac->leave($__internal_70d9dffbb8e3e4efe32f87ec1b1144d37f49ad535a0e5a231c686ade3621b9ac_prof);

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
