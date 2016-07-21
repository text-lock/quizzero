<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_27d7f6cf14ada6c2ae45efb4b38f143e3e1865e04a15d721f08345af9afc3d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8867c9274783a62ef9e8bd15ea711dd92f1d71a2cec1af7f11973b0a42a1f34a = $this->env->getExtension("native_profiler");
        $__internal_8867c9274783a62ef9e8bd15ea711dd92f1d71a2cec1af7f11973b0a42a1f34a->enter($__internal_8867c9274783a62ef9e8bd15ea711dd92f1d71a2cec1af7f11973b0a42a1f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8867c9274783a62ef9e8bd15ea711dd92f1d71a2cec1af7f11973b0a42a1f34a->leave($__internal_8867c9274783a62ef9e8bd15ea711dd92f1d71a2cec1af7f11973b0a42a1f34a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a08b728560f5e98b378ec6f00f683baf38a4f4d27bd2cd79d89bb3d8d7161999 = $this->env->getExtension("native_profiler");
        $__internal_a08b728560f5e98b378ec6f00f683baf38a4f4d27bd2cd79d89bb3d8d7161999->enter($__internal_a08b728560f5e98b378ec6f00f683baf38a4f4d27bd2cd79d89bb3d8d7161999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a08b728560f5e98b378ec6f00f683baf38a4f4d27bd2cd79d89bb3d8d7161999->leave($__internal_a08b728560f5e98b378ec6f00f683baf38a4f4d27bd2cd79d89bb3d8d7161999_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
