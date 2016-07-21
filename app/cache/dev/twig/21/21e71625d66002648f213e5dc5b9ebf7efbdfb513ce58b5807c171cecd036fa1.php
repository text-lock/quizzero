<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b77e5a935924cb2bd083b987d2e2e40ab57822ca05d479a7f9e23b48ea94ab08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d404942a450cf197c58b81979569f50c430d235b0bfe29a608bc221c2c8fedc = $this->env->getExtension("native_profiler");
        $__internal_7d404942a450cf197c58b81979569f50c430d235b0bfe29a608bc221c2c8fedc->enter($__internal_7d404942a450cf197c58b81979569f50c430d235b0bfe29a608bc221c2c8fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7d404942a450cf197c58b81979569f50c430d235b0bfe29a608bc221c2c8fedc->leave($__internal_7d404942a450cf197c58b81979569f50c430d235b0bfe29a608bc221c2c8fedc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
