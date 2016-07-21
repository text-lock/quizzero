<?php

/* QuizzeroQuizBundle:Question:index.html.twig */
class __TwigTemplate_aef8a0fe26af31340a8f2c1af8deb5581a14835a70a40ba7e97812697e78ffad extends Twig_Template
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
        $__internal_b153231ca780ccb403ddbe4ca91edee28e6350a75f40792b93182bcfd8ce78f7 = $this->env->getExtension("native_profiler");
        $__internal_b153231ca780ccb403ddbe4ca91edee28e6350a75f40792b93182bcfd8ce78f7->enter($__internal_b153231ca780ccb403ddbe4ca91edee28e6350a75f40792b93182bcfd8ce78f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Question:index.html.twig"));

        // line 2
        echo "


";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 8
            echo "        
        <blockquote>
            ";
            // line 10
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "vars", array()), "data", array()), "question", array()), "image", array())) {
                // line 11
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload/", 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "vars", array()), "data", array()), "question", array()), "image", array())))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
                echo " image not found\" class=\"question_img\" />
            ";
            }
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "vars", array()), "data", array()), "question", array()), "body", array()), "html", null, true);
            echo "
            
        </blockquote>
        <article class=\"question ";
            // line 16
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "vars", array()), "data", array()), "question", array()), "id", array()), "html", null, true);
            echo "\"> 
           
                ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["result"], "answer", array()), 'row');
            echo "
           
            <hr>
        </article>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


</p>";
        
        $__internal_b153231ca780ccb403ddbe4ca91edee28e6350a75f40792b93182bcfd8ce78f7->leave($__internal_b153231ca780ccb403ddbe4ca91edee28e6350a75f40792b93182bcfd8ce78f7_prof);

    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Question:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  77 => 18,  70 => 16,  63 => 13,  55 => 11,  53 => 10,  49 => 8,  32 => 7,  27 => 5,  22 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Question/index.html.twig #}*/
/* */
/* */
/* */
/* {{ form_start(form) }}*/
/* */
/*     {% for result in form.results %}*/
/*         */
/*         <blockquote>*/
/*             {% if result.vars.data.question.image %}*/
/*                 <img src="{{ asset(['img/upload/', result.vars.data.question.image]|join) }}" alt="{{ quiz.title }} image not found" class="question_img" />*/
/*             {% endif %}*/
/*             {{ result.vars.data.question.body }}*/
/*             */
/*         </blockquote>*/
/*         <article class="question {{ cycle(['odd', 'even'], loop.index0) }}" id="question-{{ result.vars.data.question.id }}"> */
/*            */
/*                 {{ form_row(result.answer) }}*/
/*            */
/*             <hr>*/
/*         </article>*/
/*     {% endfor %}*/
/* {{ form_end(form) }}*/
/* */
/* */
/* </p>*/
