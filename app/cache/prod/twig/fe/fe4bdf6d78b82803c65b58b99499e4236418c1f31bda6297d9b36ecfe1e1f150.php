<?php

/* QuizzeroQuizBundle:Result:show.html.twig */
class __TwigTemplate_df6a5ed05a5258ac8919064e0facfb3d30c9980e9fd4a4a2d89810a8f6a8b245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("QuizzeroQuizBundle::layout.html.twig", "QuizzeroQuizBundle:Result:show.html.twig", 2);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_subtitle' => array($this, 'block_header_subtitle'),
            'header_image' => array($this, 'block_header_image'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizzeroQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_header_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "body", array()), "html", null, true);
    }

    // line 6
    public function block_header_image($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "image", array())))), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2 class=\"section-heading\">Quiz result for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "title", array()), "html", null, true);
        echo "\"</h2>

    <table class=\"table table-bordered\">
    <thead>
   
    <tr><th>Question</th><th>Your answer</th><th>Correct answer</th><th>isCorrect</th></tr>
    </thead>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "  
        <tr ";
            // line 17
            if (($this->getAttribute($context["result"], "isCorrect", array()) == false)) {
                echo " class=\"alert-danger\" ";
            } else {
                echo " class=\"alert-success\" ";
            }
            echo ">
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "body", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["result"], "answer", array()), ";", " "), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["result"], "question", array()), "correct", array()), ";", " "), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            if (($this->getAttribute($context["result"], "isCorrect", array()) == false)) {
                echo " false ";
            } else {
                echo " true ";
            }
            echo "</td>      

        </tr>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Result:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  70 => 17,  64 => 16,  52 => 8,  49 => 7,  43 => 6,  37 => 5,  31 => 4,  11 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Result/show.html.twig #}*/
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* {% block header_title %}{{ quiz.title }}{% endblock %}*/
/* {% block header_subtitle %}{{ quiz.body }}{% endblock %}*/
/* {% block header_image %}{{ asset(['img/', quiz.image]|join) }}{% endblock %}*/
/* {% block body %}*/
/*     <h2 class="section-heading">Quiz result for "{{quiz.title}}"</h2>*/
/* */
/*     <table class="table table-bordered">*/
/*     <thead>*/
/*    */
/*     <tr><th>Question</th><th>Your answer</th><th>Correct answer</th><th>isCorrect</th></tr>*/
/*     </thead>*/
/* */
/*     {% for result in results  %}  */
/*         <tr {% if result.isCorrect == false %} class="alert-danger" {% else %} class="alert-success" {% endif %}>*/
/*         <td>{{result.question.body}}</td>*/
/*         <td>{{result.answer|replace(';', " ") }}</td>*/
/*         <td>{{ result.question.correct|replace(';', " ") }}</td>*/
/*         <td>{% if result.isCorrect == false %} false {% else %} true {% endif %}</td>      */
/* */
/*         </tr>  */
/*     {% endfor %}*/
/* */
/* </table>*/
/* {% endblock %}*/
