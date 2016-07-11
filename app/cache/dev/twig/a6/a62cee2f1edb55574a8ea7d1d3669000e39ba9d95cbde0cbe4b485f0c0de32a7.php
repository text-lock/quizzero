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
        $__internal_a420beb7365c3af30046df6aba307fbcc9cebdd90ab3c4d8ef22cf2aa83db547 = $this->env->getExtension("native_profiler");
        $__internal_a420beb7365c3af30046df6aba307fbcc9cebdd90ab3c4d8ef22cf2aa83db547->enter($__internal_a420beb7365c3af30046df6aba307fbcc9cebdd90ab3c4d8ef22cf2aa83db547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a420beb7365c3af30046df6aba307fbcc9cebdd90ab3c4d8ef22cf2aa83db547->leave($__internal_a420beb7365c3af30046df6aba307fbcc9cebdd90ab3c4d8ef22cf2aa83db547_prof);

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
