<?php

/* :question:new.html.twig */
class __TwigTemplate_187381665e0f93490f35374819be9103f7bc5ccb5edec7fe08b5ab09b1fb408d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":question:new.html.twig", 1);
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
        $__internal_767d50acce73ef8faefa38c7655a1a6c73389f72b0e63059d49a1ad06b80b44a = $this->env->getExtension("native_profiler");
        $__internal_767d50acce73ef8faefa38c7655a1a6c73389f72b0e63059d49a1ad06b80b44a->enter($__internal_767d50acce73ef8faefa38c7655a1a6c73389f72b0e63059d49a1ad06b80b44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":question:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767d50acce73ef8faefa38c7655a1a6c73389f72b0e63059d49a1ad06b80b44a->leave($__internal_767d50acce73ef8faefa38c7655a1a6c73389f72b0e63059d49a1ad06b80b44a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_883d3818166085c00202f15c5204768d9d51abd220ee68d6e49f5d485aefc225 = $this->env->getExtension("native_profiler");
        $__internal_883d3818166085c00202f15c5204768d9d51abd220ee68d6e49f5d485aefc225->enter($__internal_883d3818166085c00202f15c5204768d9d51abd220ee68d6e49f5d485aefc225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Question creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("questionlink_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_883d3818166085c00202f15c5204768d9d51abd220ee68d6e49f5d485aefc225->leave($__internal_883d3818166085c00202f15c5204768d9d51abd220ee68d6e49f5d485aefc225_prof);

    }

    public function getTemplateName()
    {
        return ":question:new.html.twig";
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
/*     <h1>Question creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('questionlink_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
