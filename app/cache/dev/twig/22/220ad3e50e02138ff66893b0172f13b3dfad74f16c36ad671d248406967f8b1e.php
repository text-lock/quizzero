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
        $__internal_46b188a7ea9335d239f1a7ff7448af2ac7c28ec58cb1b32faa69e5123cb1f65f = $this->env->getExtension("native_profiler");
        $__internal_46b188a7ea9335d239f1a7ff7448af2ac7c28ec58cb1b32faa69e5123cb1f65f->enter($__internal_46b188a7ea9335d239f1a7ff7448af2ac7c28ec58cb1b32faa69e5123cb1f65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b188a7ea9335d239f1a7ff7448af2ac7c28ec58cb1b32faa69e5123cb1f65f->leave($__internal_46b188a7ea9335d239f1a7ff7448af2ac7c28ec58cb1b32faa69e5123cb1f65f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c925b495418a720f47a7bdb6d9e26a83f762414c795f7d1194a16c7eaadce3e3 = $this->env->getExtension("native_profiler");
        $__internal_c925b495418a720f47a7bdb6d9e26a83f762414c795f7d1194a16c7eaadce3e3->enter($__internal_c925b495418a720f47a7bdb6d9e26a83f762414c795f7d1194a16c7eaadce3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c925b495418a720f47a7bdb6d9e26a83f762414c795f7d1194a16c7eaadce3e3->leave($__internal_c925b495418a720f47a7bdb6d9e26a83f762414c795f7d1194a16c7eaadce3e3_prof);

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
