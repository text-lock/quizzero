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
        $__internal_48feeb786d4fddc1e6337347d3e566b8947f0e4431659b5ceeec15bdc8bb7e8c = $this->env->getExtension("native_profiler");
        $__internal_48feeb786d4fddc1e6337347d3e566b8947f0e4431659b5ceeec15bdc8bb7e8c->enter($__internal_48feeb786d4fddc1e6337347d3e566b8947f0e4431659b5ceeec15bdc8bb7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48feeb786d4fddc1e6337347d3e566b8947f0e4431659b5ceeec15bdc8bb7e8c->leave($__internal_48feeb786d4fddc1e6337347d3e566b8947f0e4431659b5ceeec15bdc8bb7e8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_340440abffd8e73f8831ba57627f93e8e016d56720897f59a351b24420ef1d8b = $this->env->getExtension("native_profiler");
        $__internal_340440abffd8e73f8831ba57627f93e8e016d56720897f59a351b24420ef1d8b->enter($__internal_340440abffd8e73f8831ba57627f93e8e016d56720897f59a351b24420ef1d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_340440abffd8e73f8831ba57627f93e8e016d56720897f59a351b24420ef1d8b->leave($__internal_340440abffd8e73f8831ba57627f93e8e016d56720897f59a351b24420ef1d8b_prof);

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
