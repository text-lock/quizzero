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
        $__internal_5c36b631c818bb31d122bd47bdcb5f925f689d9686d968203a15981c5dbc7ebc = $this->env->getExtension("native_profiler");
        $__internal_5c36b631c818bb31d122bd47bdcb5f925f689d9686d968203a15981c5dbc7ebc->enter($__internal_5c36b631c818bb31d122bd47bdcb5f925f689d9686d968203a15981c5dbc7ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":question:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c36b631c818bb31d122bd47bdcb5f925f689d9686d968203a15981c5dbc7ebc->leave($__internal_5c36b631c818bb31d122bd47bdcb5f925f689d9686d968203a15981c5dbc7ebc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75b068d008ec22dfb8331748a8337fbaf0e4c8f40115870cdbf2f68ee8dbb73 = $this->env->getExtension("native_profiler");
        $__internal_c75b068d008ec22dfb8331748a8337fbaf0e4c8f40115870cdbf2f68ee8dbb73->enter($__internal_c75b068d008ec22dfb8331748a8337fbaf0e4c8f40115870cdbf2f68ee8dbb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Question edit</h1>
    ";
        // line 5
        $this->displayBlock('question_form', $context, $blocks);
        // line 12
        echo "    
";
        
        $__internal_c75b068d008ec22dfb8331748a8337fbaf0e4c8f40115870cdbf2f68ee8dbb73->leave($__internal_c75b068d008ec22dfb8331748a8337fbaf0e4c8f40115870cdbf2f68ee8dbb73_prof);

    }

    // line 5
    public function block_question_form($context, array $blocks = array())
    {
        $__internal_a6daea39bf61110fffb0bb2b8fc19c59ee9b80d187f0fb5765150676a2612d29 = $this->env->getExtension("native_profiler");
        $__internal_a6daea39bf61110fffb0bb2b8fc19c59ee9b80d187f0fb5765150676a2612d29->enter($__internal_a6daea39bf61110fffb0bb2b8fc19c59ee9b80d187f0fb5765150676a2612d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "question_form"));

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
        
        $__internal_a6daea39bf61110fffb0bb2b8fc19c59ee9b80d187f0fb5765150676a2612d29->leave($__internal_a6daea39bf61110fffb0bb2b8fc19c59ee9b80d187f0fb5765150676a2612d29_prof);

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
