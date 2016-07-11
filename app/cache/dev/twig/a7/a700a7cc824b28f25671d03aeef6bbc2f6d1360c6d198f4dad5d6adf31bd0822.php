<?php

/* :result:edit.html.twig */
class __TwigTemplate_6571a91991365557a52cb37e9da797a03a5fe9a24b28c01cb75fde42b689bc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:edit.html.twig", 1);
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
        $__internal_05e719665932060d5308a41b41fe6b6395ce077fffdc1d655a72a149a46e1696 = $this->env->getExtension("native_profiler");
        $__internal_05e719665932060d5308a41b41fe6b6395ce077fffdc1d655a72a149a46e1696->enter($__internal_05e719665932060d5308a41b41fe6b6395ce077fffdc1d655a72a149a46e1696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05e719665932060d5308a41b41fe6b6395ce077fffdc1d655a72a149a46e1696->leave($__internal_05e719665932060d5308a41b41fe6b6395ce077fffdc1d655a72a149a46e1696_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb6ecf7052c2c16e1ffce9834e440e876dc21d85821b6b58b954c56f4e66742 = $this->env->getExtension("native_profiler");
        $__internal_8eb6ecf7052c2c16e1ffce9834e440e876dc21d85821b6b58b954c56f4e66742->enter($__internal_8eb6ecf7052c2c16e1ffce9834e440e876dc21d85821b6b58b954c56f4e66742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("result_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8eb6ecf7052c2c16e1ffce9834e440e876dc21d85821b6b58b954c56f4e66742->leave($__internal_8eb6ecf7052c2c16e1ffce9834e440e876dc21d85821b6b58b954c56f4e66742_prof);

    }

    public function getTemplateName()
    {
        return ":result:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('result_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
