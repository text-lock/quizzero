<?php

/* :question:edit.html.twig */
class __TwigTemplate_277a17ed3fd848c743e5e756262ad651b5f48e65323b68c16cc8a3f0205ffa23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":question:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'question_form' => array($this, 'block_question_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7a7f21f79c204f3ee230d72b791a711b72e6eb840214f82544a8155d472a32 = $this->env->getExtension("native_profiler");
        $__internal_8e7a7f21f79c204f3ee230d72b791a711b72e6eb840214f82544a8155d472a32->enter($__internal_8e7a7f21f79c204f3ee230d72b791a711b72e6eb840214f82544a8155d472a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":question:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7a7f21f79c204f3ee230d72b791a711b72e6eb840214f82544a8155d472a32->leave($__internal_8e7a7f21f79c204f3ee230d72b791a711b72e6eb840214f82544a8155d472a32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fe1cf961cfc907bdc64f0f8d7baba3017d9f8593dd86d9cd5d9063324f1b8ca = $this->env->getExtension("native_profiler");
        $__internal_8fe1cf961cfc907bdc64f0f8d7baba3017d9f8593dd86d9cd5d9063324f1b8ca->enter($__internal_8fe1cf961cfc907bdc64f0f8d7baba3017d9f8593dd86d9cd5d9063324f1b8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Question edit</h1>
    ";
        // line 5
        $this->displayBlock('question_form', $context, $blocks);
        // line 12
        echo "    
";
        
        $__internal_8fe1cf961cfc907bdc64f0f8d7baba3017d9f8593dd86d9cd5d9063324f1b8ca->leave($__internal_8fe1cf961cfc907bdc64f0f8d7baba3017d9f8593dd86d9cd5d9063324f1b8ca_prof);

    }

    // line 5
    public function block_question_form($context, array $blocks = array())
    {
        $__internal_b075f1ae772c672a429e4e60fcc4d5a0b02141eef72310f901f7f79e59c85447 = $this->env->getExtension("native_profiler");
        $__internal_b075f1ae772c672a429e4e60fcc4d5a0b02141eef72310f901f7f79e59c85447->enter($__internal_b075f1ae772c672a429e4e60fcc4d5a0b02141eef72310f901f7f79e59c85447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "question_form"));

        // line 6
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Edit\" />
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'form_end');
        echo "

    ";
        
        $__internal_b075f1ae772c672a429e4e60fcc4d5a0b02141eef72310f901f7f79e59c85447->leave($__internal_b075f1ae772c672a429e4e60fcc4d5a0b02141eef72310f901f7f79e59c85447_prof);

    }

    public function getTemplateName()
    {
        return ":question:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  65 => 7,  60 => 6,  54 => 5,  46 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Question edit</h1>*/
/*     {% block question_form %}*/
/*         {{ form_start(question_edit_form) }}*/
/*             {{ form_widget(question_edit_form) }}*/
/*             <input type="submit" value="Edit" />*/
/*         {{ form_end(question_edit_form) }}*/
/* */
/*     {% endblock %}*/
/*     */
/* {% endblock %}*/
/* */
