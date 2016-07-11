<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d0e346f35b7dc54ad75475275c01b842d5f9f4ea98b9aacbf8d14facdbf6b99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eb246f392fb1be60c8360603ff17223770bc9551bbd3bb213a538f4a88bdd17f = $this->env->getExtension("native_profiler");
        $__internal_eb246f392fb1be60c8360603ff17223770bc9551bbd3bb213a538f4a88bdd17f->enter($__internal_eb246f392fb1be60c8360603ff17223770bc9551bbd3bb213a538f4a88bdd17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb246f392fb1be60c8360603ff17223770bc9551bbd3bb213a538f4a88bdd17f->leave($__internal_eb246f392fb1be60c8360603ff17223770bc9551bbd3bb213a538f4a88bdd17f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_584f952d0a55f9a7cc0f7f4abe13f1d78c3a0fce7dca9cfb28f405f94f869e65 = $this->env->getExtension("native_profiler");
        $__internal_584f952d0a55f9a7cc0f7f4abe13f1d78c3a0fce7dca9cfb28f405f94f869e65->enter($__internal_584f952d0a55f9a7cc0f7f4abe13f1d78c3a0fce7dca9cfb28f405f94f869e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_584f952d0a55f9a7cc0f7f4abe13f1d78c3a0fce7dca9cfb28f405f94f869e65->leave($__internal_584f952d0a55f9a7cc0f7f4abe13f1d78c3a0fce7dca9cfb28f405f94f869e65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
