<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_3b407f4c9a0b9ba1bcfb602d84e105fc46b56c44722db4bc55256f8dd0a6a200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00635d7405240d1a87e4a3174347c573ce7232dd838f004d4ac7c00de939cf0b = $this->env->getExtension("native_profiler");
        $__internal_00635d7405240d1a87e4a3174347c573ce7232dd838f004d4ac7c00de939cf0b->enter($__internal_00635d7405240d1a87e4a3174347c573ce7232dd838f004d4ac7c00de939cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_00635d7405240d1a87e4a3174347c573ce7232dd838f004d4ac7c00de939cf0b->leave($__internal_00635d7405240d1a87e4a3174347c573ce7232dd838f004d4ac7c00de939cf0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
