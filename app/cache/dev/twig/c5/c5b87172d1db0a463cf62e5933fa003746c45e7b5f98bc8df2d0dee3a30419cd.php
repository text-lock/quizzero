<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a2cbc4d433b0afa609fd6d2ebe06e3dd2d58fa182430f6e1e74bc16103a0b5c8 extends Twig_Template
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
        $__internal_599208e5a8ae660e98b2723e9b9b1914e04a106bc105740efd30d9308653cf1d = $this->env->getExtension("native_profiler");
        $__internal_599208e5a8ae660e98b2723e9b9b1914e04a106bc105740efd30d9308653cf1d->enter($__internal_599208e5a8ae660e98b2723e9b9b1914e04a106bc105740efd30d9308653cf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_599208e5a8ae660e98b2723e9b9b1914e04a106bc105740efd30d9308653cf1d->leave($__internal_599208e5a8ae660e98b2723e9b9b1914e04a106bc105740efd30d9308653cf1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
