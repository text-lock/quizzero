<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6aabd26b59da16a91b9f545f215389bde9fb583e777daf809b98a9c024f1699d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a3f58a2966f04c243e3b4247c06eda08e18959c95babab6b7bcb017708369707 = $this->env->getExtension("native_profiler");
        $__internal_a3f58a2966f04c243e3b4247c06eda08e18959c95babab6b7bcb017708369707->enter($__internal_a3f58a2966f04c243e3b4247c06eda08e18959c95babab6b7bcb017708369707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f58a2966f04c243e3b4247c06eda08e18959c95babab6b7bcb017708369707->leave($__internal_a3f58a2966f04c243e3b4247c06eda08e18959c95babab6b7bcb017708369707_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_101ef19f15c1a23205a5ac77a72a8ed432c246a183d1eefd64e8c06784a5f9f8 = $this->env->getExtension("native_profiler");
        $__internal_101ef19f15c1a23205a5ac77a72a8ed432c246a183d1eefd64e8c06784a5f9f8->enter($__internal_101ef19f15c1a23205a5ac77a72a8ed432c246a183d1eefd64e8c06784a5f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_101ef19f15c1a23205a5ac77a72a8ed432c246a183d1eefd64e8c06784a5f9f8->leave($__internal_101ef19f15c1a23205a5ac77a72a8ed432c246a183d1eefd64e8c06784a5f9f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
