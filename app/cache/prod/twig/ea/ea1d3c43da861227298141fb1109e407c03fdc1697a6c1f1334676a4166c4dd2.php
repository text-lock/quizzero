<?php

/* QuizzeroQuizBundle:Question:admin_edit.html.twig */
class __TwigTemplate_a294f4feb2646f84d8785ec000da5a73cd791461b457e353afa01bcac6a1cbe9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle:Question:admin_form.html.twig", "QuizzeroQuizBundle:Question:admin_edit.html.twig", 5)->display($context);
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
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/*  	*/
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle:Question:admin_form.html.twig' %}*/
/* {% endblock %}*/
/*     */
/* */
/* */
