<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_460dc3439dbe567f9ee22fffe1bbe0ba3f0d5903e9f085c84e5f785659319e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5c47258afbb64f44e9e3a16d2766290021e96ce7afbee45793d3b47ac33d12bf = $this->env->getExtension("native_profiler");
        $__internal_5c47258afbb64f44e9e3a16d2766290021e96ce7afbee45793d3b47ac33d12bf->enter($__internal_5c47258afbb64f44e9e3a16d2766290021e96ce7afbee45793d3b47ac33d12bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c47258afbb64f44e9e3a16d2766290021e96ce7afbee45793d3b47ac33d12bf->leave($__internal_5c47258afbb64f44e9e3a16d2766290021e96ce7afbee45793d3b47ac33d12bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e54f366c8e8415d6643bced368ffc2b166b77d03a5faac597fa22b1a98e216b = $this->env->getExtension("native_profiler");
        $__internal_1e54f366c8e8415d6643bced368ffc2b166b77d03a5faac597fa22b1a98e216b->enter($__internal_1e54f366c8e8415d6643bced368ffc2b166b77d03a5faac597fa22b1a98e216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1e54f366c8e8415d6643bced368ffc2b166b77d03a5faac597fa22b1a98e216b->leave($__internal_1e54f366c8e8415d6643bced368ffc2b166b77d03a5faac597fa22b1a98e216b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
