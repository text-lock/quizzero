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
        $__internal_337dcabd1da8aac1463ccb82367e12d7c51b0529a90034a70ea8eba3f20adf0c = $this->env->getExtension("native_profiler");
        $__internal_337dcabd1da8aac1463ccb82367e12d7c51b0529a90034a70ea8eba3f20adf0c->enter($__internal_337dcabd1da8aac1463ccb82367e12d7c51b0529a90034a70ea8eba3f20adf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_337dcabd1da8aac1463ccb82367e12d7c51b0529a90034a70ea8eba3f20adf0c->leave($__internal_337dcabd1da8aac1463ccb82367e12d7c51b0529a90034a70ea8eba3f20adf0c_prof);

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
