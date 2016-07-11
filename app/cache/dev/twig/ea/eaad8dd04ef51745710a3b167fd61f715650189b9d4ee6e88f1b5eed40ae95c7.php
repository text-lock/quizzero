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
        $__internal_5d7172a93f3b4a028b45ef5ed15c3cb2766f312fd36c9e058add36c89377e12f = $this->env->getExtension("native_profiler");
        $__internal_5d7172a93f3b4a028b45ef5ed15c3cb2766f312fd36c9e058add36c89377e12f->enter($__internal_5d7172a93f3b4a028b45ef5ed15c3cb2766f312fd36c9e058add36c89377e12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5d7172a93f3b4a028b45ef5ed15c3cb2766f312fd36c9e058add36c89377e12f->leave($__internal_5d7172a93f3b4a028b45ef5ed15c3cb2766f312fd36c9e058add36c89377e12f_prof);

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
