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
        $__internal_697a386f2c956835a135c722eeed4c9c28980fb02940b07aad8cacc161772f29 = $this->env->getExtension("native_profiler");
        $__internal_697a386f2c956835a135c722eeed4c9c28980fb02940b07aad8cacc161772f29->enter($__internal_697a386f2c956835a135c722eeed4c9c28980fb02940b07aad8cacc161772f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697a386f2c956835a135c722eeed4c9c28980fb02940b07aad8cacc161772f29->leave($__internal_697a386f2c956835a135c722eeed4c9c28980fb02940b07aad8cacc161772f29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd33e014b0809e82e91eb403d67dc53ff542856fd43d1056972d17a375d9a39f = $this->env->getExtension("native_profiler");
        $__internal_bd33e014b0809e82e91eb403d67dc53ff542856fd43d1056972d17a375d9a39f->enter($__internal_bd33e014b0809e82e91eb403d67dc53ff542856fd43d1056972d17a375d9a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd33e014b0809e82e91eb403d67dc53ff542856fd43d1056972d17a375d9a39f->leave($__internal_bd33e014b0809e82e91eb403d67dc53ff542856fd43d1056972d17a375d9a39f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_623736fc5458e7aca15ea283eb0c413fd21f55e1bad018c04cd36b678b6f0ca7 = $this->env->getExtension("native_profiler");
        $__internal_623736fc5458e7aca15ea283eb0c413fd21f55e1bad018c04cd36b678b6f0ca7->enter($__internal_623736fc5458e7aca15ea283eb0c413fd21f55e1bad018c04cd36b678b6f0ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_623736fc5458e7aca15ea283eb0c413fd21f55e1bad018c04cd36b678b6f0ca7->leave($__internal_623736fc5458e7aca15ea283eb0c413fd21f55e1bad018c04cd36b678b6f0ca7_prof);

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
