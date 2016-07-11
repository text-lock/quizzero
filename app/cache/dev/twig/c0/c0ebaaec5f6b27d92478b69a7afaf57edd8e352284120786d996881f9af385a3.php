<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_27d7f6cf14ada6c2ae45efb4b38f143e3e1865e04a15d721f08345af9afc3d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dbe516b4aec308356efd5703a70eae894a22604bff089ce60cb437f22a8c1646 = $this->env->getExtension("native_profiler");
        $__internal_dbe516b4aec308356efd5703a70eae894a22604bff089ce60cb437f22a8c1646->enter($__internal_dbe516b4aec308356efd5703a70eae894a22604bff089ce60cb437f22a8c1646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe516b4aec308356efd5703a70eae894a22604bff089ce60cb437f22a8c1646->leave($__internal_dbe516b4aec308356efd5703a70eae894a22604bff089ce60cb437f22a8c1646_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc010c75d42570df4f635083712e68bb46a7c40ae63da260f250acc8676696b2 = $this->env->getExtension("native_profiler");
        $__internal_cc010c75d42570df4f635083712e68bb46a7c40ae63da260f250acc8676696b2->enter($__internal_cc010c75d42570df4f635083712e68bb46a7c40ae63da260f250acc8676696b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cc010c75d42570df4f635083712e68bb46a7c40ae63da260f250acc8676696b2->leave($__internal_cc010c75d42570df4f635083712e68bb46a7c40ae63da260f250acc8676696b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
