<?php

/* QuizzeroQuizBundle:Quiz:admin_index.html.twig */
class __TwigTemplate_3a066bcf8e5dbbb7a7fd5a74e13ab2567d517613af1a64d75f7c44123fcc2cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "QuizzeroQuizBundle:Quiz:admin_index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "\t";
        $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "QuizzeroQuizBundle:Quiz:admin_index.html.twig", 4)->display($context);
        // line 5
        echo "\t<div class=\"col-md-12\">...............................................</div>
    <h1>Quiz list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                
                
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) ? $context["quizzes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quizlink_show", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "title", array()), "html", null, true);
            echo "</td>
                
                
                <td>";
            // line 27
            if ($this->getAttribute($context["quiz"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["quiz"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quiz"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quizlink_edit", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quizlink_delete", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                            
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("quizlink_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Quiz:admin_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  104 => 41,  91 => 34,  87 => 33,  77 => 28,  71 => 27,  65 => 24,  59 => 23,  56 => 22,  52 => 21,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/* 	<div class="col-md-12">...............................................</div>*/
/*     <h1>Quiz list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 */
/*                 */
/*                 <th>Created_at</th>*/
/*                 <th>Updated_at</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for quiz in quizzes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('quizlink_show', { 'id': quiz.id }) }}">{{ quiz.id }}</a></td>*/
/*                 <td>{{ quiz.title }}</td>*/
/*                 */
/*                 */
/*                 <td>{% if quiz.createdat %}{{ quiz.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if quiz.updatedat %}{{ quiz.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         */
/*                         <li>*/
/*                             <a href="{{ path('quizlink_edit', { 'id': quiz.id }) }}">edit</a>*/
/*                             <a href="{{ path('quizlink_delete', { 'id': quiz.id }) }}">delete</a>*/
/*                             */
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quizlink_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
