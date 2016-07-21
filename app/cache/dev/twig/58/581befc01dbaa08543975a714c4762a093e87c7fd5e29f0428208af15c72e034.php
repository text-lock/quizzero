<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9d175562689936f90915cd26b45b5c1f848f4a4e5d6c7796d73eada82217e876 extends Twig_Template
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
        $__internal_c97fed79af440ac2f64d5e5c047a5d96e241a6ebe1405f4ce091ed56e6d01847 = $this->env->getExtension("native_profiler");
        $__internal_c97fed79af440ac2f64d5e5c047a5d96e241a6ebe1405f4ce091ed56e6d01847->enter($__internal_c97fed79af440ac2f64d5e5c047a5d96e241a6ebe1405f4ce091ed56e6d01847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c97fed79af440ac2f64d5e5c047a5d96e241a6ebe1405f4ce091ed56e6d01847->leave($__internal_c97fed79af440ac2f64d5e5c047a5d96e241a6ebe1405f4ce091ed56e6d01847_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
