<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_309d4ffbbf2847ad782a145f45a102d32494732c06c8966b310a37ea2a137152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_51214005d9e40fb0702fae9bb00e09cb3585abbc7060fea0da18aa2a7766eaf3 = $this->env->getExtension("native_profiler");
        $__internal_51214005d9e40fb0702fae9bb00e09cb3585abbc7060fea0da18aa2a7766eaf3->enter($__internal_51214005d9e40fb0702fae9bb00e09cb3585abbc7060fea0da18aa2a7766eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51214005d9e40fb0702fae9bb00e09cb3585abbc7060fea0da18aa2a7766eaf3->leave($__internal_51214005d9e40fb0702fae9bb00e09cb3585abbc7060fea0da18aa2a7766eaf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03a3b9dafe2ce00f38f1a3f0dac09f6f04bb4a43d7dd65aaf2244a4f8f6693c8 = $this->env->getExtension("native_profiler");
        $__internal_03a3b9dafe2ce00f38f1a3f0dac09f6f04bb4a43d7dd65aaf2244a4f8f6693c8->enter($__internal_03a3b9dafe2ce00f38f1a3f0dac09f6f04bb4a43d7dd65aaf2244a4f8f6693c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03a3b9dafe2ce00f38f1a3f0dac09f6f04bb4a43d7dd65aaf2244a4f8f6693c8->leave($__internal_03a3b9dafe2ce00f38f1a3f0dac09f6f04bb4a43d7dd65aaf2244a4f8f6693c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39e89e42d9846bda4331315a65d5fb2aea5fc13c6949ca2d5753ea84ca18f439 = $this->env->getExtension("native_profiler");
        $__internal_39e89e42d9846bda4331315a65d5fb2aea5fc13c6949ca2d5753ea84ca18f439->enter($__internal_39e89e42d9846bda4331315a65d5fb2aea5fc13c6949ca2d5753ea84ca18f439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39e89e42d9846bda4331315a65d5fb2aea5fc13c6949ca2d5753ea84ca18f439->leave($__internal_39e89e42d9846bda4331315a65d5fb2aea5fc13c6949ca2d5753ea84ca18f439_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c63e770943dd1fd2a9d68b4c599bf610e4353c2a3348f10d521abefc0e6598b = $this->env->getExtension("native_profiler");
        $__internal_8c63e770943dd1fd2a9d68b4c599bf610e4353c2a3348f10d521abefc0e6598b->enter($__internal_8c63e770943dd1fd2a9d68b4c599bf610e4353c2a3348f10d521abefc0e6598b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c63e770943dd1fd2a9d68b4c599bf610e4353c2a3348f10d521abefc0e6598b->leave($__internal_8c63e770943dd1fd2a9d68b4c599bf610e4353c2a3348f10d521abefc0e6598b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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