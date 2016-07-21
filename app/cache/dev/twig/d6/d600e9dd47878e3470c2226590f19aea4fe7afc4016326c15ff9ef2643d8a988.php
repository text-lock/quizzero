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
        $__internal_f4bb1eb635e631b9784373b8ca2662233b58741a9400372955b82ae0dd0b397c = $this->env->getExtension("native_profiler");
        $__internal_f4bb1eb635e631b9784373b8ca2662233b58741a9400372955b82ae0dd0b397c->enter($__internal_f4bb1eb635e631b9784373b8ca2662233b58741a9400372955b82ae0dd0b397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4bb1eb635e631b9784373b8ca2662233b58741a9400372955b82ae0dd0b397c->leave($__internal_f4bb1eb635e631b9784373b8ca2662233b58741a9400372955b82ae0dd0b397c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f446887e2140bef9f9cff5d1ff5cc091d845357856753cd4ae36b9b30cfc600 = $this->env->getExtension("native_profiler");
        $__internal_7f446887e2140bef9f9cff5d1ff5cc091d845357856753cd4ae36b9b30cfc600->enter($__internal_7f446887e2140bef9f9cff5d1ff5cc091d845357856753cd4ae36b9b30cfc600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7f446887e2140bef9f9cff5d1ff5cc091d845357856753cd4ae36b9b30cfc600->leave($__internal_7f446887e2140bef9f9cff5d1ff5cc091d845357856753cd4ae36b9b30cfc600_prof);

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
