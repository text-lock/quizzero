<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d4f9b42023641d19cd91a895c7b8d21761970d572c799c9a5292f957cc62fbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_0a41fc6c6b8c97814e66b02282669840d773ab9b7395fd1e173dbe3c66faf5e7 = $this->env->getExtension("native_profiler");
        $__internal_0a41fc6c6b8c97814e66b02282669840d773ab9b7395fd1e173dbe3c66faf5e7->enter($__internal_0a41fc6c6b8c97814e66b02282669840d773ab9b7395fd1e173dbe3c66faf5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a41fc6c6b8c97814e66b02282669840d773ab9b7395fd1e173dbe3c66faf5e7->leave($__internal_0a41fc6c6b8c97814e66b02282669840d773ab9b7395fd1e173dbe3c66faf5e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f0704da9a77cb7796760d08d457fd989a2a5b7a3ae322bcc288a47825a6ea54 = $this->env->getExtension("native_profiler");
        $__internal_5f0704da9a77cb7796760d08d457fd989a2a5b7a3ae322bcc288a47825a6ea54->enter($__internal_5f0704da9a77cb7796760d08d457fd989a2a5b7a3ae322bcc288a47825a6ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f0704da9a77cb7796760d08d457fd989a2a5b7a3ae322bcc288a47825a6ea54->leave($__internal_5f0704da9a77cb7796760d08d457fd989a2a5b7a3ae322bcc288a47825a6ea54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03aa988b0f00f356613827a1c0fe777faf3d58a127503f52d22f1a6ab9473bf5 = $this->env->getExtension("native_profiler");
        $__internal_03aa988b0f00f356613827a1c0fe777faf3d58a127503f52d22f1a6ab9473bf5->enter($__internal_03aa988b0f00f356613827a1c0fe777faf3d58a127503f52d22f1a6ab9473bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03aa988b0f00f356613827a1c0fe777faf3d58a127503f52d22f1a6ab9473bf5->leave($__internal_03aa988b0f00f356613827a1c0fe777faf3d58a127503f52d22f1a6ab9473bf5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d4ff2eb89284e65849d5f44e86c10b86b96cf75c8fced49019cb1a84aa22b5 = $this->env->getExtension("native_profiler");
        $__internal_56d4ff2eb89284e65849d5f44e86c10b86b96cf75c8fced49019cb1a84aa22b5->enter($__internal_56d4ff2eb89284e65849d5f44e86c10b86b96cf75c8fced49019cb1a84aa22b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_56d4ff2eb89284e65849d5f44e86c10b86b96cf75c8fced49019cb1a84aa22b5->leave($__internal_56d4ff2eb89284e65849d5f44e86c10b86b96cf75c8fced49019cb1a84aa22b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
