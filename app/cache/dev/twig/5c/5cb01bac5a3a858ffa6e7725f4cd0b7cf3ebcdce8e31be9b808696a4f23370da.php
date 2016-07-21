<?php

/* :result:new.html.twig */
class __TwigTemplate_f5ffdea87d6e527ccee62eadedfc0589e4cd49fcbfadd952e83f4da2ca244547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:new.html.twig", 1);
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
        $__internal_f1a22fbe6426a83ff131b70ea6468b76c61c7dcb4b41d62d9285dabbbc4f02bf = $this->env->getExtension("native_profiler");
        $__internal_f1a22fbe6426a83ff131b70ea6468b76c61c7dcb4b41d62d9285dabbbc4f02bf->enter($__internal_f1a22fbe6426a83ff131b70ea6468b76c61c7dcb4b41d62d9285dabbbc4f02bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a22fbe6426a83ff131b70ea6468b76c61c7dcb4b41d62d9285dabbbc4f02bf->leave($__internal_f1a22fbe6426a83ff131b70ea6468b76c61c7dcb4b41d62d9285dabbbc4f02bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44104b0e567357a66997ad0caff84d938b30e1f5c9e3f9629967ded9310b17c2 = $this->env->getExtension("native_profiler");
        $__internal_44104b0e567357a66997ad0caff84d938b30e1f5c9e3f9629967ded9310b17c2->enter($__internal_44104b0e567357a66997ad0caff84d938b30e1f5c9e3f9629967ded9310b17c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Result creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("result_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_44104b0e567357a66997ad0caff84d938b30e1f5c9e3f9629967ded9310b17c2->leave($__internal_44104b0e567357a66997ad0caff84d938b30e1f5c9e3f9629967ded9310b17c2_prof);

    }

    public function getTemplateName()
    {
        return ":result:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Result creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('result_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
