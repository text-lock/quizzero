<?php

/* QuizzeroQuizBundle:Question:admin_form.html.twig */
class __TwigTemplate_a3540355d444271846270e75eb7c2ee975a8aaf5a91c6327f5daf44dbf4ffa0d extends Twig_Template
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
        $__internal_9fed4bb8beb40d5ccc8f69e686bfea51cf11139cd292688c430c4701eb0e49e5 = $this->env->getExtension("native_profiler");
        $__internal_9fed4bb8beb40d5ccc8f69e686bfea51cf11139cd292688c430c4701eb0e49e5->enter($__internal_9fed4bb8beb40d5ccc8f69e686bfea51cf11139cd292688c430c4701eb0e49e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Question:admin_form.html.twig"));

        // line 1
        $this->displayBlock('question_form', $context, $blocks);
        // line 23
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin_common.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_9fed4bb8beb40d5ccc8f69e686bfea51cf11139cd292688c430c4701eb0e49e5->leave($__internal_9fed4bb8beb40d5ccc8f69e686bfea51cf11139cd292688c430c4701eb0e49e5_prof);

    }

    // line 1
    public function block_question_form($context, array $blocks = array())
    {
        $__internal_b529c2387000fdf50602e6e939eb3acf6d976adf204504fedcd8c82df69535ac = $this->env->getExtension("native_profiler");
        $__internal_b529c2387000fdf50602e6e939eb3acf6d976adf204504fedcd8c82df69535ac->enter($__internal_b529c2387000fdf50602e6e939eb3acf6d976adf204504fedcd8c82df69535ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "question_form"));

        echo "<br><br>
<h2>Question for ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "quiz", array()), "html", null, true);
        echo " quiz</h2>
\t    ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'form_start');
        echo "
\t            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'widget');
        echo "
\t            ";
        // line 5
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "image", array())) {
            // line 6
            echo "\t\t            <h4> Attached image:</h4>
\t\t            <img src=\"/img/upload/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "image", array()), "html", null, true);
            echo "\" width = \"200\"><br>
\t\t            <input type=\"hidden\" name= \"old_image\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "image", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "image", array()), "html", null, true);
        echo "\" />
\t            <input type=\"submit\" value=\"Ok\" />
\t            
\t    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : $this->getContext($context, "question_edit_form")), 'form_end');
        echo "

";
        
        $__internal_b529c2387000fdf50602e6e939eb3acf6d976adf204504fedcd8c82df69535ac->leave($__internal_b529c2387000fdf50602e6e939eb3acf6d976adf204504fedcd8c82df69535ac_prof);

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
        return array (  83 => 20,  77 => 17,  68 => 10,  63 => 8,  59 => 7,  56 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  34 => 1,  25 => 23,  23 => 1,);
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
