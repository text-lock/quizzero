<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_51420020703eab17f470e81f3699823391a8768a27f7a5011b7ad31b79b2b236 extends Twig_Template
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
        $__internal_661f9c0975fea620ebe53515e40281538015104acc7f1b53a5188c215c618a13 = $this->env->getExtension("native_profiler");
        $__internal_661f9c0975fea620ebe53515e40281538015104acc7f1b53a5188c215c618a13->enter($__internal_661f9c0975fea620ebe53515e40281538015104acc7f1b53a5188c215c618a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_661f9c0975fea620ebe53515e40281538015104acc7f1b53a5188c215c618a13->leave($__internal_661f9c0975fea620ebe53515e40281538015104acc7f1b53a5188c215c618a13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
