<?php

/* :result:new.html.twig */
class __TwigTemplate_f5ffdea87d6e527ccee62eadedfc0589e4cd49fcbfadd952e83f4da2ca244547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_328ec91e615f40a1036de9ba874330451ea3eb83542e436d4621dac505189ccc = $this->env->getExtension("native_profiler");
        $__internal_328ec91e615f40a1036de9ba874330451ea3eb83542e436d4621dac505189ccc->enter($__internal_328ec91e615f40a1036de9ba874330451ea3eb83542e436d4621dac505189ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328ec91e615f40a1036de9ba874330451ea3eb83542e436d4621dac505189ccc->leave($__internal_328ec91e615f40a1036de9ba874330451ea3eb83542e436d4621dac505189ccc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_727db9e09acbfdb088e531616574288991761ab3ec35fa7cb0e007140a9ae5f8 = $this->env->getExtension("native_profiler");
        $__internal_727db9e09acbfdb088e531616574288991761ab3ec35fa7cb0e007140a9ae5f8->enter($__internal_727db9e09acbfdb088e531616574288991761ab3ec35fa7cb0e007140a9ae5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("result_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_727db9e09acbfdb088e531616574288991761ab3ec35fa7cb0e007140a9ae5f8->leave($__internal_727db9e09acbfdb088e531616574288991761ab3ec35fa7cb0e007140a9ae5f8_prof);

    }

    public function getTemplateName()
    {
        return ":result:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('result_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
