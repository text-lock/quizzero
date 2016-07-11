<?php

/* QuizzeroQuizBundle:Page:index.html.twig */
class __TwigTemplate_23fdb65340333ff95881455ffeae8fee81467902643e439eec05ee74151d0e72 extends Twig_Template
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
        $__internal_87f054879940a0cfe5ae357267cec63191d6b84504ba250aade7308e62cd7cef = $this->env->getExtension("native_profiler");
        $__internal_87f054879940a0cfe5ae357267cec63191d6b84504ba250aade7308e62cd7cef->enter($__internal_87f054879940a0cfe5ae357267cec63191d6b84504ba250aade7308e62cd7cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f054879940a0cfe5ae357267cec63191d6b84504ba250aade7308e62cd7cef->leave($__internal_87f054879940a0cfe5ae357267cec63191d6b84504ba250aade7308e62cd7cef_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cfa7712aea90a7e92c75d4d53256614328bfb8457d48dbd995daca947b7fdef = $this->env->getExtension("native_profiler");
        $__internal_5cfa7712aea90a7e92c75d4d53256614328bfb8457d48dbd995daca947b7fdef->enter($__internal_5cfa7712aea90a7e92c75d4d53256614328bfb8457d48dbd995daca947b7fdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) ? $context["quizzes"] : $this->getContext($context, "quizzes")));
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
        
        $__internal_5cfa7712aea90a7e92c75d4d53256614328bfb8457d48dbd995daca947b7fdef->leave($__internal_5cfa7712aea90a7e92c75d4d53256614328bfb8457d48dbd995daca947b7fdef_prof);

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
        return array (  93 => 30,  82 => 24,  74 => 19,  68 => 16,  63 => 14,  59 => 12,  53 => 10,  51 => 9,  46 => 6,  40 => 5,  34 => 4,  11 => 2,);
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
