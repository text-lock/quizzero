<?php

/* QuizzeroQuizBundle:Question:admin_form.html.twig */
class __TwigTemplate_7522fe1ad292ae7025c419af16741b1e176f91c3e2da4f7985b856ca3869489e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'question_form' => array($this, 'block_question_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('question_form', $context, $blocks);
    }

    public function block_question_form($context, array $blocks = array())
    {
        // line 2
        echo "\t    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_start');
        echo "
\t            ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'widget');
        echo "
\t            <div class=\"variant_block\">
\t            <h3>Variants:</h3>
\t                <input id=\"question_variant\">
\t                <label id=\"ad_question_variant\">Add</label>
\t                <div id = \"question_variants\"></div>
\t            </div>
\t            <input type=\"submit\" value=\"Ok\" />
\t            
\t        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Question:admin_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  31 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block question_form %}*/
/* 	    {{ form_start(question_edit_form) }}*/
/* 	            {{ form_widget(question_edit_form) }}*/
/* 	            <div class="variant_block">*/
/* 	            <h3>Variants:</h3>*/
/* 	                <input id="question_variant">*/
/* 	                <label id="ad_question_variant">Add</label>*/
/* 	                <div id = "question_variants"></div>*/
/* 	            </div>*/
/* 	            <input type="submit" value="Ok" />*/
/* 	            */
/* 	        {{ form_end(question_edit_form) }}*/
/* */
/* {% endblock %}*/
