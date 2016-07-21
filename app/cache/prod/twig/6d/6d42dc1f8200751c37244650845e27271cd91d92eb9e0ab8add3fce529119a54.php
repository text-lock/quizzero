<?php

/* QuizzeroQuizBundle:Quiz:show.html.twig */
class __TwigTemplate_9e46a1e8dcfd4c84137c7fdbc63b953057b69ff94d877cfffd42dd5519131c34 extends Twig_Template
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
        if ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "image", array())) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload/", 1 => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "image", array())))), "html", null, true);
            echo "
\t";
        } else {
            // line 8
            echo "/img/home-bg.jpg";
        }
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <h2 class=\"section-heading\">Quiz questions:</h2>
        
                
            ";
        // line 14
        $this->loadTemplate("QuizzeroQuizBundle:Question:index.html.twig", "QuizzeroQuizBundle:Quiz:show.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
        // line 15
        echo "    


    
    
   
";
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
        return array (  68 => 15,  66 => 14,  61 => 11,  58 => 10,  53 => 8,  47 => 7,  43 => 6,  37 => 5,  31 => 4,  11 => 2,);
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
