<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d451709a33d59df8eeb4c7fdbdc67e9c17d012d775a012bd2286eaac947d86c2 extends Twig_Template
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
        $__internal_00d1b7309bce15e82b83ee63d155c90f9ea7ba943060c730a82a7c9fd423423d = $this->env->getExtension("native_profiler");
        $__internal_00d1b7309bce15e82b83ee63d155c90f9ea7ba943060c730a82a7c9fd423423d->enter($__internal_00d1b7309bce15e82b83ee63d155c90f9ea7ba943060c730a82a7c9fd423423d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_00d1b7309bce15e82b83ee63d155c90f9ea7ba943060c730a82a7c9fd423423d->leave($__internal_00d1b7309bce15e82b83ee63d155c90f9ea7ba943060c730a82a7c9fd423423d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
