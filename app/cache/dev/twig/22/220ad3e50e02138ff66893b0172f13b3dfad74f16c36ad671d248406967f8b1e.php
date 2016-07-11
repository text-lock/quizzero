<?php

/* :result:index.html.twig */
class __TwigTemplate_dbf07d5dc221a3375b98fb58c4416c7b879d03792b75171b5445c5eaece17e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:index.html.twig", 1);
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
        $__internal_b80ecb59788552e640c6af7074873067d3a5af0d17c6b77b583592c728da6678 = $this->env->getExtension("native_profiler");
        $__internal_b80ecb59788552e640c6af7074873067d3a5af0d17c6b77b583592c728da6678->enter($__internal_b80ecb59788552e640c6af7074873067d3a5af0d17c6b77b583592c728da6678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80ecb59788552e640c6af7074873067d3a5af0d17c6b77b583592c728da6678->leave($__internal_b80ecb59788552e640c6af7074873067d3a5af0d17c6b77b583592c728da6678_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a17e738f27ff8aa6243979c3151db38e7ef8ed3cca908bff81ec566e6913486 = $this->env->getExtension("native_profiler");
        $__internal_0a17e738f27ff8aa6243979c3151db38e7ef8ed3cca908bff81ec566e6913486->enter($__internal_0a17e738f27ff8aa6243979c3151db38e7ef8ed3cca908bff81ec566e6913486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Quiz_session</th>
                <th>Answer</th>
                <th>Is_correct</th>
                <th>Created_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("result_show", array("id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "quizsession", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "answer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["result"], "iscorrect", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["result"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "createdat", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("result_show", array("id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("result_edit", array("id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("result_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0a17e738f27ff8aa6243979c3151db38e7ef8ed3cca908bff81ec566e6913486->leave($__internal_0a17e738f27ff8aa6243979c3151db38e7ef8ed3cca908bff81ec566e6913486_prof);

    }

    public function getTemplateName()
    {
        return ":result:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  112 => 37,  100 => 31,  94 => 28,  85 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Quiz_session</th>*/
/*                 <th>Answer</th>*/
/*                 <th>Is_correct</th>*/
/*                 <th>Created_at</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for result in results %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('result_show', { 'id': result.id }) }}">{{ result.id }}</a></td>*/
/*                 <td>{{ result.quizsession }}</td>*/
/*                 <td>{{ result.answer }}</td>*/
/*                 <td>{% if result.iscorrect %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if result.createdat %}{{ result.createdat|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('result_show', { 'id': result.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('result_edit', { 'id': result.id }) }}">edit</a>*/
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
/*             <a href="{{ path('result_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
