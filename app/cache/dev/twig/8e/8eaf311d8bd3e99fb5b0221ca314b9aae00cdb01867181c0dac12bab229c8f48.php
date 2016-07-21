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
        $__internal_1babbe752b9c06da5d20ebb7f6f28c700e8778081d85029de4db3d75229b1e11 = $this->env->getExtension("native_profiler");
        $__internal_1babbe752b9c06da5d20ebb7f6f28c700e8778081d85029de4db3d75229b1e11->enter($__internal_1babbe752b9c06da5d20ebb7f6f28c700e8778081d85029de4db3d75229b1e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1babbe752b9c06da5d20ebb7f6f28c700e8778081d85029de4db3d75229b1e11->leave($__internal_1babbe752b9c06da5d20ebb7f6f28c700e8778081d85029de4db3d75229b1e11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46bc8048a45098662881c1e3d665481336b68fb55923cd51a0ce946afed270f0 = $this->env->getExtension("native_profiler");
        $__internal_46bc8048a45098662881c1e3d665481336b68fb55923cd51a0ce946afed270f0->enter($__internal_46bc8048a45098662881c1e3d665481336b68fb55923cd51a0ce946afed270f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_46bc8048a45098662881c1e3d665481336b68fb55923cd51a0ce946afed270f0->leave($__internal_46bc8048a45098662881c1e3d665481336b68fb55923cd51a0ce946afed270f0_prof);

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
