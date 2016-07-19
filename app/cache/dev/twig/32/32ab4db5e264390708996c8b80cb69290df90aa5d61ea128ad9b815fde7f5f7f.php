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
        $__internal_96328722d2149620c372a82ebb0e6c71e044554d1040f99b949f605ad3ba2bf0 = $this->env->getExtension("native_profiler");
        $__internal_96328722d2149620c372a82ebb0e6c71e044554d1040f99b949f605ad3ba2bf0->enter($__internal_96328722d2149620c372a82ebb0e6c71e044554d1040f99b949f605ad3ba2bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96328722d2149620c372a82ebb0e6c71e044554d1040f99b949f605ad3ba2bf0->leave($__internal_96328722d2149620c372a82ebb0e6c71e044554d1040f99b949f605ad3ba2bf0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16e2fbd6227f7f77c0da8a2189adfecd28aa9783c9bbf68c2951a896dbaee004 = $this->env->getExtension("native_profiler");
        $__internal_16e2fbd6227f7f77c0da8a2189adfecd28aa9783c9bbf68c2951a896dbaee004->enter($__internal_16e2fbd6227f7f77c0da8a2189adfecd28aa9783c9bbf68c2951a896dbaee004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_16e2fbd6227f7f77c0da8a2189adfecd28aa9783c9bbf68c2951a896dbaee004->leave($__internal_16e2fbd6227f7f77c0da8a2189adfecd28aa9783c9bbf68c2951a896dbaee004_prof);

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
