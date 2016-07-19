<?php

/* :result:show.html.twig */
class __TwigTemplate_34d1756a1e1df4e9904bf11dd7586341de88312c59e0cbdb064bb791088e5a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:show.html.twig", 1);
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
        $__internal_c101ad56369247baf7acde1b8f0cc4491a13ce42039afb4cb2e70e8e253db99f = $this->env->getExtension("native_profiler");
        $__internal_c101ad56369247baf7acde1b8f0cc4491a13ce42039afb4cb2e70e8e253db99f->enter($__internal_c101ad56369247baf7acde1b8f0cc4491a13ce42039afb4cb2e70e8e253db99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c101ad56369247baf7acde1b8f0cc4491a13ce42039afb4cb2e70e8e253db99f->leave($__internal_c101ad56369247baf7acde1b8f0cc4491a13ce42039afb4cb2e70e8e253db99f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58871c624026f5fe2bafc9c305229c7a096d68465de70600881236defe0fb23 = $this->env->getExtension("native_profiler");
        $__internal_b58871c624026f5fe2bafc9c305229c7a096d68465de70600881236defe0fb23->enter($__internal_b58871c624026f5fe2bafc9c305229c7a096d68465de70600881236defe0fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quiz_session</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "quizsession", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Answer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "answer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_correct</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "iscorrect", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "createdat", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("result_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("result_edit", array("id" => $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b58871c624026f5fe2bafc9c305229c7a096d68465de70600881236defe0fb23->leave($__internal_b58871c624026f5fe2bafc9c305229c7a096d68465de70600881236defe0fb23_prof);

    }

    public function getTemplateName()
    {
        return ":result:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  104 => 39,  98 => 36,  92 => 33,  80 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ result.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Quiz_session</th>*/
/*                 <td>{{ result.quizsession }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Answer</th>*/
/*                 <td>{{ result.answer }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_correct</th>*/
/*                 <td>{% if result.iscorrect %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{% if result.createdat %}{{ result.createdat|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('result_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('result_edit', { 'id': result.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
