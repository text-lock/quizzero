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
        $__internal_dd592f576afc181989fed0e32ef55267a06829d2c08e3121432b8e1e361e4a44 = $this->env->getExtension("native_profiler");
        $__internal_dd592f576afc181989fed0e32ef55267a06829d2c08e3121432b8e1e361e4a44->enter($__internal_dd592f576afc181989fed0e32ef55267a06829d2c08e3121432b8e1e361e4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dd592f576afc181989fed0e32ef55267a06829d2c08e3121432b8e1e361e4a44->leave($__internal_dd592f576afc181989fed0e32ef55267a06829d2c08e3121432b8e1e361e4a44_prof);

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
