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
        // line 23
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin_common.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 1
    public function block_question_form($context, array $blocks = array())
    {
        echo "<br><br>
<h2>Question for ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "quiz", array()), "html", null, true);
        echo " quiz</h2>
\t    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_start');
        echo "
\t            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'widget');
        echo "
\t            ";
        // line 5
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "image", array())) {
            // line 6
            echo "\t\t            <h4> Attached image:</h4>
\t\t            <img src=\"/img/upload/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "image", array()), "html", null, true);
            echo "\" width = \"200\"><br>
\t\t            <input type=\"hidden\" name= \"old_image\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "image", array()), "html", null, true);
            echo "\" />
\t\t        ";
        }
        // line 10
        echo "\t            <div class=\"variant_block\">
\t            <h3>Variants:</h3>
\t                <input id=\"question_variant\">
\t                <label id=\"ad_question_variant\">Add</label>
\t                <div id = \"question_variants\"></div>
\t            </div>

\t            <input type=\"hidden\" name= \"old_image\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "image", array()), "html", null, true);
        echo "\" />
\t            <input type=\"submit\" value=\"Ok\" />
\t            
\t    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Question:admin_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  68 => 17,  59 => 10,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  28 => 1,  22 => 23,  20 => 1,);
    }
}
/* {% block question_form %}<br><br>*/
/* <h2>Question for {{question.quiz}} quiz</h2>*/
/* 	    {{ form_start(question_edit_form) }}*/
/* 	            {{ form_widget(question_edit_form) }}*/
/* 	            {% if  question.image %}*/
/* 		            <h4> Attached image:</h4>*/
/* 		            <img src="/img/upload/{{ question.image }}" width = "200"><br>*/
/* 		            <input type="hidden" name= "old_image" value="{{ question.image }}" />*/
/* 		        {% endif %}*/
/* 	            <div class="variant_block">*/
/* 	            <h3>Variants:</h3>*/
/* 	                <input id="question_variant">*/
/* 	                <label id="ad_question_variant">Add</label>*/
/* 	                <div id = "question_variants"></div>*/
/* 	            </div>*/
/* */
/* 	            <input type="hidden" name= "old_image" value="{{ question.image }}" />*/
/* 	            <input type="submit" value="Ok" />*/
/* 	            */
/* 	    {{ form_end(question_edit_form) }}*/
/* */
/* {% endblock %}*/
/* <script src="{{ asset('js/admin_common.js') }}"></script>*/
