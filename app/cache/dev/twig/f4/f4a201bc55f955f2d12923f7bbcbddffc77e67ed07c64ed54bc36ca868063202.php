<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_460dc3439dbe567f9ee22fffe1bbe0ba3f0d5903e9f085c84e5f785659319e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_778ab0dafd67969f454e3468a767e7beddd2cc2bf3f1c010182e108da8f210d5 = $this->env->getExtension("native_profiler");
        $__internal_778ab0dafd67969f454e3468a767e7beddd2cc2bf3f1c010182e108da8f210d5->enter($__internal_778ab0dafd67969f454e3468a767e7beddd2cc2bf3f1c010182e108da8f210d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778ab0dafd67969f454e3468a767e7beddd2cc2bf3f1c010182e108da8f210d5->leave($__internal_778ab0dafd67969f454e3468a767e7beddd2cc2bf3f1c010182e108da8f210d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c90570c8ee7f7936f51783163ee1f9315281bae64985605f0ad01b3f0c679ae = $this->env->getExtension("native_profiler");
        $__internal_9c90570c8ee7f7936f51783163ee1f9315281bae64985605f0ad01b3f0c679ae->enter($__internal_9c90570c8ee7f7936f51783163ee1f9315281bae64985605f0ad01b3f0c679ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9c90570c8ee7f7936f51783163ee1f9315281bae64985605f0ad01b3f0c679ae->leave($__internal_9c90570c8ee7f7936f51783163ee1f9315281bae64985605f0ad01b3f0c679ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
