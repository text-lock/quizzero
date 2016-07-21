<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d0e346f35b7dc54ad75475275c01b842d5f9f4ea98b9aacbf8d14facdbf6b99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_87ecdb55a1e014010fa4bc5892984ef433576a177be27cf6380a9537fbd99f68 = $this->env->getExtension("native_profiler");
        $__internal_87ecdb55a1e014010fa4bc5892984ef433576a177be27cf6380a9537fbd99f68->enter($__internal_87ecdb55a1e014010fa4bc5892984ef433576a177be27cf6380a9537fbd99f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ecdb55a1e014010fa4bc5892984ef433576a177be27cf6380a9537fbd99f68->leave($__internal_87ecdb55a1e014010fa4bc5892984ef433576a177be27cf6380a9537fbd99f68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff2bc1505c6bc16a08e4a6c91690fc9bbe956e4eb80824de139edc53da07e6e3 = $this->env->getExtension("native_profiler");
        $__internal_ff2bc1505c6bc16a08e4a6c91690fc9bbe956e4eb80824de139edc53da07e6e3->enter($__internal_ff2bc1505c6bc16a08e4a6c91690fc9bbe956e4eb80824de139edc53da07e6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ff2bc1505c6bc16a08e4a6c91690fc9bbe956e4eb80824de139edc53da07e6e3->leave($__internal_ff2bc1505c6bc16a08e4a6c91690fc9bbe956e4eb80824de139edc53da07e6e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
