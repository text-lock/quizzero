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
        $__internal_3d746d7386d6d078ea201de9a4e8950a321d07f031d902b2cc38d244ce5c0bcf = $this->env->getExtension("native_profiler");
        $__internal_3d746d7386d6d078ea201de9a4e8950a321d07f031d902b2cc38d244ce5c0bcf->enter($__internal_3d746d7386d6d078ea201de9a4e8950a321d07f031d902b2cc38d244ce5c0bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3d746d7386d6d078ea201de9a4e8950a321d07f031d902b2cc38d244ce5c0bcf->leave($__internal_3d746d7386d6d078ea201de9a4e8950a321d07f031d902b2cc38d244ce5c0bcf_prof);

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
