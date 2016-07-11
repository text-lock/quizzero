<?php

/* question/index.html.twig */
class __TwigTemplate_6af21c102f8f8647383bc843501082da579c360751646ff17be3b033611f6d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "question/index.html.twig", 1);
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
        $__internal_f35ba3d26cc597b477c31051bd4375c6ffbab4160b33d8ab0c3ca74acf5b61ba = $this->env->getExtension("native_profiler");
        $__internal_f35ba3d26cc597b477c31051bd4375c6ffbab4160b33d8ab0c3ca74acf5b61ba->enter($__internal_f35ba3d26cc597b477c31051bd4375c6ffbab4160b33d8ab0c3ca74acf5b61ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35ba3d26cc597b477c31051bd4375c6ffbab4160b33d8ab0c3ca74acf5b61ba->leave($__internal_f35ba3d26cc597b477c31051bd4375c6ffbab4160b33d8ab0c3ca74acf5b61ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_880c20c03f7fa30abd05e55c78b0afe9abc086ec9ee3472f415ba2fbff62ab15 = $this->env->getExtension("native_profiler");
        $__internal_880c20c03f7fa30abd05e55c78b0afe9abc086ec9ee3472f415ba2fbff62ab15->enter($__internal_880c20c03f7fa30abd05e55c78b0afe9abc086ec9ee3472f415ba2fbff62ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Question list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Body</th>
                <th>Image</th>
                <th>Correct</th>
                <th>Variates</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_show", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "body", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "correct", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "variates", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["question"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["question"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_show", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("questionlink_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("questionlink_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_880c20c03f7fa30abd05e55c78b0afe9abc086ec9ee3472f415ba2fbff62ab15->leave($__internal_880c20c03f7fa30abd05e55c78b0afe9abc086ec9ee3472f415ba2fbff62ab15_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  98 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Question list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Body</th>*/
/*                 <th>Image</th>*/
/*                 <th>Correct</th>*/
/*                 <th>Variates</th>*/
/*                 <th>Created_at</th>*/
/*                 <th>Updated_at</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for question in questions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('questionlink_show', { 'id': question.id }) }}">{{ question.id }}</a></td>*/
/*                 <td>{{ question.type }}</td>*/
/*                 <td>{{ question.body }}</td>*/
/*                 <td>{{ question.image }}</td>*/
/*                 <td>{{ question.correct }}</td>*/
/*                 <td>{{ question.variates }}</td>*/
/*                 <td>{% if question.createdat %}{{ question.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if question.updatedat %}{{ question.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('questionlink_show', { 'id': question.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('questionlink_edit', { 'id': question.id }) }}">edit</a>*/
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
/*             <a href="{{ path('questionlink_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
