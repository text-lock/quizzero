<?php

/* QuizzeroQuizBundle:Quiz:show.html.twig */
class __TwigTemplate_1adbcdc039f1702f5bf9328c43e2e844a73041d4758a1deb3844bc0e554c2a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("QuizzeroQuizBundle::layout.html.twig", "QuizzeroQuizBundle:Quiz:show.html.twig", 2);
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
        $__internal_33b70a0ae48038166b45e0283a8ccfe0bfb42f4c1d3689899733f66e883c3b4a = $this->env->getExtension("native_profiler");
        $__internal_33b70a0ae48038166b45e0283a8ccfe0bfb42f4c1d3689899733f66e883c3b4a->enter($__internal_33b70a0ae48038166b45e0283a8ccfe0bfb42f4c1d3689899733f66e883c3b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b70a0ae48038166b45e0283a8ccfe0bfb42f4c1d3689899733f66e883c3b4a->leave($__internal_33b70a0ae48038166b45e0283a8ccfe0bfb42f4c1d3689899733f66e883c3b4a_prof);

    }

    // line 4
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_a1a40755aa1909bdbd0ed1338f1a414577ebc388720e27298245a941a08a88ce = $this->env->getExtension("native_profiler");
        $__internal_a1a40755aa1909bdbd0ed1338f1a414577ebc388720e27298245a941a08a88ce->enter($__internal_a1a40755aa1909bdbd0ed1338f1a414577ebc388720e27298245a941a08a88ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        
        $__internal_a1a40755aa1909bdbd0ed1338f1a414577ebc388720e27298245a941a08a88ce->leave($__internal_a1a40755aa1909bdbd0ed1338f1a414577ebc388720e27298245a941a08a88ce_prof);

    }

    // line 5
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_65e489cce5262c4c5cd2681aa9db19c979581863e13f577d31e2a402ae7e50b1 = $this->env->getExtension("native_profiler");
        $__internal_65e489cce5262c4c5cd2681aa9db19c979581863e13f577d31e2a402ae7e50b1->enter($__internal_65e489cce5262c4c5cd2681aa9db19c979581863e13f577d31e2a402ae7e50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        
        $__internal_65e489cce5262c4c5cd2681aa9db19c979581863e13f577d31e2a402ae7e50b1->leave($__internal_65e489cce5262c4c5cd2681aa9db19c979581863e13f577d31e2a402ae7e50b1_prof);

    }

    // line 6
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_434161e8616ef4fdf3783652e7e1e29b935d09fc9d62458e8f69bd947614c92c = $this->env->getExtension("native_profiler");
        $__internal_434161e8616ef4fdf3783652e7e1e29b935d09fc9d62458e8f69bd947614c92c->enter($__internal_434161e8616ef4fdf3783652e7e1e29b935d09fc9d62458e8f69bd947614c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

        if ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array())) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array())))), "html", null, true);
            echo "
\t";
        } else {
            // line 8
            echo "/img/home-bg.jpg";
        }
        
        $__internal_434161e8616ef4fdf3783652e7e1e29b935d09fc9d62458e8f69bd947614c92c->leave($__internal_434161e8616ef4fdf3783652e7e1e29b935d09fc9d62458e8f69bd947614c92c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a58e888c519636ff8083d09c52904bb061a356658c3cae8b57111e3c44a44444 = $this->env->getExtension("native_profiler");
        $__internal_a58e888c519636ff8083d09c52904bb061a356658c3cae8b57111e3c44a44444->enter($__internal_a58e888c519636ff8083d09c52904bb061a356658c3cae8b57111e3c44a44444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h2 class=\"section-heading\">Quiz questions:</h2>
        
                
            ";
        // line 14
        $this->loadTemplate("QuizzeroQuizBundle:Question:index.html.twig", "QuizzeroQuizBundle:Quiz:show.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 15
        echo "    


    
    
   
";
        
        $__internal_a58e888c519636ff8083d09c52904bb061a356658c3cae8b57111e3c44a44444->leave($__internal_a58e888c519636ff8083d09c52904bb061a356658c3cae8b57111e3c44a44444_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Quiz:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 15,  93 => 14,  88 => 11,  82 => 10,  74 => 8,  68 => 7,  61 => 6,  49 => 5,  37 => 4,  11 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resouces/views/Quiz/show.html.twig #}*/
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* {% block header_title %}{{ quiz.title }}{% endblock %}*/
/* {% block header_subtitle %}{{ quiz.body }}{% endblock %}*/
/* {% block header_image %}{% if quiz.image %}*/
/* 		{{ asset(['img/upload/', quiz.image]|join) }}*/
/* 	{% else %}/img/home-bg.jpg{% endif %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="section-heading">Quiz questions:</h2>*/
/*         */
/*                 */
/*             {% include 'QuizzeroQuizBundle:Question:index.html.twig' with { 'form': form } %}*/
/*     */
/* */
/* */
/*     */
/*     */
/*    */
/* {% endblock %}*/
