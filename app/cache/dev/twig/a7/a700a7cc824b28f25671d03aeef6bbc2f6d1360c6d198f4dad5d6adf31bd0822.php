<?php

/* :result:edit.html.twig */
class __TwigTemplate_6571a91991365557a52cb37e9da797a03a5fe9a24b28c01cb75fde42b689bc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:edit.html.twig", 1);
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
        $__internal_2d074da87c5e39659d3269ab7cfc9476440ab3c05ad76739bb6a1a97cf34f320 = $this->env->getExtension("native_profiler");
        $__internal_2d074da87c5e39659d3269ab7cfc9476440ab3c05ad76739bb6a1a97cf34f320->enter($__internal_2d074da87c5e39659d3269ab7cfc9476440ab3c05ad76739bb6a1a97cf34f320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d074da87c5e39659d3269ab7cfc9476440ab3c05ad76739bb6a1a97cf34f320->leave($__internal_2d074da87c5e39659d3269ab7cfc9476440ab3c05ad76739bb6a1a97cf34f320_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b500e67229f02d4b3a58e3d380c941fa8686b2236ee53c45910547976f2edc9a = $this->env->getExtension("native_profiler");
        $__internal_b500e67229f02d4b3a58e3d380c941fa8686b2236ee53c45910547976f2edc9a->enter($__internal_b500e67229f02d4b3a58e3d380c941fa8686b2236ee53c45910547976f2edc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("result_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b500e67229f02d4b3a58e3d380c941fa8686b2236ee53c45910547976f2edc9a->leave($__internal_b500e67229f02d4b3a58e3d380c941fa8686b2236ee53c45910547976f2edc9a_prof);

    }

    public function getTemplateName()
    {
        return ":result:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('result_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
