<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d4f9b42023641d19cd91a895c7b8d21761970d572c799c9a5292f957cc62fbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f118eeb93a13b133bfad12df1a13b9ef4edfcec9a09c4e37f1366b234c20e778 = $this->env->getExtension("native_profiler");
        $__internal_f118eeb93a13b133bfad12df1a13b9ef4edfcec9a09c4e37f1366b234c20e778->enter($__internal_f118eeb93a13b133bfad12df1a13b9ef4edfcec9a09c4e37f1366b234c20e778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f118eeb93a13b133bfad12df1a13b9ef4edfcec9a09c4e37f1366b234c20e778->leave($__internal_f118eeb93a13b133bfad12df1a13b9ef4edfcec9a09c4e37f1366b234c20e778_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3dcc96314f1d8da782f264dc3d6dbe105e88881ad866fb1d5fc108edab6d956 = $this->env->getExtension("native_profiler");
        $__internal_f3dcc96314f1d8da782f264dc3d6dbe105e88881ad866fb1d5fc108edab6d956->enter($__internal_f3dcc96314f1d8da782f264dc3d6dbe105e88881ad866fb1d5fc108edab6d956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3dcc96314f1d8da782f264dc3d6dbe105e88881ad866fb1d5fc108edab6d956->leave($__internal_f3dcc96314f1d8da782f264dc3d6dbe105e88881ad866fb1d5fc108edab6d956_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_323d03a61f99806105d3d47433683f0b68ff5130feed4e3cde693c42624b2ca5 = $this->env->getExtension("native_profiler");
        $__internal_323d03a61f99806105d3d47433683f0b68ff5130feed4e3cde693c42624b2ca5->enter($__internal_323d03a61f99806105d3d47433683f0b68ff5130feed4e3cde693c42624b2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_323d03a61f99806105d3d47433683f0b68ff5130feed4e3cde693c42624b2ca5->leave($__internal_323d03a61f99806105d3d47433683f0b68ff5130feed4e3cde693c42624b2ca5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddce1bf52d0af90127354824f8e34f4dac557e4f99310e6f3165224617060261 = $this->env->getExtension("native_profiler");
        $__internal_ddce1bf52d0af90127354824f8e34f4dac557e4f99310e6f3165224617060261->enter($__internal_ddce1bf52d0af90127354824f8e34f4dac557e4f99310e6f3165224617060261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ddce1bf52d0af90127354824f8e34f4dac557e4f99310e6f3165224617060261->leave($__internal_ddce1bf52d0af90127354824f8e34f4dac557e4f99310e6f3165224617060261_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
