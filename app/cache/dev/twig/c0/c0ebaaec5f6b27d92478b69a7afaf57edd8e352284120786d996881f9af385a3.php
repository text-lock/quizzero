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
        $__internal_df179560b681342cdc35373facdb04d6c8dc06ba993e821d033154469c43bfae = $this->env->getExtension("native_profiler");
        $__internal_df179560b681342cdc35373facdb04d6c8dc06ba993e821d033154469c43bfae->enter($__internal_df179560b681342cdc35373facdb04d6c8dc06ba993e821d033154469c43bfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df179560b681342cdc35373facdb04d6c8dc06ba993e821d033154469c43bfae->leave($__internal_df179560b681342cdc35373facdb04d6c8dc06ba993e821d033154469c43bfae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f105c7d9bd9743cbad5d803bc4a13423f1ce3d974fe5bb356d7a5063407f7a93 = $this->env->getExtension("native_profiler");
        $__internal_f105c7d9bd9743cbad5d803bc4a13423f1ce3d974fe5bb356d7a5063407f7a93->enter($__internal_f105c7d9bd9743cbad5d803bc4a13423f1ce3d974fe5bb356d7a5063407f7a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f105c7d9bd9743cbad5d803bc4a13423f1ce3d974fe5bb356d7a5063407f7a93->leave($__internal_f105c7d9bd9743cbad5d803bc4a13423f1ce3d974fe5bb356d7a5063407f7a93_prof);

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
