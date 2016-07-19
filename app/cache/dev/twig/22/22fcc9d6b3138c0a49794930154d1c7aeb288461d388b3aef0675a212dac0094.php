<?php

/* QuizzeroQuizBundle:Result:show.html.twig */
class __TwigTemplate_c3b771c8a77ad02e8b04ca5c768ee4b8cef962c36f95685d0fa1f272f513ae60 extends Twig_Template
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
        $__internal_9d89ed39cea624e575d631ab26cc04d428e695c8d9f0a4862ba96f09471d9e00 = $this->env->getExtension("native_profiler");
        $__internal_9d89ed39cea624e575d631ab26cc04d428e695c8d9f0a4862ba96f09471d9e00->enter($__internal_9d89ed39cea624e575d631ab26cc04d428e695c8d9f0a4862ba96f09471d9e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Result:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d89ed39cea624e575d631ab26cc04d428e695c8d9f0a4862ba96f09471d9e00->leave($__internal_9d89ed39cea624e575d631ab26cc04d428e695c8d9f0a4862ba96f09471d9e00_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_dc2d04f2f1ed496d83704e3a61809474063c2c024f54baf8289cb6fb55a6bc2e = $this->env->getExtension("native_profiler");
        $__internal_dc2d04f2f1ed496d83704e3a61809474063c2c024f54baf8289cb6fb55a6bc2e->enter($__internal_dc2d04f2f1ed496d83704e3a61809474063c2c024f54baf8289cb6fb55a6bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        
        $__internal_dc2d04f2f1ed496d83704e3a61809474063c2c024f54baf8289cb6fb55a6bc2e->leave($__internal_dc2d04f2f1ed496d83704e3a61809474063c2c024f54baf8289cb6fb55a6bc2e_prof);

    }

    // line 6
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_57d8c7211ef9ab1657e711409b6f267e0f7548ab0985fe3781ad31de796762f5 = $this->env->getExtension("native_profiler");
        $__internal_57d8c7211ef9ab1657e711409b6f267e0f7548ab0985fe3781ad31de796762f5->enter($__internal_57d8c7211ef9ab1657e711409b6f267e0f7548ab0985fe3781ad31de796762f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        
        $__internal_57d8c7211ef9ab1657e711409b6f267e0f7548ab0985fe3781ad31de796762f5->leave($__internal_57d8c7211ef9ab1657e711409b6f267e0f7548ab0985fe3781ad31de796762f5_prof);

    }

    // line 7
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_10aed932d45a23e0c415a8ec4cf4807cff8ac26dc7b4d780d17d8aa99a0bbf6c = $this->env->getExtension("native_profiler");
        $__internal_10aed932d45a23e0c415a8ec4cf4807cff8ac26dc7b4d780d17d8aa99a0bbf6c->enter($__internal_10aed932d45a23e0c415a8ec4cf4807cff8ac26dc7b4d780d17d8aa99a0bbf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array())))), "html", null, true);
        
        $__internal_10aed932d45a23e0c415a8ec4cf4807cff8ac26dc7b4d780d17d8aa99a0bbf6c->leave($__internal_10aed932d45a23e0c415a8ec4cf4807cff8ac26dc7b4d780d17d8aa99a0bbf6c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4093ca1853b4c1a263a958c6a6991d483be13b0bf4e9e3a62e41229f168bfa60 = $this->env->getExtension("native_profiler");
        $__internal_4093ca1853b4c1a263a958c6a6991d483be13b0bf4e9e3a62e41229f168bfa60->enter($__internal_4093ca1853b4c1a263a958c6a6991d483be13b0bf4e9e3a62e41229f168bfa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Result:show.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"col-md-12\">...............................................</div>
    <h2 class=\"section-heading\">Quiz result for \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        echo "\"</h2>

    <table class=\"table table-bordered\">
    <thead>
   
    <tr><th>Question</th><th>Your answer</th><th>Correct answer</th><th>isCorrect</th></tr>
    </thead>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
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
        
        $__internal_4093ca1853b4c1a263a958c6a6991d483be13b0bf4e9e3a62e41229f168bfa60->leave($__internal_4093ca1853b4c1a263a958c6a6991d483be13b0bf4e9e3a62e41229f168bfa60_prof);

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
        return array (  136 => 28,  122 => 24,  118 => 23,  114 => 22,  110 => 21,  102 => 20,  96 => 19,  85 => 11,  82 => 10,  79 => 9,  73 => 8,  61 => 7,  49 => 6,  37 => 5,  11 => 2,);
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
