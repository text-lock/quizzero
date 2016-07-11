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
        $__internal_56bcd2cf0eb1edcbd65f9d279d1101555907944f18b170c991e5db0fbdb6e0b0 = $this->env->getExtension("native_profiler");
        $__internal_56bcd2cf0eb1edcbd65f9d279d1101555907944f18b170c991e5db0fbdb6e0b0->enter($__internal_56bcd2cf0eb1edcbd65f9d279d1101555907944f18b170c991e5db0fbdb6e0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56bcd2cf0eb1edcbd65f9d279d1101555907944f18b170c991e5db0fbdb6e0b0->leave($__internal_56bcd2cf0eb1edcbd65f9d279d1101555907944f18b170c991e5db0fbdb6e0b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff91411db5ea709824027bc6e052433cb61833b5c48841b9f1a53bd15a5a97a9 = $this->env->getExtension("native_profiler");
        $__internal_ff91411db5ea709824027bc6e052433cb61833b5c48841b9f1a53bd15a5a97a9->enter($__internal_ff91411db5ea709824027bc6e052433cb61833b5c48841b9f1a53bd15a5a97a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff91411db5ea709824027bc6e052433cb61833b5c48841b9f1a53bd15a5a97a9->leave($__internal_ff91411db5ea709824027bc6e052433cb61833b5c48841b9f1a53bd15a5a97a9_prof);

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
