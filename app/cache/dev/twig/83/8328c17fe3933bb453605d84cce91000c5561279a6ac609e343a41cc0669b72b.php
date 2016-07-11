<?php

/* QuizzeroQuizBundle:User:show.html.twig */
class __TwigTemplate_06a2d68dfa92e5195ad09a65d0a5a21019241ab9700f5f82f56c7adc0a0d475d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuizzeroQuizBundle:User:show.html.twig", 1);
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
        $__internal_88d28e555bdb27ffd7c402879569618e216487cd98fb34d92cf792cfadf4538a = $this->env->getExtension("native_profiler");
        $__internal_88d28e555bdb27ffd7c402879569618e216487cd98fb34d92cf792cfadf4538a->enter($__internal_88d28e555bdb27ffd7c402879569618e216487cd98fb34d92cf792cfadf4538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d28e555bdb27ffd7c402879569618e216487cd98fb34d92cf792cfadf4538a->leave($__internal_88d28e555bdb27ffd7c402879569618e216487cd98fb34d92cf792cfadf4538a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6237c75fe3f2755fe20a6b07e9754c3f49c30148994c0a58add66c2d5eb53ea8 = $this->env->getExtension("native_profiler");
        $__internal_6237c75fe3f2755fe20a6b07e9754c3f49c30148994c0a58add66c2d5eb53ea8->enter($__internal_6237c75fe3f2755fe20a6b07e9754c3f49c30148994c0a58add66c2d5eb53ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:User:show.html.twig", 4)->display($context);
        // line 5
        echo "
\t<div class=\"col-md-12\">.................................................</div>
    <h1>User result list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Quiz</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 20
            echo "            <tr>
                
                <td>";
            // line 22
            if ($this->getAttribute($context["result"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 23
            echo "\t\t\t\t
\t\t\t\t</td>
\t\t\t\t<td><a href=\"\">
\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QuizzeroQuizBundle_user_result_show", array("id" => $this->getAttribute($context["result"], "quizSession", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "quiz", array()), "title", array()), "html", null, true);
            echo "</a></td>
                \t\t\t\t
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_6237c75fe3f2755fe20a6b07e9754c3f49c30148994c0a58add66c2d5eb53ea8->leave($__internal_6237c75fe3f2755fe20a6b07e9754c3f49c30148994c0a58add66c2d5eb53ea8_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  80 => 27,  76 => 26,  71 => 23,  67 => 22,  63 => 20,  59 => 19,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/* */
/* 	<div class="col-md-12">.................................................</div>*/
/*     <h1>User result list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>Quiz</th>*/
/*                 <th></th>*/
/*                 */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for result in results %}*/
/*             <tr>*/
/*                 */
/*                 <td>{% if result.createdat %}{{ result.createdat|date('Y-m-d H:i:s') }}{% endif %}*/
/* 				*/
/* 				</td>*/
/* 				<td><a href="">*/
/* 				<a href="{{ path('QuizzeroQuizBundle_user_result_show', { 'id': result.quizSession }) }}">*/
/* 				{{result.quiz.title}}</a></td>*/
/*                 				*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
