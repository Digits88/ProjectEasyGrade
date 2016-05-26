<?php

/* ::base.html.twig */
class __TwigTemplate_aa4285ad1af48be64f8850bc6a8992a1d3e1bfc869422843638d7db5847e2c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerdetail' => array($this, 'block_headerdetail'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'sidebarmenu' => array($this, 'block_sidebarmenu'),
            'courselist' => array($this, 'block_courselist'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c75dfdf4bb4e680b4b5c9b31724fff99a1042edd0f18cdcf0b49df3e081efe06 = $this->env->getExtension("native_profiler");
        $__internal_c75dfdf4bb4e680b4b5c9b31724fff99a1042edd0f18cdcf0b49df3e081efe06->enter($__internal_c75dfdf4bb4e680b4b5c9b31724fff99a1042edd0f18cdcf0b49df3e081efe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('headerdetail', $context, $blocks);
        // line 11
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body background=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/back.jpg"), "html", null, true);
        echo "\">
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "</body>
</html>
";
        
        $__internal_c75dfdf4bb4e680b4b5c9b31724fff99a1042edd0f18cdcf0b49df3e081efe06->leave($__internal_c75dfdf4bb4e680b4b5c9b31724fff99a1042edd0f18cdcf0b49df3e081efe06_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_3118d0e2d40ce3cecc5fe6a600636dceb9fbb2e7f335ca86511045c7b1763e60 = $this->env->getExtension("native_profiler");
        $__internal_3118d0e2d40ce3cecc5fe6a600636dceb9fbb2e7f335ca86511045c7b1763e60->enter($__internal_3118d0e2d40ce3cecc5fe6a600636dceb9fbb2e7f335ca86511045c7b1763e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_3118d0e2d40ce3cecc5fe6a600636dceb9fbb2e7f335ca86511045c7b1763e60->leave($__internal_3118d0e2d40ce3cecc5fe6a600636dceb9fbb2e7f335ca86511045c7b1763e60_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae9d1f23bd60d3afae2cec0a46a2fb4931dfbd45a1c11d6aa540ddabfd1c9c17 = $this->env->getExtension("native_profiler");
        $__internal_ae9d1f23bd60d3afae2cec0a46a2fb4931dfbd45a1c11d6aa540ddabfd1c9c17->enter($__internal_ae9d1f23bd60d3afae2cec0a46a2fb4931dfbd45a1c11d6aa540ddabfd1c9c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae9d1f23bd60d3afae2cec0a46a2fb4931dfbd45a1c11d6aa540ddabfd1c9c17->leave($__internal_ae9d1f23bd60d3afae2cec0a46a2fb4931dfbd45a1c11d6aa540ddabfd1c9c17_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28c514ce416f37b0739efbeeccc569f44848f93d437223886c26d4130b62862d = $this->env->getExtension("native_profiler");
        $__internal_28c514ce416f37b0739efbeeccc569f44848f93d437223886c26d4130b62862d->enter($__internal_28c514ce416f37b0739efbeeccc569f44848f93d437223886c26d4130b62862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lecturer/css/coursestyles.css"), "html", null, true);
        echo "\">

        <!-- Font awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Sandstone Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lecturer/css/bootsrap.min.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap Datatables -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap social button library -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/bootstrap-social.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap select -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/bootstrap-select.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap file input -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/fileinput.min.css"), "html", null, true);
        echo "\">
        <!-- Awesome Bootstrap checkbox -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/awesome-bootstrap-checkbox.css"), "html", null, true);
        echo "\">
        <!-- Admin Stye -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_28c514ce416f37b0739efbeeccc569f44848f93d437223886c26d4130b62862d->leave($__internal_28c514ce416f37b0739efbeeccc569f44848f93d437223886c26d4130b62862d_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df20b71ba359dcd0fd3f5f0cc79a300258d100682f0c209f1fd32dc4d032b8a = $this->env->getExtension("native_profiler");
        $__internal_0df20b71ba359dcd0fd3f5f0cc79a300258d100682f0c209f1fd32dc4d032b8a->enter($__internal_0df20b71ba359dcd0fd3f5f0cc79a300258d100682f0c209f1fd32dc4d032b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"brand clearfix\">
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
        <span class=\"menu-btn\"><i class=\"fa fa-bars\"></i></span>
        <ul class=\"ts-profile-nav\">
            <li><a href=\"#\">Help</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li class=\"ts-account\">
                <a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/ts-avatar.jpg"), "html", null, true);
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> ";
        $this->displayBlock('authenticatedUsername', $context, $blocks);
        echo " <i class=\"fa fa-angle-down hidden-side\"></i></a>
                <ul>
                    <li><a href=\"#\">My Account</a></li>
                    <li><a href=\"#\">Edit Account</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"ts-main-content\">
        <nav class=\"ts-sidebar\">
            <ul class=\"ts-sidebar-menu\">
                ";
        // line 57
        $this->displayBlock('sidebarmenu', $context, $blocks);
        // line 70
        echo "            </ul>
        </nav>



        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <h2 class=\"page-title\">";
        // line 81
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                        ";
        // line 82
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 83
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0df20b71ba359dcd0fd3f5f0cc79a300258d100682f0c209f1fd32dc4d032b8a->leave($__internal_0df20b71ba359dcd0fd3f5f0cc79a300258d100682f0c209f1fd32dc4d032b8a_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1a9a3d84179873a00b6a515be714f5b6a0bad263a1837d970d049f5d6fe8705b = $this->env->getExtension("native_profiler");
        $__internal_1a9a3d84179873a00b6a515be714f5b6a0bad263a1837d970d049f5d6fe8705b->enter($__internal_1a9a3d84179873a00b6a515be714f5b6a0bad263a1837d970d049f5d6fe8705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_1a9a3d84179873a00b6a515be714f5b6a0bad263a1837d970d049f5d6fe8705b->leave($__internal_1a9a3d84179873a00b6a515be714f5b6a0bad263a1837d970d049f5d6fe8705b_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_e383793d50c6d2eef99d9de5e43b6f077aaee22706bfa02991a014179adff729 = $this->env->getExtension("native_profiler");
        $__internal_e383793d50c6d2eef99d9de5e43b6f077aaee22706bfa02991a014179adff729->enter($__internal_e383793d50c6d2eef99d9de5e43b6f077aaee22706bfa02991a014179adff729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 58
        echo "                    <li class=\"ts-label\">Search</li>
                    <li>
                        <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                    </li>
                    <li class=\"ts-label\">Main</li>
                    <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                        <ul>
                            ";
        // line 66
        $this->displayBlock('courselist', $context, $blocks);
        // line 67
        echo "                        </ul>
                    </li>
                ";
        
        $__internal_e383793d50c6d2eef99d9de5e43b6f077aaee22706bfa02991a014179adff729->leave($__internal_e383793d50c6d2eef99d9de5e43b6f077aaee22706bfa02991a014179adff729_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_5d5732b9bba33bf8693263deedf21814dd02593bd5068ef09ae086fc25785b2f = $this->env->getExtension("native_profiler");
        $__internal_5d5732b9bba33bf8693263deedf21814dd02593bd5068ef09ae086fc25785b2f->enter($__internal_5d5732b9bba33bf8693263deedf21814dd02593bd5068ef09ae086fc25785b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_5d5732b9bba33bf8693263deedf21814dd02593bd5068ef09ae086fc25785b2f->leave($__internal_5d5732b9bba33bf8693263deedf21814dd02593bd5068ef09ae086fc25785b2f_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_3c695b840a09402cae507d986560c638ffa6434be32b31a339610a36a5628eb6 = $this->env->getExtension("native_profiler");
        $__internal_3c695b840a09402cae507d986560c638ffa6434be32b31a339610a36a5628eb6->enter($__internal_3c695b840a09402cae507d986560c638ffa6434be32b31a339610a36a5628eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_3c695b840a09402cae507d986560c638ffa6434be32b31a339610a36a5628eb6->leave($__internal_3c695b840a09402cae507d986560c638ffa6434be32b31a339610a36a5628eb6_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c8f50b305574b08bbe15d304640ea70c06fa1382c52008cce66b3cc9e9316812 = $this->env->getExtension("native_profiler");
        $__internal_c8f50b305574b08bbe15d304640ea70c06fa1382c52008cce66b3cc9e9316812->enter($__internal_c8f50b305574b08bbe15d304640ea70c06fa1382c52008cce66b3cc9e9316812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_c8f50b305574b08bbe15d304640ea70c06fa1382c52008cce66b3cc9e9316812->leave($__internal_c8f50b305574b08bbe15d304640ea70c06fa1382c52008cce66b3cc9e9316812_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_033b6681301c1a2ec941405919f77a0ce6f27263da722726d1e17ed71f152f59 = $this->env->getExtension("native_profiler");
        $__internal_033b6681301c1a2ec941405919f77a0ce6f27263da722726d1e17ed71f152f59->enter($__internal_033b6681301c1a2ec941405919f77a0ce6f27263da722726d1e17ed71f152f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/chartData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/main.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_033b6681301c1a2ec941405919f77a0ce6f27263da722726d1e17ed71f152f59->leave($__internal_033b6681301c1a2ec941405919f77a0ce6f27263da722726d1e17ed71f152f59_prof);

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
        return array (  348 => 104,  344 => 103,  340 => 102,  336 => 101,  332 => 100,  328 => 99,  324 => 98,  320 => 97,  316 => 96,  309 => 91,  303 => 90,  292 => 82,  280 => 81,  269 => 66,  260 => 67,  258 => 66,  248 => 58,  242 => 57,  231 => 44,  218 => 83,  216 => 82,  212 => 81,  199 => 70,  197 => 57,  185 => 48,  176 => 44,  167 => 38,  164 => 37,  158 => 36,  149 => 31,  144 => 29,  139 => 27,  134 => 25,  129 => 23,  124 => 21,  119 => 19,  114 => 17,  108 => 14,  105 => 13,  99 => 12,  87 => 11,  75 => 5,  69 => 4,  60 => 108,  58 => 90,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block headerdetail %}*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*     {% endblock %}*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/lecturer/css/coursestyles.css') }}">*/
/* */
/*         <!-- Font awesome -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/font-awesome.min.css') }}">*/
/*         <!-- Sandstone Bootstrap CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/lecturer/css/bootsrap.min.css') }}">*/
/*         <!-- Bootstrap Datatables -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/dataTables.bootstrap.min.css') }}">*/
/*         <!-- Bootstrap social button library -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/bootstrap-social.css') }}">*/
/*         <!-- Bootstrap select -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/bootstrap-select.css') }}">*/
/*         <!-- Bootstrap file input -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/fileinput.min.css') }}">*/
/*         <!-- Awesome Bootstrap checkbox -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/awesome-bootstrap-checkbox.css') }}">*/
/*         <!-- Admin Stye -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/style.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body background="{{ asset('bundles/nsep/images/back.jpg') }}">*/
/* {% block body %}*/
/*     <div class="brand clearfix">*/
/*         <a href="index.html" class="logo"><img src="{{ asset('bundles/nsep/images/logo.jpg') }}" class="img-responsive" alt=""></a>*/
/*         <span class="menu-btn"><i class="fa fa-bars"></i></span>*/
/*         <ul class="ts-profile-nav">*/
/*             <li><a href="#">Help</a></li>*/
/*             <li><a href="#">Settings</a></li>*/
/*             <li class="ts-account">*/
/*                 <a href="#"><img src="{{ asset('bundles/nsep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> {% block authenticatedUsername %}{% endblock %} <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="#">My Account</a></li>*/
/*                     <li><a href="#">Edit Account</a></li>*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="ts-main-content">*/
/*         <nav class="ts-sidebar">*/
/*             <ul class="ts-sidebar-menu">*/
/*                 {% block sidebarmenu %}*/
/*                     <li class="ts-label">Search</li>*/
/*                     <li>*/
/*                         <input type="text" class="ts-sidebar-search" placeholder="Search here...">*/
/*                     </li>*/
/*                     <li class="ts-label">Main</li>*/
/*                     <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>*/
/*                     <li><a href="#"><i class="fa fa-desktop"></i> Courses</a>*/
/*                         <ul>*/
/*                             {% block courselist %}{% endblock courselist %}*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endblock sidebarmenu %}*/
/*             </ul>*/
/*         </nav>*/
/* */
/* */
/* */
/*         <div class="content-wrapper">*/
/*             <div class="container-fluid">*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/* */
/*                         <h2 class="page-title">{% block modulename %}easyGrade{% endblock %}</h2>*/
/*                         {% block contentdetail %}{% endblock %}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/*     <script src="{{ asset('bundles/nsep/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/bootstrap-select.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/jquery.dataTables.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/dataTables.bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/Chart.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/fileinput.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/chartData.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/main.js') }}"></script>*/
/* */
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
