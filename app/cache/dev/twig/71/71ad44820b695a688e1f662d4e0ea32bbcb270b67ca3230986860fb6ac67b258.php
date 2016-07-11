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
        $__internal_c5f738d8dd1ac4d54683cc0470d01509450173b29ecd7ae713a32d3be930921a = $this->env->getExtension("native_profiler");
        $__internal_c5f738d8dd1ac4d54683cc0470d01509450173b29ecd7ae713a32d3be930921a->enter($__internal_c5f738d8dd1ac4d54683cc0470d01509450173b29ecd7ae713a32d3be930921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f738d8dd1ac4d54683cc0470d01509450173b29ecd7ae713a32d3be930921a->leave($__internal_c5f738d8dd1ac4d54683cc0470d01509450173b29ecd7ae713a32d3be930921a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ecddcfe4a47c3e3c0ae2a3221b89ff16cc04d45fb84f12abc222da4cbe8a562 = $this->env->getExtension("native_profiler");
        $__internal_3ecddcfe4a47c3e3c0ae2a3221b89ff16cc04d45fb84f12abc222da4cbe8a562->enter($__internal_3ecddcfe4a47c3e3c0ae2a3221b89ff16cc04d45fb84f12abc222da4cbe8a562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ecddcfe4a47c3e3c0ae2a3221b89ff16cc04d45fb84f12abc222da4cbe8a562->leave($__internal_3ecddcfe4a47c3e3c0ae2a3221b89ff16cc04d45fb84f12abc222da4cbe8a562_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc0f32f2320efe86d81c327000a5a6087e6c4bd57bbe84a37c5ea77bd7bf4e76 = $this->env->getExtension("native_profiler");
        $__internal_bc0f32f2320efe86d81c327000a5a6087e6c4bd57bbe84a37c5ea77bd7bf4e76->enter($__internal_bc0f32f2320efe86d81c327000a5a6087e6c4bd57bbe84a37c5ea77bd7bf4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc0f32f2320efe86d81c327000a5a6087e6c4bd57bbe84a37c5ea77bd7bf4e76->leave($__internal_bc0f32f2320efe86d81c327000a5a6087e6c4bd57bbe84a37c5ea77bd7bf4e76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e72add463e6d2919ff20c2d8e84471c847489ad3e5ceceb384f52015a823594 = $this->env->getExtension("native_profiler");
        $__internal_3e72add463e6d2919ff20c2d8e84471c847489ad3e5ceceb384f52015a823594->enter($__internal_3e72add463e6d2919ff20c2d8e84471c847489ad3e5ceceb384f52015a823594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e72add463e6d2919ff20c2d8e84471c847489ad3e5ceceb384f52015a823594->leave($__internal_3e72add463e6d2919ff20c2d8e84471c847489ad3e5ceceb384f52015a823594_prof);

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
