<?php

/* ::base.html.twig */
class __TwigTemplate_f80fd79bbc7a7a3d79b6750b27cc21278fbafb2d17e7008fe695bd9dd3cab92b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_title' => array($this, 'block_blog_title'),
            'header_image' => array($this, 'block_header_image'),
            'header_title' => array($this, 'block_header_title'),
            'header_subtitle' => array($this, 'block_header_subtitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Quiz for FS</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"/\">";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"/\">Home</a>
                    </li>
                    <li>
                        <a href=\"/user\">Login</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('";
        // line 58
        $this->displayBlock('header_image', $context, $blocks);
        echo "')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        <h1>";
        // line 63
        $this->displayBlock('header_title', $context, $blocks);
        echo "</h1>
                        <hr class=\"small\"/>
                        <span class=\"subheading\">";
        // line 65
        $this->displayBlock('header_subtitle', $context, $blocks);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <!-- Main Content -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "                </div>
            </div>
        </div>
    </article>
     <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                    
                   
                        <li>
                            <a href=\"https://github.com/text-lock/quizzero\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">By &copy;Nornik for FS <ins></ins> 2016</p>
                </div>
            </div>
        </div>
    </footer>
";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "   

</body>

</html>

";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "QuizZERO";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
<!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/clean-blog.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

    ";
    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        echo "QuizZERO";
    }

    // line 58
    public function block_header_image($context, array $blocks = array())
    {
        echo "img/home-bg.jpg";
    }

    // line 63
    public function block_header_title($context, array $blocks = array())
    {
        echo "KOLA";
    }

    // line 65
    public function block_header_subtitle($context, array $blocks = array())
    {
        echo "QUIZ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        echo " <!-- jQuery -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Theme JavaScript -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/common.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 112,  243 => 111,  236 => 107,  230 => 104,  225 => 103,  220 => 76,  214 => 65,  208 => 63,  202 => 58,  196 => 37,  189 => 22,  185 => 21,  181 => 20,  175 => 17,  171 => 16,  165 => 13,  161 => 11,  158 => 10,  152 => 6,  142 => 114,  140 => 103,  112 => 77,  110 => 76,  96 => 65,  91 => 63,  83 => 58,  59 => 37,  43 => 25,  41 => 10,  34 => 6,  27 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*     <title>{% block title %}QuizZERO{% endblock %} - Quiz for FS</title>*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/*     {% block stylesheets %}*/
/* */
/* <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">*/
/* 	<link href="{{ asset('css/common.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') }}" rel='stylesheet' type='text/css'>*/
/*     <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}" rel='stylesheet' type='text/css'>*/
/* */
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     Menu <i class="fa fa-bars"></i>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/">{% block blog_title %}QuizZERO{% endblock %}</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <a href="/">Home</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/user">Login</a>*/
/*                     </li>*/
/*                     */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/*     <!-- Page Header -->*/
/*     <!-- Set your background image for this header on the line below. -->*/
/*     <header class="intro-header" style="background-image: url('{% block header_image %}img/home-bg.jpg{% endblock %}')">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <div class="site-heading">*/
/*                         <h1>{% block header_title %}KOLA{% endblock %}</h1>*/
/*                         <hr class="small"/>*/
/*                         <span class="subheading">{% block header_subtitle %}QUIZ{% endblock %}</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <article>*/
/*         <!-- Main Content -->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </article>*/
/*      <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <ul class="list-inline text-center">*/
/*                     */
/*                    */
/*                         <li>*/
/*                             <a href="https://github.com/text-lock/quizzero">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <p class="copyright text-muted">By &copy;Nornik for FS <ins></ins> 2016</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% block javascripts %} <!-- jQuery -->*/
/*     <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* */
/* */
/*     <!-- Theme JavaScript -->*/
/*     <script src="{{ asset('js/clean-blog.min.js') }}"></script>*/
/* 	<script src="{{ asset('js/common.js') }}"></script>*/
/* {% endblock %}*/
/*    */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
