<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c0437c00d14d50129c7eaf0a674e2486d8a267ccf790636ce1449fe0511f804b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3390975ed026e0db0eebc89e40d26443e7c3353db973422e12ad93c8b85c5411 = $this->env->getExtension("native_profiler");
        $__internal_3390975ed026e0db0eebc89e40d26443e7c3353db973422e12ad93c8b85c5411->enter($__internal_3390975ed026e0db0eebc89e40d26443e7c3353db973422e12ad93c8b85c5411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3390975ed026e0db0eebc89e40d26443e7c3353db973422e12ad93c8b85c5411->leave($__internal_3390975ed026e0db0eebc89e40d26443e7c3353db973422e12ad93c8b85c5411_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5b29f52ac67047c78b64749861b36ed1f7f90c8d3e05a9fa8eff9f6fcfb9f90 = $this->env->getExtension("native_profiler");
        $__internal_c5b29f52ac67047c78b64749861b36ed1f7f90c8d3e05a9fa8eff9f6fcfb9f90->enter($__internal_c5b29f52ac67047c78b64749861b36ed1f7f90c8d3e05a9fa8eff9f6fcfb9f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c5b29f52ac67047c78b64749861b36ed1f7f90c8d3e05a9fa8eff9f6fcfb9f90->leave($__internal_c5b29f52ac67047c78b64749861b36ed1f7f90c8d3e05a9fa8eff9f6fcfb9f90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
