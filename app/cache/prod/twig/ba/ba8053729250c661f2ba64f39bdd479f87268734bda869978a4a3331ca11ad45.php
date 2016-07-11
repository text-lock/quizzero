<?php

/* :question:edit.html.twig */
class __TwigTemplate_488cf2e9aa59ccf16372f9dfd2d4dee834f67b48c36a629231f7b850f9bfb658 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Question edit</h1>
    ";
        // line 5
        $this->displayBlock('question_form', $context, $blocks);
        // line 12
        echo "    
";
    }

    // line 5
    public function block_question_form($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_start');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'widget');
        echo "
            <input type=\"submit\" value=\"Edit\" />
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["question_edit_form"]) ? $context["question_edit_form"] : null), 'form_end');
        echo "

    ";
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
        return array (  55 => 9,  50 => 7,  45 => 6,  42 => 5,  37 => 12,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
