<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_afa24d8fb393f4594f79d07c9e6166bfb38de9af15c271f5af585969547cabb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_acdea6b8b166b35d5b5d62ea920474a0072ef695d2e4b48dee0c3f67fff8ff30 = $this->env->getExtension("native_profiler");
        $__internal_acdea6b8b166b35d5b5d62ea920474a0072ef695d2e4b48dee0c3f67fff8ff30->enter($__internal_acdea6b8b166b35d5b5d62ea920474a0072ef695d2e4b48dee0c3f67fff8ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acdea6b8b166b35d5b5d62ea920474a0072ef695d2e4b48dee0c3f67fff8ff30->leave($__internal_acdea6b8b166b35d5b5d62ea920474a0072ef695d2e4b48dee0c3f67fff8ff30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ada6ee521cbdfbd0bf24433c401d5c209eeb36bf0f9e339732222af79c65482 = $this->env->getExtension("native_profiler");
        $__internal_1ada6ee521cbdfbd0bf24433c401d5c209eeb36bf0f9e339732222af79c65482->enter($__internal_1ada6ee521cbdfbd0bf24433c401d5c209eeb36bf0f9e339732222af79c65482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1ada6ee521cbdfbd0bf24433c401d5c209eeb36bf0f9e339732222af79c65482->leave($__internal_1ada6ee521cbdfbd0bf24433c401d5c209eeb36bf0f9e339732222af79c65482_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
