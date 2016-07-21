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
        $__internal_869f884d3ebdb4228a703d7b392c383891c3a1f69a4f66b72a69d7f500132588 = $this->env->getExtension("native_profiler");
        $__internal_869f884d3ebdb4228a703d7b392c383891c3a1f69a4f66b72a69d7f500132588->enter($__internal_869f884d3ebdb4228a703d7b392c383891c3a1f69a4f66b72a69d7f500132588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_869f884d3ebdb4228a703d7b392c383891c3a1f69a4f66b72a69d7f500132588->leave($__internal_869f884d3ebdb4228a703d7b392c383891c3a1f69a4f66b72a69d7f500132588_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed67e3a0313bb09374bb5d6f01b322280bbe7b046757e53624c32b988336a5f5 = $this->env->getExtension("native_profiler");
        $__internal_ed67e3a0313bb09374bb5d6f01b322280bbe7b046757e53624c32b988336a5f5->enter($__internal_ed67e3a0313bb09374bb5d6f01b322280bbe7b046757e53624c32b988336a5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed67e3a0313bb09374bb5d6f01b322280bbe7b046757e53624c32b988336a5f5->leave($__internal_ed67e3a0313bb09374bb5d6f01b322280bbe7b046757e53624c32b988336a5f5_prof);

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
