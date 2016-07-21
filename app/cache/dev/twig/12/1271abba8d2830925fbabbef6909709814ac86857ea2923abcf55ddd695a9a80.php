<?php

/* :question:show.html.twig */
class __TwigTemplate_e9edec5b443dd2ace3dd07aa813aaf2fc24ec1419ffd9aed51137ddde389bb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":question:show.html.twig", 1);
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
        $__internal_3c911efbb69100e19dce84fc926c8af7681a2934985058111e2ec431732420a8 = $this->env->getExtension("native_profiler");
        $__internal_3c911efbb69100e19dce84fc926c8af7681a2934985058111e2ec431732420a8->enter($__internal_3c911efbb69100e19dce84fc926c8af7681a2934985058111e2ec431732420a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":question:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c911efbb69100e19dce84fc926c8af7681a2934985058111e2ec431732420a8->leave($__internal_3c911efbb69100e19dce84fc926c8af7681a2934985058111e2ec431732420a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b62f7a0174694901d645eceb9f9b7fe5fa69f4b300e4a9fa4200eb3032ae8eeb = $this->env->getExtension("native_profiler");
        $__internal_b62f7a0174694901d645eceb9f9b7fe5fa69f4b300e4a9fa4200eb3032ae8eeb->enter($__internal_b62f7a0174694901d645eceb9f9b7fe5fa69f4b300e4a9fa4200eb3032ae8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Question</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "body", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correct</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "correct", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Variates</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "variates", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("questionlink_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_edit", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b62f7a0174694901d645eceb9f9b7fe5fa69f4b300e4a9fa4200eb3032ae8eeb->leave($__internal_b62f7a0174694901d645eceb9f9b7fe5fa69f4b300e4a9fa4200eb3032ae8eeb_prof);

    }

    public function getTemplateName()
    {
        return ":question:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  123 => 51,  117 => 48,  111 => 45,  99 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Question</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ question.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ question.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Body</th>*/
/*                 <td>{{ question.body }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Image</th>*/
/*                 <td>{{ question.image }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correct</th>*/
/*                 <td>{{ question.correct }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Variates</th>*/
/*                 <td>{{ question.variates }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{% if question.createdat %}{{ question.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated_at</th>*/
/*                 <td>{% if question.updatedat %}{{ question.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('questionlink_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('questionlink_edit', { 'id': question.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
