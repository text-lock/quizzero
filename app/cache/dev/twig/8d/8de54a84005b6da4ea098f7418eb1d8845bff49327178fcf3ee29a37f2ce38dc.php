<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7d89468976990c9a8ef4ffeb75c7c4f32d99e3c7f3150457eca0d6c4de90c6e6 extends Twig_Template
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
        $__internal_cf50da1adcffd294d1f894fa65f4f885404eeda005bd58c9b804528ccb1f209f = $this->env->getExtension("native_profiler");
        $__internal_cf50da1adcffd294d1f894fa65f4f885404eeda005bd58c9b804528ccb1f209f->enter($__internal_cf50da1adcffd294d1f894fa65f4f885404eeda005bd58c9b804528ccb1f209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cf50da1adcffd294d1f894fa65f4f885404eeda005bd58c9b804528ccb1f209f->leave($__internal_cf50da1adcffd294d1f894fa65f4f885404eeda005bd58c9b804528ccb1f209f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
