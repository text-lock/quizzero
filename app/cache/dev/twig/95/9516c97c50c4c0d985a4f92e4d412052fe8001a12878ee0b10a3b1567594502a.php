<?php

/* QuizzeroQuizBundle:Quiz:admin_edit.html.twig */
class __TwigTemplate_d8331710ff3d4c6bf633a4e239546737dae4325dcd1a321ffff565f3fb802681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizzeroQuizBundle::layout.html.twig", "QuizzeroQuizBundle:Quiz:admin_edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizzeroQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2393b574f24e5dcebff2cd6f05b311901c4f8ee707920f65d9c11e344a9c799 = $this->env->getExtension("native_profiler");
        $__internal_e2393b574f24e5dcebff2cd6f05b311901c4f8ee707920f65d9c11e344a9c799->enter($__internal_e2393b574f24e5dcebff2cd6f05b311901c4f8ee707920f65d9c11e344a9c799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Quiz:admin_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2393b574f24e5dcebff2cd6f05b311901c4f8ee707920f65d9c11e344a9c799->leave($__internal_e2393b574f24e5dcebff2cd6f05b311901c4f8ee707920f65d9c11e344a9c799_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a03cb53066032b89fd2e7e96753d8c5877c438e364fc272410946e8bcc2c447 = $this->env->getExtension("native_profiler");
        $__internal_8a03cb53066032b89fd2e7e96753d8c5877c438e364fc272410946e8bcc2c447->enter($__internal_8a03cb53066032b89fd2e7e96753d8c5877c438e364fc272410946e8bcc2c447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Quiz:admin_edit.html.twig", 5)->display($context);
        // line 6
        echo "\t<div class=\"col-md-12\">.........................</div>
    <h1>Quiz edit</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : $this->getContext($context, "quiz_edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : $this->getContext($context, "quiz_edit_form")), 'widget', array("attr" => array("novalidate" => "novalidate")));
        echo "
        
        ";
        // line 12
        if ($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array())) {
            // line 13
            echo "            <h4> Attached image:</h4>
            <img src=\"/img/upload/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array()), "html", null, true);
            echo "\" width = \"200\"><br>
            <input type=\"hidden\" name= \"old_image\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "image", array()), "html", null, true);
            echo "\" />
        ";
        }
        // line 17
        echo "        
        <input type=\"submit\" value=\"Save quiz\" />
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : $this->getContext($context, "quiz_edit_form")), 'form_end');
        echo "
    <h3>Quiz questions: </h3>
   
    

    

    <table class=\"table\">
        <thead>
            <tr>
                <th>Body</th>
                <th>Created/Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 36
            echo "            <tr>
              
                
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "body", array()), "html", null, true);
            echo "</td>
                

                <td>";
            // line 42
            if ($this->getAttribute($context["question"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "/";
            if ($this->getAttribute($context["question"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">edit</a> / 
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_delete", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>


    
 <center><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("questionlink_new");
        echo "\">Create new question</a></center>


";
        
        $__internal_8a03cb53066032b89fd2e7e96753d8c5877c438e364fc272410946e8bcc2c447->leave($__internal_8a03cb53066032b89fd2e7e96753d8c5877c438e364fc272410946e8bcc2c447_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Quiz:admin_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  134 => 49,  124 => 45,  120 => 44,  109 => 42,  103 => 39,  98 => 36,  94 => 35,  75 => 19,  71 => 17,  66 => 15,  62 => 14,  59 => 13,  57 => 12,  52 => 10,  48 => 9,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/* 	<div class="col-md-12">.........................</div>*/
/*     <h1>Quiz edit</h1>*/
/* */
/*     {{ form_start(quiz_edit_form) }}*/
/*         {{ form_widget(quiz_edit_form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*         */
/*         {% if  quiz.image %}*/
/*             <h4> Attached image:</h4>*/
/*             <img src="/img/upload/{{ quiz.image }}" width = "200"><br>*/
/*             <input type="hidden" name= "old_image" value="{{ quiz.image }}" />*/
/*         {% endif %}*/
/*         */
/*         <input type="submit" value="Save quiz" />*/
/*     {{ form_end(quiz_edit_form) }}*/
/*     <h3>Quiz questions: </h3>*/
/*    */
/*     */
/* */
/*     */
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Body</th>*/
/*                 <th>Created/Updated</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for question in questions %}*/
/*             <tr>*/
/*               */
/*                 */
/*                 <td>{{ question.body }}</td>*/
/*                 */
/* */
/*                 <td>{% if question.createdat %}{{ question.createdat|date('Y-m-d H:i:s') }}{% endif %}/{% if question.updatedat %}{{ question.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('questionlink_edit', { 'id': question.id }) }}">edit</a> / */
/*                     <a href="{{ path('questionlink_delete', { 'id': question.id }) }}">delete</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     */
/*  <center><a href="{{ path('questionlink_new') }}">Create new question</a></center>*/
/* */
/* */
/* {% endblock %}*/
/* */
