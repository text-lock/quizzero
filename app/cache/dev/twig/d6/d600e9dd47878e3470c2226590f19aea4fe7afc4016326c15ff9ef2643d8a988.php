<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0385fd407f05cf7a632030c24386286956e04dc59a569ac6a26f0ffa9d2e30c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d4d0ebc45f51f0aabd43039342b0817791869d508a5d79bb79620e14839d6745 = $this->env->getExtension("native_profiler");
        $__internal_d4d0ebc45f51f0aabd43039342b0817791869d508a5d79bb79620e14839d6745->enter($__internal_d4d0ebc45f51f0aabd43039342b0817791869d508a5d79bb79620e14839d6745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d0ebc45f51f0aabd43039342b0817791869d508a5d79bb79620e14839d6745->leave($__internal_d4d0ebc45f51f0aabd43039342b0817791869d508a5d79bb79620e14839d6745_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5544a1634a360b11bcbf750ef1991b0e1c62db29fda2dc3951a223514ef4d247 = $this->env->getExtension("native_profiler");
        $__internal_5544a1634a360b11bcbf750ef1991b0e1c62db29fda2dc3951a223514ef4d247->enter($__internal_5544a1634a360b11bcbf750ef1991b0e1c62db29fda2dc3951a223514ef4d247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5544a1634a360b11bcbf750ef1991b0e1c62db29fda2dc3951a223514ef4d247->leave($__internal_5544a1634a360b11bcbf750ef1991b0e1c62db29fda2dc3951a223514ef4d247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
