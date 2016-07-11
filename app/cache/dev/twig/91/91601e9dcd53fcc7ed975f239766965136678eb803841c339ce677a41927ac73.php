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
        $__internal_7f2bce982261120b64b4e76f08f037e2181409f1535a1e083cca3d8831104f18 = $this->env->getExtension("native_profiler");
        $__internal_7f2bce982261120b64b4e76f08f037e2181409f1535a1e083cca3d8831104f18->enter($__internal_7f2bce982261120b64b4e76f08f037e2181409f1535a1e083cca3d8831104f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f2bce982261120b64b4e76f08f037e2181409f1535a1e083cca3d8831104f18->leave($__internal_7f2bce982261120b64b4e76f08f037e2181409f1535a1e083cca3d8831104f18_prof);

    }

    // line 4
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_97ddf3b5b6b19bef2e213476c773e79e7826d5ef8aedaf7bd22643f5cdb1cac6 = $this->env->getExtension("native_profiler");
        $__internal_97ddf3b5b6b19bef2e213476c773e79e7826d5ef8aedaf7bd22643f5cdb1cac6->enter($__internal_97ddf3b5b6b19bef2e213476c773e79e7826d5ef8aedaf7bd22643f5cdb1cac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        
        $__internal_97ddf3b5b6b19bef2e213476c773e79e7826d5ef8aedaf7bd22643f5cdb1cac6->leave($__internal_97ddf3b5b6b19bef2e213476c773e79e7826d5ef8aedaf7bd22643f5cdb1cac6_prof);

    }

    // line 5
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_20d2eb1a38bbc259c7fbb28824a726989f7c04d0473e507f432d466bc7951e6e = $this->env->getExtension("native_profiler");
        $__internal_20d2eb1a38bbc259c7fbb28824a726989f7c04d0473e507f432d466bc7951e6e->enter($__internal_20d2eb1a38bbc259c7fbb28824a726989f7c04d0473e507f432d466bc7951e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        
        $__internal_20d2eb1a38bbc259c7fbb28824a726989f7c04d0473e507f432d466bc7951e6e->leave($__internal_20d2eb1a38bbc259c7fbb28824a726989f7c04d0473e507f432d466bc7951e6e_prof);

    }

    // line 6
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_0b284deb42148e895c04deb27f1f8895dfeb2200d2950ce4ec1880788301082c = $this->env->getExtension("native_profiler");
        $__internal_0b284deb42148e895c04deb27f1f8895dfeb2200d2950ce4ec1880788301082c->enter($__internal_0b284deb42148e895c04deb27f1f8895dfeb2200d2950ce4ec1880788301082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

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
        
        $__internal_0b284deb42148e895c04deb27f1f8895dfeb2200d2950ce4ec1880788301082c->leave($__internal_0b284deb42148e895c04deb27f1f8895dfeb2200d2950ce4ec1880788301082c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1df5c329be4374d071af789e9fb7063b891e05d410417499fd794b443e019c = $this->env->getExtension("native_profiler");
        $__internal_6b1df5c329be4374d071af789e9fb7063b891e05d410417499fd794b443e019c->enter($__internal_6b1df5c329be4374d071af789e9fb7063b891e05d410417499fd794b443e019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h2 class=\"section-heading\">Quiz questions:</h2>
        
                
            ";
        // line 14
        $this->loadTemplate("QuizzeroQuizBundle:Question:index.html.twig", "QuizzeroQuizBundle:Quiz:show.html.twig", 14)->display(array_merge($context, array("questions" => (isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")))));
        // line 15
        echo "    


    
    
   
";
        
        $__internal_6b1df5c329be4374d071af789e9fb7063b891e05d410417499fd794b443e019c->leave($__internal_6b1df5c329be4374d071af789e9fb7063b891e05d410417499fd794b443e019c_prof);

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
/*             {% include 'QuizzeroQuizBundle:Question:index.html.twig' with { 'questions': questions } %}*/
/*     */
/* */
/* */
/*     */
/*     */
/*    */
/* {% endblock %}*/
