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
        $__internal_4fbaa06b62325d66987f1efebf53268e616efdb17c0f9cfc21f32d838c38cee0 = $this->env->getExtension("native_profiler");
        $__internal_4fbaa06b62325d66987f1efebf53268e616efdb17c0f9cfc21f32d838c38cee0->enter($__internal_4fbaa06b62325d66987f1efebf53268e616efdb17c0f9cfc21f32d838c38cee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fbaa06b62325d66987f1efebf53268e616efdb17c0f9cfc21f32d838c38cee0->leave($__internal_4fbaa06b62325d66987f1efebf53268e616efdb17c0f9cfc21f32d838c38cee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc82abe9d16f34d21c0385e977fea7680ecd10440fbbfb499b7f11046061f284 = $this->env->getExtension("native_profiler");
        $__internal_dc82abe9d16f34d21c0385e977fea7680ecd10440fbbfb499b7f11046061f284->enter($__internal_dc82abe9d16f34d21c0385e977fea7680ecd10440fbbfb499b7f11046061f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dc82abe9d16f34d21c0385e977fea7680ecd10440fbbfb499b7f11046061f284->leave($__internal_dc82abe9d16f34d21c0385e977fea7680ecd10440fbbfb499b7f11046061f284_prof);

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
