<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4b53afc63fb76028f6ef5757cb12d174dc7d51246e3afd4c5879d2f71843e422 extends Twig_Template
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
        $__internal_c47ddecd1ccd42460dcaf4936026570573bc8eca9cda1baa7527ad0f2d20521a = $this->env->getExtension("native_profiler");
        $__internal_c47ddecd1ccd42460dcaf4936026570573bc8eca9cda1baa7527ad0f2d20521a->enter($__internal_c47ddecd1ccd42460dcaf4936026570573bc8eca9cda1baa7527ad0f2d20521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c47ddecd1ccd42460dcaf4936026570573bc8eca9cda1baa7527ad0f2d20521a->leave($__internal_c47ddecd1ccd42460dcaf4936026570573bc8eca9cda1baa7527ad0f2d20521a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
