<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20515134398881dcb1e3beb6cff121e72e08249a5580dd7e80f98717ae9ef652 extends Twig_Template
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
        $__internal_ea7944f061458f5efad18a1d27b129ab4070e7876d41ec6acac5911a564a1cd0 = $this->env->getExtension("native_profiler");
        $__internal_ea7944f061458f5efad18a1d27b129ab4070e7876d41ec6acac5911a564a1cd0->enter($__internal_ea7944f061458f5efad18a1d27b129ab4070e7876d41ec6acac5911a564a1cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ea7944f061458f5efad18a1d27b129ab4070e7876d41ec6acac5911a564a1cd0->leave($__internal_ea7944f061458f5efad18a1d27b129ab4070e7876d41ec6acac5911a564a1cd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
