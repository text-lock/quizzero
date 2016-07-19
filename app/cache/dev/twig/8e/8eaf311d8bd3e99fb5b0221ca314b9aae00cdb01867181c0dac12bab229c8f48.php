<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7d1d61b3b6ae3bdc216e3201689addf20c3ca7cbecca5b7aeff412a40f2c9cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b010aa4a9992349854d107122df3cf30b3980c1e9931c61083598a116a409bf = $this->env->getExtension("native_profiler");
        $__internal_6b010aa4a9992349854d107122df3cf30b3980c1e9931c61083598a116a409bf->enter($__internal_6b010aa4a9992349854d107122df3cf30b3980c1e9931c61083598a116a409bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b010aa4a9992349854d107122df3cf30b3980c1e9931c61083598a116a409bf->leave($__internal_6b010aa4a9992349854d107122df3cf30b3980c1e9931c61083598a116a409bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25cba09fccf1869abdc7c9d9ee9b3891a92b5a44d532a7868da6641f0372039a = $this->env->getExtension("native_profiler");
        $__internal_25cba09fccf1869abdc7c9d9ee9b3891a92b5a44d532a7868da6641f0372039a->enter($__internal_25cba09fccf1869abdc7c9d9ee9b3891a92b5a44d532a7868da6641f0372039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_25cba09fccf1869abdc7c9d9ee9b3891a92b5a44d532a7868da6641f0372039a->leave($__internal_25cba09fccf1869abdc7c9d9ee9b3891a92b5a44d532a7868da6641f0372039a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
