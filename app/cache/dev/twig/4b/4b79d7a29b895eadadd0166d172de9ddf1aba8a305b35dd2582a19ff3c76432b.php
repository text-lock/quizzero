<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ce06833df53242e600fdbfc732afe9c008441deb0b80d94bb9cded6320040a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2f49403a79fa6e16f5b42275e30fb4348f56d17d6112c4f836aa0d4180c0155f = $this->env->getExtension("native_profiler");
        $__internal_2f49403a79fa6e16f5b42275e30fb4348f56d17d6112c4f836aa0d4180c0155f->enter($__internal_2f49403a79fa6e16f5b42275e30fb4348f56d17d6112c4f836aa0d4180c0155f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f49403a79fa6e16f5b42275e30fb4348f56d17d6112c4f836aa0d4180c0155f->leave($__internal_2f49403a79fa6e16f5b42275e30fb4348f56d17d6112c4f836aa0d4180c0155f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dd1b04e1b62af0956ee92cbd2481eca64063f0a16f5d69090600b19904a5437 = $this->env->getExtension("native_profiler");
        $__internal_8dd1b04e1b62af0956ee92cbd2481eca64063f0a16f5d69090600b19904a5437->enter($__internal_8dd1b04e1b62af0956ee92cbd2481eca64063f0a16f5d69090600b19904a5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8dd1b04e1b62af0956ee92cbd2481eca64063f0a16f5d69090600b19904a5437->leave($__internal_8dd1b04e1b62af0956ee92cbd2481eca64063f0a16f5d69090600b19904a5437_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
