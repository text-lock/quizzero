<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_269398e8dc20c248b5976a1fe4c228dfd5ea9add680ea96ed3bfb6cf356db75e extends Twig_Template
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
        $__internal_0a8cc59bbd469055a0366ac2b90d425cfb6f8da1260749ce0d7948d335302da1 = $this->env->getExtension("native_profiler");
        $__internal_0a8cc59bbd469055a0366ac2b90d425cfb6f8da1260749ce0d7948d335302da1->enter($__internal_0a8cc59bbd469055a0366ac2b90d425cfb6f8da1260749ce0d7948d335302da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0a8cc59bbd469055a0366ac2b90d425cfb6f8da1260749ce0d7948d335302da1->leave($__internal_0a8cc59bbd469055a0366ac2b90d425cfb6f8da1260749ce0d7948d335302da1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
