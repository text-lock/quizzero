<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_03db1b787f7de41b04fa41ba5b9019f234babe87f0a6b2004939529d938eca0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96b14074e938aee4071fdf2b51d60b9faa81d377052b1678a53131f29cebee65 = $this->env->getExtension("native_profiler");
        $__internal_96b14074e938aee4071fdf2b51d60b9faa81d377052b1678a53131f29cebee65->enter($__internal_96b14074e938aee4071fdf2b51d60b9faa81d377052b1678a53131f29cebee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b14074e938aee4071fdf2b51d60b9faa81d377052b1678a53131f29cebee65->leave($__internal_96b14074e938aee4071fdf2b51d60b9faa81d377052b1678a53131f29cebee65_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a3d6ea2cfb709d4b35b0659f575c027f700df2c9d52e89defe032667d1f4547 = $this->env->getExtension("native_profiler");
        $__internal_0a3d6ea2cfb709d4b35b0659f575c027f700df2c9d52e89defe032667d1f4547->enter($__internal_0a3d6ea2cfb709d4b35b0659f575c027f700df2c9d52e89defe032667d1f4547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_0a3d6ea2cfb709d4b35b0659f575c027f700df2c9d52e89defe032667d1f4547->leave($__internal_0a3d6ea2cfb709d4b35b0659f575c027f700df2c9d52e89defe032667d1f4547_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
