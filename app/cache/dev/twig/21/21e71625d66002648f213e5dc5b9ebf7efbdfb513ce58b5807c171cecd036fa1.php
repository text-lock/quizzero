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
        $__internal_b8fc77a80f23043f146144cc1739235c8ebe4c9c603b9f95d93891067702822d = $this->env->getExtension("native_profiler");
        $__internal_b8fc77a80f23043f146144cc1739235c8ebe4c9c603b9f95d93891067702822d->enter($__internal_b8fc77a80f23043f146144cc1739235c8ebe4c9c603b9f95d93891067702822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b8fc77a80f23043f146144cc1739235c8ebe4c9c603b9f95d93891067702822d->leave($__internal_b8fc77a80f23043f146144cc1739235c8ebe4c9c603b9f95d93891067702822d_prof);

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
