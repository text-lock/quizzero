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
        $__internal_1ca78393cc06c117a6c53daaffb73182a6f9db08600ab548bb5985fdae10afb6 = $this->env->getExtension("native_profiler");
        $__internal_1ca78393cc06c117a6c53daaffb73182a6f9db08600ab548bb5985fdae10afb6->enter($__internal_1ca78393cc06c117a6c53daaffb73182a6f9db08600ab548bb5985fdae10afb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca78393cc06c117a6c53daaffb73182a6f9db08600ab548bb5985fdae10afb6->leave($__internal_1ca78393cc06c117a6c53daaffb73182a6f9db08600ab548bb5985fdae10afb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2c93a01f2b14672b8b5cefa914685ac41b0827b6a5db0d45e0fd6ff14c0b0b7 = $this->env->getExtension("native_profiler");
        $__internal_a2c93a01f2b14672b8b5cefa914685ac41b0827b6a5db0d45e0fd6ff14c0b0b7->enter($__internal_a2c93a01f2b14672b8b5cefa914685ac41b0827b6a5db0d45e0fd6ff14c0b0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a2c93a01f2b14672b8b5cefa914685ac41b0827b6a5db0d45e0fd6ff14c0b0b7->leave($__internal_a2c93a01f2b14672b8b5cefa914685ac41b0827b6a5db0d45e0fd6ff14c0b0b7_prof);

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
