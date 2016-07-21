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
        $__internal_2d9b479842db9f442b492df24c9d531ffd8277474b8fb662a46bf8ced702a03e = $this->env->getExtension("native_profiler");
        $__internal_2d9b479842db9f442b492df24c9d531ffd8277474b8fb662a46bf8ced702a03e->enter($__internal_2d9b479842db9f442b492df24c9d531ffd8277474b8fb662a46bf8ced702a03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9b479842db9f442b492df24c9d531ffd8277474b8fb662a46bf8ced702a03e->leave($__internal_2d9b479842db9f442b492df24c9d531ffd8277474b8fb662a46bf8ced702a03e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26cca9f51ddf8aa5f6c9ab0ae8e8491515e79023d1e3db3c58ea6418bc4a9624 = $this->env->getExtension("native_profiler");
        $__internal_26cca9f51ddf8aa5f6c9ab0ae8e8491515e79023d1e3db3c58ea6418bc4a9624->enter($__internal_26cca9f51ddf8aa5f6c9ab0ae8e8491515e79023d1e3db3c58ea6418bc4a9624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_26cca9f51ddf8aa5f6c9ab0ae8e8491515e79023d1e3db3c58ea6418bc4a9624->leave($__internal_26cca9f51ddf8aa5f6c9ab0ae8e8491515e79023d1e3db3c58ea6418bc4a9624_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f3f9caa7cfc3890b8636ed5d892d144e1cc14be89d4c7969b705bf7b44a530 = $this->env->getExtension("native_profiler");
        $__internal_65f3f9caa7cfc3890b8636ed5d892d144e1cc14be89d4c7969b705bf7b44a530->enter($__internal_65f3f9caa7cfc3890b8636ed5d892d144e1cc14be89d4c7969b705bf7b44a530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65f3f9caa7cfc3890b8636ed5d892d144e1cc14be89d4c7969b705bf7b44a530->leave($__internal_65f3f9caa7cfc3890b8636ed5d892d144e1cc14be89d4c7969b705bf7b44a530_prof);

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
