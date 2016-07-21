<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e7e68cf8ac6e598be48a9d4e80413b4437e9eb53b6bff2f0561d054eb06a1213 extends Twig_Template
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
        $__internal_50d48a762ed51b2d44d9a3717621c47680560e9341a44b9b6dd2096ed1bdf9fd = $this->env->getExtension("native_profiler");
        $__internal_50d48a762ed51b2d44d9a3717621c47680560e9341a44b9b6dd2096ed1bdf9fd->enter($__internal_50d48a762ed51b2d44d9a3717621c47680560e9341a44b9b6dd2096ed1bdf9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_50d48a762ed51b2d44d9a3717621c47680560e9341a44b9b6dd2096ed1bdf9fd->leave($__internal_50d48a762ed51b2d44d9a3717621c47680560e9341a44b9b6dd2096ed1bdf9fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
