<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_41e57b54b95f7f6cf314d833ca954c8477d5a53ef1f4802db52eb69d085c1004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7e107e6fea1cce899fcd1648c5a9f96973c92bb3d97c5714ee08375e260932ec = $this->env->getExtension("native_profiler");
        $__internal_7e107e6fea1cce899fcd1648c5a9f96973c92bb3d97c5714ee08375e260932ec->enter($__internal_7e107e6fea1cce899fcd1648c5a9f96973c92bb3d97c5714ee08375e260932ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e107e6fea1cce899fcd1648c5a9f96973c92bb3d97c5714ee08375e260932ec->leave($__internal_7e107e6fea1cce899fcd1648c5a9f96973c92bb3d97c5714ee08375e260932ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1255a39ee92f0df998f1bebc1618c4a87b58b6a55d10b12445e8ea280245d80 = $this->env->getExtension("native_profiler");
        $__internal_e1255a39ee92f0df998f1bebc1618c4a87b58b6a55d10b12445e8ea280245d80->enter($__internal_e1255a39ee92f0df998f1bebc1618c4a87b58b6a55d10b12445e8ea280245d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e1255a39ee92f0df998f1bebc1618c4a87b58b6a55d10b12445e8ea280245d80->leave($__internal_e1255a39ee92f0df998f1bebc1618c4a87b58b6a55d10b12445e8ea280245d80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
