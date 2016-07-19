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
        $__internal_7ba4694ba2788fb7d573c2345b916d3a2951ebfffb02614b070f635e1a00b0cf = $this->env->getExtension("native_profiler");
        $__internal_7ba4694ba2788fb7d573c2345b916d3a2951ebfffb02614b070f635e1a00b0cf->enter($__internal_7ba4694ba2788fb7d573c2345b916d3a2951ebfffb02614b070f635e1a00b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba4694ba2788fb7d573c2345b916d3a2951ebfffb02614b070f635e1a00b0cf->leave($__internal_7ba4694ba2788fb7d573c2345b916d3a2951ebfffb02614b070f635e1a00b0cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c1636b6ca8ef5af917f25089cf7001793a7f0df78a95b85dc99ce07f97fabcf = $this->env->getExtension("native_profiler");
        $__internal_5c1636b6ca8ef5af917f25089cf7001793a7f0df78a95b85dc99ce07f97fabcf->enter($__internal_5c1636b6ca8ef5af917f25089cf7001793a7f0df78a95b85dc99ce07f97fabcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5c1636b6ca8ef5af917f25089cf7001793a7f0df78a95b85dc99ce07f97fabcf->leave($__internal_5c1636b6ca8ef5af917f25089cf7001793a7f0df78a95b85dc99ce07f97fabcf_prof);

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
