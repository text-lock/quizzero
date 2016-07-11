<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_41e57b54b95f7f6cf314d833ca954c8477d5a53ef1f4802db52eb69d085c1004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f900240536831c2fc456b490c4cffcb89229ecc92a618126993986fb24f84607 = $this->env->getExtension("native_profiler");
        $__internal_f900240536831c2fc456b490c4cffcb89229ecc92a618126993986fb24f84607->enter($__internal_f900240536831c2fc456b490c4cffcb89229ecc92a618126993986fb24f84607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f900240536831c2fc456b490c4cffcb89229ecc92a618126993986fb24f84607->leave($__internal_f900240536831c2fc456b490c4cffcb89229ecc92a618126993986fb24f84607_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23932b98a07a8b491dd847a38960009c771e5fbd3eb353e0e9fc06554379e2e1 = $this->env->getExtension("native_profiler");
        $__internal_23932b98a07a8b491dd847a38960009c771e5fbd3eb353e0e9fc06554379e2e1->enter($__internal_23932b98a07a8b491dd847a38960009c771e5fbd3eb353e0e9fc06554379e2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_23932b98a07a8b491dd847a38960009c771e5fbd3eb353e0e9fc06554379e2e1->leave($__internal_23932b98a07a8b491dd847a38960009c771e5fbd3eb353e0e9fc06554379e2e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
