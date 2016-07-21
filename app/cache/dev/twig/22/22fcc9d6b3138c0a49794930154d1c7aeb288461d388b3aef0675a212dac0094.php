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
        $__internal_b24ed81c86e96f878c4cbc23ebdcbbb7b70a42e56bd29f5f76ed29a765c207ed = $this->env->getExtension("native_profiler");
        $__internal_b24ed81c86e96f878c4cbc23ebdcbbb7b70a42e56bd29f5f76ed29a765c207ed->enter($__internal_b24ed81c86e96f878c4cbc23ebdcbbb7b70a42e56bd29f5f76ed29a765c207ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Result:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24ed81c86e96f878c4cbc23ebdcbbb7b70a42e56bd29f5f76ed29a765c207ed->leave($__internal_b24ed81c86e96f878c4cbc23ebdcbbb7b70a42e56bd29f5f76ed29a765c207ed_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_d0f1207d80ceb672dbd2ce6f0b5c5b3a0836713767e2e3d4edc6288d1bc58202 = $this->env->getExtension("native_profiler");
        $__internal_d0f1207d80ceb672dbd2ce6f0b5c5b3a0836713767e2e3d4edc6288d1bc58202->enter($__internal_d0f1207d80ceb672dbd2ce6f0b5c5b3a0836713767e2e3d4edc6288d1bc58202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        
        $__internal_d0f1207d80ceb672dbd2ce6f0b5c5b3a0836713767e2e3d4edc6288d1bc58202->leave($__internal_d0f1207d80ceb672dbd2ce6f0b5c5b3a0836713767e2e3d4edc6288d1bc58202_prof);

    }

    // line 6
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_7e2e00579f91d0e89da1fb134ecaf3da33738e7ee723f6e64fd84abaf6e0f707 = $this->env->getExtension("native_profiler");
        $__internal_7e2e00579f91d0e89da1fb134ecaf3da33738e7ee723f6e64fd84abaf6e0f707->enter($__internal_7e2e00579f91d0e89da1fb134ecaf3da33738e7ee723f6e64fd84abaf6e0f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        
        $__internal_7e2e00579f91d0e89da1fb134ecaf3da33738e7ee723f6e64fd84abaf6e0f707->leave($__internal_7e2e00579f91d0e89da1fb134ecaf3da33738e7ee723f6e64fd84abaf6e0f707_prof);

    }

    // line 7
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_c30a157d8da9e1338f7befab5cfd2c8ca5a9ef0fa8f901edc2cc3ae5f2826403 = $this->env->getExtension("native_profiler");
        $__internal_c30a157d8da9e1338f7befab5cfd2c8ca5a9ef0fa8f901edc2cc3ae5f2826403->enter($__internal_c30a157d8da9e1338f7befab5cfd2c8ca5a9ef0fa8f901edc2cc3ae5f2826403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array())))), "html", null, true);
        
        $__internal_c30a157d8da9e1338f7befab5cfd2c8ca5a9ef0fa8f901edc2cc3ae5f2826403->leave($__internal_c30a157d8da9e1338f7befab5cfd2c8ca5a9ef0fa8f901edc2cc3ae5f2826403_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bacaf05221f3751aa2879aefc651eeb9149fe57c0c0653b229e0d85dd326811 = $this->env->getExtension("native_profiler");
        $__internal_5bacaf05221f3751aa2879aefc651eeb9149fe57c0c0653b229e0d85dd326811->enter($__internal_5bacaf05221f3751aa2879aefc651eeb9149fe57c0c0653b229e0d85dd326811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bacaf05221f3751aa2879aefc651eeb9149fe57c0c0653b229e0d85dd326811->leave($__internal_5bacaf05221f3751aa2879aefc651eeb9149fe57c0c0653b229e0d85dd326811_prof);

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
