<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_634b5da34bca358d93dbc6d57e3cafed95052786010cc1a78dfef5f304247aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_66d022e0b904a9d2fae189d14cfe4b52a42962dc9e7dbe7117e3b4a6a8ce42f6 = $this->env->getExtension("native_profiler");
        $__internal_66d022e0b904a9d2fae189d14cfe4b52a42962dc9e7dbe7117e3b4a6a8ce42f6->enter($__internal_66d022e0b904a9d2fae189d14cfe4b52a42962dc9e7dbe7117e3b4a6a8ce42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d022e0b904a9d2fae189d14cfe4b52a42962dc9e7dbe7117e3b4a6a8ce42f6->leave($__internal_66d022e0b904a9d2fae189d14cfe4b52a42962dc9e7dbe7117e3b4a6a8ce42f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7130367de3b86c05ef987a1b34260a203a063a3f11665547dc0f859e122f78a = $this->env->getExtension("native_profiler");
        $__internal_c7130367de3b86c05ef987a1b34260a203a063a3f11665547dc0f859e122f78a->enter($__internal_c7130367de3b86c05ef987a1b34260a203a063a3f11665547dc0f859e122f78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c7130367de3b86c05ef987a1b34260a203a063a3f11665547dc0f859e122f78a->leave($__internal_c7130367de3b86c05ef987a1b34260a203a063a3f11665547dc0f859e122f78a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1dceece8a3ad0d3c77ea3cc216ddcd40dbf53ced0b3f0b99a1e06b73d56403d = $this->env->getExtension("native_profiler");
        $__internal_c1dceece8a3ad0d3c77ea3cc216ddcd40dbf53ced0b3f0b99a1e06b73d56403d->enter($__internal_c1dceece8a3ad0d3c77ea3cc216ddcd40dbf53ced0b3f0b99a1e06b73d56403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c1dceece8a3ad0d3c77ea3cc216ddcd40dbf53ced0b3f0b99a1e06b73d56403d->leave($__internal_c1dceece8a3ad0d3c77ea3cc216ddcd40dbf53ced0b3f0b99a1e06b73d56403d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
