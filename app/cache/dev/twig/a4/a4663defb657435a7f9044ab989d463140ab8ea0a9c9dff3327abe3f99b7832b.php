<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e87084ea4ec7e1789ba7f0b1796e7fc317b5f65e30f4126a1011345c3d382742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_8aaff95811ed4cc199818b8a85f4b5f5f8826428e36d3c29164a3859fd74cf42 = $this->env->getExtension("native_profiler");
        $__internal_8aaff95811ed4cc199818b8a85f4b5f5f8826428e36d3c29164a3859fd74cf42->enter($__internal_8aaff95811ed4cc199818b8a85f4b5f5f8826428e36d3c29164a3859fd74cf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aaff95811ed4cc199818b8a85f4b5f5f8826428e36d3c29164a3859fd74cf42->leave($__internal_8aaff95811ed4cc199818b8a85f4b5f5f8826428e36d3c29164a3859fd74cf42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a052fb82d805bba3b359c97f98fdf09e6cc5b4a7b58930d6ca79cbac85010dc = $this->env->getExtension("native_profiler");
        $__internal_1a052fb82d805bba3b359c97f98fdf09e6cc5b4a7b58930d6ca79cbac85010dc->enter($__internal_1a052fb82d805bba3b359c97f98fdf09e6cc5b4a7b58930d6ca79cbac85010dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_1a052fb82d805bba3b359c97f98fdf09e6cc5b4a7b58930d6ca79cbac85010dc->leave($__internal_1a052fb82d805bba3b359c97f98fdf09e6cc5b4a7b58930d6ca79cbac85010dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
