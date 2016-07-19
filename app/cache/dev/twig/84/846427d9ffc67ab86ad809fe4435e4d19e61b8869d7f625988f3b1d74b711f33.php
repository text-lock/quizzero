<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_11330922af778ec5e671a5a7491ca78c039e04faeb49ac5f13aa001cd5121765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4eed5ac438084c0e55225f9501311fef188782cdec1bb2534f771ebef9802157 = $this->env->getExtension("native_profiler");
        $__internal_4eed5ac438084c0e55225f9501311fef188782cdec1bb2534f771ebef9802157->enter($__internal_4eed5ac438084c0e55225f9501311fef188782cdec1bb2534f771ebef9802157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eed5ac438084c0e55225f9501311fef188782cdec1bb2534f771ebef9802157->leave($__internal_4eed5ac438084c0e55225f9501311fef188782cdec1bb2534f771ebef9802157_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d043e565126ac7284ec63d864ef280562412afa36cf71a632922017dffad76b = $this->env->getExtension("native_profiler");
        $__internal_9d043e565126ac7284ec63d864ef280562412afa36cf71a632922017dffad76b->enter($__internal_9d043e565126ac7284ec63d864ef280562412afa36cf71a632922017dffad76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9d043e565126ac7284ec63d864ef280562412afa36cf71a632922017dffad76b->leave($__internal_9d043e565126ac7284ec63d864ef280562412afa36cf71a632922017dffad76b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
