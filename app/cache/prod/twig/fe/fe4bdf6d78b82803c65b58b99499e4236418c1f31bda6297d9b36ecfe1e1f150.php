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

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "title", array()), "html", null, true);
    }

    // line 6
    public function block_header_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "body", array()), "html", null, true);
    }

    // line 7
    public function block_header_image($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "image", array())))), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Result:show.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"col-md-12\">...............................................</div>
    <h2 class=\"section-heading\">Quiz result for \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "title", array()), "html", null, true);
        echo "\"</h2>

    <table class=\"table table-bordered\">
    <thead>
   
    <tr><th>Question</th><th>Your answer</th><th>Correct answer</th><th>isCorrect</th></tr>
    </thead>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            echo "  
        <tr ";
            // line 20
            if (($this->getAttribute($context["result"], "isCorrect", array()) == false)) {
                echo " class=\"alert-danger\" ";
            } else {
                echo " class=\"alert-success\" ";
            }
            echo ">
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "body", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "answer", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "variates", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
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
        // line 28
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
        return array (  109 => 28,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  75 => 20,  69 => 19,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  43 => 7,  37 => 6,  31 => 5,  11 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Result/show.html.twig #}*/
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block header_title %}{{ quiz.title }}{% endblock %}*/
/* {% block header_subtitle %}{{ quiz.body }}{% endblock %}*/
/* {% block header_image %}{{ asset(['img/', quiz.image]|join) }}{% endblock %}*/
/* {% block body %}*/
/*     {% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/*     <div class="col-md-12">...............................................</div>*/
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
/*         <td>{{result.answer }}</td>*/
/*         <td>{{ result.question.variates}}</td>*/
/*         <td>{% if result.isCorrect == false %} false {% else %} true {% endif %}</td>      */
/* */
/*         </tr>  */
/*     {% endfor %}*/
/* */
/* </table>*/
/* {% endblock %}*/
