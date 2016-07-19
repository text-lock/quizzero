<?php

/* QuizzeroQuizBundle:Quiz:admin_show.html.twig */
class __TwigTemplate_56a80fa369b526318dcc216d0b524b97f2d08e100d0e4bef12b0f8031ca8bfb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuizzeroQuizBundle:Quiz:admin_show.html.twig", 1);
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
        $__internal_c8356c85c2106abc7b966006de5f955eed522982581440a09a5b29059a13acf3 = $this->env->getExtension("native_profiler");
        $__internal_c8356c85c2106abc7b966006de5f955eed522982581440a09a5b29059a13acf3->enter($__internal_c8356c85c2106abc7b966006de5f955eed522982581440a09a5b29059a13acf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:admin_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8356c85c2106abc7b966006de5f955eed522982581440a09a5b29059a13acf3->leave($__internal_c8356c85c2106abc7b966006de5f955eed522982581440a09a5b29059a13acf3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2884c2098fb9228996516b589c03f4f75e42d0b384eb23881ef473d3f6f39e6e = $this->env->getExtension("native_profiler");
        $__internal_2884c2098fb9228996516b589c03f4f75e42d0b384eb23881ef473d3f6f39e6e->enter($__internal_2884c2098fb9228996516b589c03f4f75e42d0b384eb23881ef473d3f6f39e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Quiz:admin_show.html.twig", 4)->display($context);
        // line 5
        echo "    <h1>Quiz</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("quizlink_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quizlink_edit", array("id" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2884c2098fb9228996516b589c03f4f75e42d0b384eb23881ef473d3f6f39e6e->leave($__internal_2884c2098fb9228996516b589c03f4f75e42d0b384eb23881ef473d3f6f39e6e_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Quiz:admin_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  105 => 40,  99 => 37,  93 => 34,  81 => 27,  72 => 23,  65 => 19,  58 => 15,  51 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/*     <h1>Quiz</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ quiz.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Body</th>*/
/*                 <td>{{ quiz.body }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Image</th>*/
/*                 <td>{{ quiz.image }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{% if quiz.createdat %}{{ quiz.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated_at</th>*/
/*                 <td>{% if quiz.updatedat %}{{ quiz.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quizlink_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('quizlink_edit', { 'id': quiz.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
