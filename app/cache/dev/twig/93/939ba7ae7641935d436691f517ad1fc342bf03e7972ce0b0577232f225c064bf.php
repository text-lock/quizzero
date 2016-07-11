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
        $__internal_5f18c71d219077d9f261e6eb25d7ab0eb9cb6c2cd88b063c8117129e1cb0d5a3 = $this->env->getExtension("native_profiler");
        $__internal_5f18c71d219077d9f261e6eb25d7ab0eb9cb6c2cd88b063c8117129e1cb0d5a3->enter($__internal_5f18c71d219077d9f261e6eb25d7ab0eb9cb6c2cd88b063c8117129e1cb0d5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzeroQuizBundle:Question:index.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 6
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        <article class=\"question ";
            // line 7
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
            
            
            
            <blockquote>
            ";
            // line 12
            if ($this->getAttribute($context["question"], "image", array())) {
                // line 13
                echo "            \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload/", 1 => $this->getAttribute($context["question"], "image", array())))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "title", array()), "html", null, true);
                echo " image not found\" class=\"question_img\" />
            \t";
            }
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "body", array()), "html", null, true);
            echo "
            </blockquote>
            <p>Your answer:<br> 
            ";
            // line 18
            $context["variates"] = twig_split_filter($this->env, $this->getAttribute($context["question"], "variates", array()), ";");
            // line 19
            echo "           \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variates"]) ? $context["variates"] : $this->getContext($context, "variates")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["variate"]) {
                // line 20
                echo "            \t";
                if (($this->getAttribute($context["question"], "type", array()) == "textarea")) {
                    // line 21
                    echo "    \t    \t\t<textarea name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\"></textarea>
                ";
                } elseif (($this->getAttribute(                // line 22
$context["question"], "type", array()) == "checkbox")) {
                    // line 23
                    echo "                    <input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\" value =\"";
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "\">
                    <label>";
                    // line 24
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
                ";
                } elseif (($this->getAttribute(                // line 25
$context["question"], "type", array()) == "radio")) {
                    // line 26
                    echo "                    <input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "\" checked>
                    <label>";
                    // line 27
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
    \t\t\t";
                } else {
                    // line 29
                    echo "    \t\t        \t<input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\">
    \t\t        \t<label>";
                    // line 30
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
    \t        ";
                }
                // line 32
                echo "    \t        
            \t
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </p>
            \t<hr class=\"big\"/>
        </article>
        
    
        
\t\t   

    
\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 45
            echo "    <p>Sorry, there are no questions for this quiz.</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</p>";
        
        $__internal_5f18c71d219077d9f261e6eb25d7ab0eb9cb6c2cd88b063c8117129e1cb0d5a3->leave($__internal_5f18c71d219077d9f261e6eb25d7ab0eb9cb6c2cd88b063c8117129e1cb0d5a3_prof);

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
        return array (  199 => 48,  191 => 45,  169 => 35,  153 => 32,  148 => 30,  141 => 29,  136 => 27,  127 => 26,  125 => 25,  121 => 24,  110 => 23,  108 => 22,  103 => 21,  100 => 20,  82 => 19,  80 => 18,  73 => 15,  65 => 13,  63 => 12,  53 => 7,  48 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Question/index.html.twig #}*/
/* */
/*  {{ form_start(form) }}*/
/* */
/*     {% for question in questions %}*/
/*         {{ form_errors(form) }}*/
/*         <article class="question {{ cycle(['odd', 'even'], loop.index0) }}" id="question-{{ question.id }}">*/
/*             */
/*             */
/*             */
/*             <blockquote>*/
/*             {% if question.image %}*/
/*             		<img src="{{ asset(['img/upload/', question.image]|join) }}" alt="{{ quiz.title }} image not found" class="question_img" />*/
/*             	{% endif %}*/
/*                 {{ question.body }}*/
/*             </blockquote>*/
/*             <p>Your answer:<br> */
/*             {% set variates = question.variates|split(';') %}*/
/*            	{% for variate in variates %}*/
/*             	{% if question.type == 'textarea' %}*/
/*     	    		<textarea name = "result[{{question.id}}]"></textarea>*/
/*                 {% elseif question.type == 'checkbox'%}*/
/*                     <input type="{{question.type}}" name = "result[{{question.id}}][{{ loop.index }}]" value ="{{ variate }}">*/
/*                     <label>{{ variate }}</label><br>*/
/*                 {% elseif question.type == 'radio'%}*/
/*                     <input type="{{question.type}}" name = "result[{{question.id}}]" value="{{ variate }}" checked>*/
/*                     <label>{{ variate }}</label><br>*/
/*     			{% else %}*/
/*     		        	<input type="{{question.type}}" name = "result[{{question.id}}]">*/
/*     		        	<label>{{ variate }}</label><br>*/
/*     	        {% endif %}*/
/*     	        */
/*             	*/
/*             {% endfor %}*/
/*             </p>*/
/*             	<hr class="big"/>*/
/*         </article>*/
/*         */
/*     */
/*         */
/* 		   */
/* */
/*     */
/* 	{% else %}*/
/*     <p>Sorry, there are no questions for this quiz.</p>*/
/* */
/*     {% endfor %}*/
/* {{ form_rest(form) }}*/
/* </form>*/
/* </p>*/
