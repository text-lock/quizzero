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
        $__internal_ad472be572a6e287e95ce880f5c29121482d7428c9a21d7333ff71b09e38c8d8 = $this->env->getExtension("native_profiler");
        $__internal_ad472be572a6e287e95ce880f5c29121482d7428c9a21d7333ff71b09e38c8d8->enter($__internal_ad472be572a6e287e95ce880f5c29121482d7428c9a21d7333ff71b09e38c8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad472be572a6e287e95ce880f5c29121482d7428c9a21d7333ff71b09e38c8d8->leave($__internal_ad472be572a6e287e95ce880f5c29121482d7428c9a21d7333ff71b09e38c8d8_prof);

    }

    // line 4
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_6df8a5ac26c8404e02fb9b545998764a78d6511251334f65c8e7afa321880cc9 = $this->env->getExtension("native_profiler");
        $__internal_6df8a5ac26c8404e02fb9b545998764a78d6511251334f65c8e7afa321880cc9->enter($__internal_6df8a5ac26c8404e02fb9b545998764a78d6511251334f65c8e7afa321880cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
        
        $__internal_6df8a5ac26c8404e02fb9b545998764a78d6511251334f65c8e7afa321880cc9->leave($__internal_6df8a5ac26c8404e02fb9b545998764a78d6511251334f65c8e7afa321880cc9_prof);

    }

    // line 5
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_6ae2b55f306ef223fbfb24d031b5920a69627af284e9ad9d20c35a3dffd502f9 = $this->env->getExtension("native_profiler");
        $__internal_6ae2b55f306ef223fbfb24d031b5920a69627af284e9ad9d20c35a3dffd502f9->enter($__internal_6ae2b55f306ef223fbfb24d031b5920a69627af284e9ad9d20c35a3dffd502f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "body", array()), "html", null, true);
        
        $__internal_6ae2b55f306ef223fbfb24d031b5920a69627af284e9ad9d20c35a3dffd502f9->leave($__internal_6ae2b55f306ef223fbfb24d031b5920a69627af284e9ad9d20c35a3dffd502f9_prof);

    }

    // line 6
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_01b7cd85eb222e9bd5339486f1ef59a9b89ffd5c5a7c05b697a6fbf262156b48 = $this->env->getExtension("native_profiler");
        $__internal_01b7cd85eb222e9bd5339486f1ef59a9b89ffd5c5a7c05b697a6fbf262156b48->enter($__internal_01b7cd85eb222e9bd5339486f1ef59a9b89ffd5c5a7c05b697a6fbf262156b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

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
        
        $__internal_01b7cd85eb222e9bd5339486f1ef59a9b89ffd5c5a7c05b697a6fbf262156b48->leave($__internal_01b7cd85eb222e9bd5339486f1ef59a9b89ffd5c5a7c05b697a6fbf262156b48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a2f96fc26b4f0e53e9ae0ee7398085836c339e390ba71e99354db936e9efe7 = $this->env->getExtension("native_profiler");
        $__internal_c4a2f96fc26b4f0e53e9ae0ee7398085836c339e390ba71e99354db936e9efe7->enter($__internal_c4a2f96fc26b4f0e53e9ae0ee7398085836c339e390ba71e99354db936e9efe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h2 class=\"section-heading\">Quiz questions:</h2>
        
                
            ";
        // line 14
        $this->loadTemplate("QuizzeroQuizBundle:Question:index.html.twig", "QuizzeroQuizBundle:Quiz:show.html.twig", 14)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 15
        echo "    


    
    
   
";
        
        $__internal_c4a2f96fc26b4f0e53e9ae0ee7398085836c339e390ba71e99354db936e9efe7->leave($__internal_c4a2f96fc26b4f0e53e9ae0ee7398085836c339e390ba71e99354db936e9efe7_prof);

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
