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
        $__internal_430438aca3b848aa0867c728cb69fd167ba278df7e15b8a79fc951209c1c869e = $this->env->getExtension("native_profiler");
        $__internal_430438aca3b848aa0867c728cb69fd167ba278df7e15b8a79fc951209c1c869e->enter($__internal_430438aca3b848aa0867c728cb69fd167ba278df7e15b8a79fc951209c1c869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430438aca3b848aa0867c728cb69fd167ba278df7e15b8a79fc951209c1c869e->leave($__internal_430438aca3b848aa0867c728cb69fd167ba278df7e15b8a79fc951209c1c869e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b998a821e284994764fbb709ac7c9ed64d216dad450b673be3cccc2ec77a969 = $this->env->getExtension("native_profiler");
        $__internal_0b998a821e284994764fbb709ac7c9ed64d216dad450b673be3cccc2ec77a969->enter($__internal_0b998a821e284994764fbb709ac7c9ed64d216dad450b673be3cccc2ec77a969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b998a821e284994764fbb709ac7c9ed64d216dad450b673be3cccc2ec77a969->leave($__internal_0b998a821e284994764fbb709ac7c9ed64d216dad450b673be3cccc2ec77a969_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6334c9b660040eb39e175c144723dd50c8a2b1f03585629df842380d865bf238 = $this->env->getExtension("native_profiler");
        $__internal_6334c9b660040eb39e175c144723dd50c8a2b1f03585629df842380d865bf238->enter($__internal_6334c9b660040eb39e175c144723dd50c8a2b1f03585629df842380d865bf238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6334c9b660040eb39e175c144723dd50c8a2b1f03585629df842380d865bf238->leave($__internal_6334c9b660040eb39e175c144723dd50c8a2b1f03585629df842380d865bf238_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_469bcec073c6bdc6a680403fb3f219e4fc28ff3d73df3e47eeb1df645fb5276a = $this->env->getExtension("native_profiler");
        $__internal_469bcec073c6bdc6a680403fb3f219e4fc28ff3d73df3e47eeb1df645fb5276a->enter($__internal_469bcec073c6bdc6a680403fb3f219e4fc28ff3d73df3e47eeb1df645fb5276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_469bcec073c6bdc6a680403fb3f219e4fc28ff3d73df3e47eeb1df645fb5276a->leave($__internal_469bcec073c6bdc6a680403fb3f219e4fc28ff3d73df3e47eeb1df645fb5276a_prof);

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
