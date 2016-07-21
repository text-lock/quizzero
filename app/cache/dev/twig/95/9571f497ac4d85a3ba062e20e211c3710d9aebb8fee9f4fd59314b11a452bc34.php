<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_309d4ffbbf2847ad782a145f45a102d32494732c06c8966b310a37ea2a137152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30251416b7104a26755478cfb5c863b1e3876c03da36112ab7a2bb8f870785f5 = $this->env->getExtension("native_profiler");
        $__internal_30251416b7104a26755478cfb5c863b1e3876c03da36112ab7a2bb8f870785f5->enter($__internal_30251416b7104a26755478cfb5c863b1e3876c03da36112ab7a2bb8f870785f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30251416b7104a26755478cfb5c863b1e3876c03da36112ab7a2bb8f870785f5->leave($__internal_30251416b7104a26755478cfb5c863b1e3876c03da36112ab7a2bb8f870785f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_180e5adb92ac8d38d9df0ceaa9eac555eae76c22bc43825bf629cf6ae6abac36 = $this->env->getExtension("native_profiler");
        $__internal_180e5adb92ac8d38d9df0ceaa9eac555eae76c22bc43825bf629cf6ae6abac36->enter($__internal_180e5adb92ac8d38d9df0ceaa9eac555eae76c22bc43825bf629cf6ae6abac36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_180e5adb92ac8d38d9df0ceaa9eac555eae76c22bc43825bf629cf6ae6abac36->leave($__internal_180e5adb92ac8d38d9df0ceaa9eac555eae76c22bc43825bf629cf6ae6abac36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a497c046ec474986c0ee57de9e729616ae3480e48e96631b0cfddbb9a07611f = $this->env->getExtension("native_profiler");
        $__internal_5a497c046ec474986c0ee57de9e729616ae3480e48e96631b0cfddbb9a07611f->enter($__internal_5a497c046ec474986c0ee57de9e729616ae3480e48e96631b0cfddbb9a07611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a497c046ec474986c0ee57de9e729616ae3480e48e96631b0cfddbb9a07611f->leave($__internal_5a497c046ec474986c0ee57de9e729616ae3480e48e96631b0cfddbb9a07611f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b58860bedd48ebeca04256ac6e3e7da1d1fbac2fff69a5a8279eab1694274871 = $this->env->getExtension("native_profiler");
        $__internal_b58860bedd48ebeca04256ac6e3e7da1d1fbac2fff69a5a8279eab1694274871->enter($__internal_b58860bedd48ebeca04256ac6e3e7da1d1fbac2fff69a5a8279eab1694274871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b58860bedd48ebeca04256ac6e3e7da1d1fbac2fff69a5a8279eab1694274871->leave($__internal_b58860bedd48ebeca04256ac6e3e7da1d1fbac2fff69a5a8279eab1694274871_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
