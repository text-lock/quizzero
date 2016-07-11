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
        $__internal_e18cea01c09c253a6b13de345350a2a675dec1c866e5def25448952c32e1dafc = $this->env->getExtension("native_profiler");
        $__internal_e18cea01c09c253a6b13de345350a2a675dec1c866e5def25448952c32e1dafc->enter($__internal_e18cea01c09c253a6b13de345350a2a675dec1c866e5def25448952c32e1dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18cea01c09c253a6b13de345350a2a675dec1c866e5def25448952c32e1dafc->leave($__internal_e18cea01c09c253a6b13de345350a2a675dec1c866e5def25448952c32e1dafc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edfff5981d32aaf67ea0247b13b43e6aeb89cfb303e9040675f2eacc5c402c96 = $this->env->getExtension("native_profiler");
        $__internal_edfff5981d32aaf67ea0247b13b43e6aeb89cfb303e9040675f2eacc5c402c96->enter($__internal_edfff5981d32aaf67ea0247b13b43e6aeb89cfb303e9040675f2eacc5c402c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_edfff5981d32aaf67ea0247b13b43e6aeb89cfb303e9040675f2eacc5c402c96->leave($__internal_edfff5981d32aaf67ea0247b13b43e6aeb89cfb303e9040675f2eacc5c402c96_prof);

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
