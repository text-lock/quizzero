<?php

/* QuizzeroQuizBundle:Quiz:admin_edit.html.twig */
class __TwigTemplate_3f518fe88b1a8e28021c64c1a02b2eae297cf151a0a35433006600711bda724f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Quiz edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : null), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["quiz_edit_form"]) ? $context["quiz_edit_form"] : null), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("quizlink_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            Delete    
        </li>
    </ul>
    <h3>Quiz questions: </h3>
    <button class=\"toogle_form\"> Add new question</button>
    <div class=\"slide form\">
        ";
        // line 22
        $this->loadTemplate("QuizzeroQuizBundle:Question:admin_edit.html.twig", "QuizzeroQuizBundle:Quiz:admin_edit.html.twig", 22)->display(array_merge($context, array("question_edit_form" => (isset($context["question_edit_form"]) ? $context["question_edit_form"] : null))));
        // line 23
        echo "    </div>
    

    

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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 38
            echo "            <tr>
              
                
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "body", array()), "html", null, true);
            echo "</td>
                

                <td>";
            // line 44
            if ($this->getAttribute($context["question"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "/";
            if ($this->getAttribute($context["question"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                      
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                          <li>
                            delete
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>


    



";
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
        return array (  125 => 58,  110 => 49,  96 => 44,  90 => 41,  85 => 38,  81 => 37,  65 => 23,  63 => 22,  51 => 13,  44 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizzeroQuizBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Quiz edit</h1>*/
/* */
/*     {{ form_start(quiz_edit_form) }}*/
/*         {{ form_widget(quiz_edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(quiz_edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quizlink_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             Delete    */
/*         </li>*/
/*     </ul>*/
/*     <h3>Quiz questions: </h3>*/
/*     <button class="toogle_form"> Add new question</button>*/
/*     <div class="slide form">*/
/*         {% include 'QuizzeroQuizBundle:Question:admin_edit.html.twig' with { 'question_edit_form': question_edit_form } %}*/
/*     </div>*/
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
/*                     <ul>*/
/*                       */
/*                         <li>*/
/*                             <a href="{{ path('questionlink_edit', { 'id': question.id }) }}">edit</a>*/
/*                         </li>*/
/*                           <li>*/
/*                             delete*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/*     */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
