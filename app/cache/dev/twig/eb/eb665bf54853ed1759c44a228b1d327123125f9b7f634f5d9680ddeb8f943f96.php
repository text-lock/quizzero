<?php

/* QuizzeroQuizBundle:Quiz:admin_new.html.twig */
class __TwigTemplate_a806e7fb617fefa9eae58fbf88cab6a104ff2797e9b637cbb1b20b94ae9c7456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuizzeroQuizBundle:Quiz:admin_new.html.twig", 1);
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
        $__internal_855cb0c23f831428acb80e2b72b3c615f776d7c4cb3a2f70b053d581033cd81d = $this->env->getExtension("native_profiler");
        $__internal_855cb0c23f831428acb80e2b72b3c615f776d7c4cb3a2f70b053d581033cd81d->enter($__internal_855cb0c23f831428acb80e2b72b3c615f776d7c4cb3a2f70b053d581033cd81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:admin_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855cb0c23f831428acb80e2b72b3c615f776d7c4cb3a2f70b053d581033cd81d->leave($__internal_855cb0c23f831428acb80e2b72b3c615f776d7c4cb3a2f70b053d581033cd81d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8989b9b0fd31608dffcb8c6ed7882f3696c37e4ce999425426f5be5a88266eab = $this->env->getExtension("native_profiler");
        $__internal_8989b9b0fd31608dffcb8c6ed7882f3696c37e4ce999425426f5be5a88266eab->enter($__internal_8989b9b0fd31608dffcb8c6ed7882f3696c37e4ce999425426f5be5a88266eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Quiz:admin_new.html.twig", 4)->display($context);
        // line 5
        echo "    <h1>Quiz creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("quizlink_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8989b9b0fd31608dffcb8c6ed7882f3696c37e4ce999425426f5be5a88266eab->leave($__internal_8989b9b0fd31608dffcb8c6ed7882f3696c37e4ce999425426f5be5a88266eab_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Quiz:admin_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  56 => 10,  51 => 8,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/*     <h1>Quiz creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quizlink_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
