<?php

/* QuizzeroQuizBundle:Page:index.html.twig */
class __TwigTemplate_0b1781036931e0af4fddc98c260191527a87e247f03caf2dbbff9b26a4b54f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("QuizzeroQuizBundle::layout.html.twig", "QuizzeroQuizBundle:Page:index.html.twig", 2);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) ? $context["quizzes"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 6
            echo "        <div class=\"post-preview\">

         <div class=\"col-md-2\">
         ";
            // line 9
            if ($this->getAttribute($context["quiz"], "image", array())) {
                // line 10
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload/", 1 => $this->getAttribute($context["quiz"], "image", array())))), "html", null, true);
                echo "\" width=\"100\" />
        ";
            }
            // line 12
            echo "        </div>
        <div class=\"col-md-10\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("QuizzeroQuizBundle_quiz_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">
                <h2 class=\"post-title\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "title", array()), "html", null, true);
            echo "
                </h2>
                <h3 class=\"post-subtitle\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "body", array(0 => 100), "method"), "html", null, true);
            echo "
                </h3>
            </a>
            <p class=\"post-meta\">
               
                Posted on ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "createdAt", array()), "l, F j, Y"), "html", null, true);
            echo "</p>
            </div>
        </div>
        
            
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <div class=\"post-preview\">
            <p>There are no quiz entries for Quizzero</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  73 => 24,  65 => 19,  59 => 16,  54 => 14,  50 => 12,  44 => 10,  42 => 9,  37 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for quiz in quizzes %}*/
/*         <div class="post-preview">*/
/* */
/*          <div class="col-md-2">*/
/*          {% if quiz.image %}*/
/*             <img src="{{ asset(['img/upload/', quiz.image]|join) }}" width="100" />*/
/*         {% endif %}*/
/*         </div>*/
/*         <div class="col-md-10">*/
/*             <a href="{{ path('QuizzeroQuizBundle_quiz_show', { 'id': quiz.id }) }}">*/
/*                 <h2 class="post-title">*/
/*                     {{ quiz.title }}*/
/*                 </h2>*/
/*                 <h3 class="post-subtitle">*/
/*                     {{ quiz.body(100) }}*/
/*                 </h3>*/
/*             </a>*/
/*             <p class="post-meta">*/
/*                */
/*                 Posted on {{ quiz.createdAt|date('l, F j, Y') }}</p>*/
/*             </div>*/
/*         </div>*/
/*         */
/*             */
/*     {% else %}*/
/*         <div class="post-preview">*/
/*             <p>There are no quiz entries for Quizzero</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
