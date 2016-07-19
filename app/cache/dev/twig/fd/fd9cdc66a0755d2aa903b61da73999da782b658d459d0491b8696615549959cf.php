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
        $__internal_67ad185807c4f6ebed07a8071bbb9db82e6898445d304fe567603cfb2e6fedc8 = $this->env->getExtension("native_profiler");
        $__internal_67ad185807c4f6ebed07a8071bbb9db82e6898445d304fe567603cfb2e6fedc8->enter($__internal_67ad185807c4f6ebed07a8071bbb9db82e6898445d304fe567603cfb2e6fedc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ad185807c4f6ebed07a8071bbb9db82e6898445d304fe567603cfb2e6fedc8->leave($__internal_67ad185807c4f6ebed07a8071bbb9db82e6898445d304fe567603cfb2e6fedc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2deae5cd9ca12ee4dcdb32082ffe791368f2122413454086898ec6f622558504 = $this->env->getExtension("native_profiler");
        $__internal_2deae5cd9ca12ee4dcdb32082ffe791368f2122413454086898ec6f622558504->enter($__internal_2deae5cd9ca12ee4dcdb32082ffe791368f2122413454086898ec6f622558504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2deae5cd9ca12ee4dcdb32082ffe791368f2122413454086898ec6f622558504->leave($__internal_2deae5cd9ca12ee4dcdb32082ffe791368f2122413454086898ec6f622558504_prof);

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
