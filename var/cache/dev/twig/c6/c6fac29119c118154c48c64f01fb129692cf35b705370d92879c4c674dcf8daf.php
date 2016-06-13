<?php

/* ::base.html.twig */
class __TwigTemplate_6afa554178b858275c88d3be92d9db1a9356dc558fea6ad76a3710ecc7c0268d extends Twig_Template
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
            'cumstomScript' => array($this, 'block_cumstomScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77733b14b87a479155fdc1a285994edabe44949c253f25da0c55b3c1bd210243 = $this->env->getExtension("native_profiler");
        $__internal_77733b14b87a479155fdc1a285994edabe44949c253f25da0c55b3c1bd210243->enter($__internal_77733b14b87a479155fdc1a285994edabe44949c253f25da0c55b3c1bd210243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 109
        echo "</body>
</html>
";
        
        $__internal_77733b14b87a479155fdc1a285994edabe44949c253f25da0c55b3c1bd210243->leave($__internal_77733b14b87a479155fdc1a285994edabe44949c253f25da0c55b3c1bd210243_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_756e987fa4e3573a0c761111b693864f4dc1a0e55971d8326b6b1b1e8480dc75 = $this->env->getExtension("native_profiler");
        $__internal_756e987fa4e3573a0c761111b693864f4dc1a0e55971d8326b6b1b1e8480dc75->enter($__internal_756e987fa4e3573a0c761111b693864f4dc1a0e55971d8326b6b1b1e8480dc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_756e987fa4e3573a0c761111b693864f4dc1a0e55971d8326b6b1b1e8480dc75->leave($__internal_756e987fa4e3573a0c761111b693864f4dc1a0e55971d8326b6b1b1e8480dc75_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a29d323ad0c9c9adda8004cae974575094a8050d5bf54fc9867500dd3b6d287 = $this->env->getExtension("native_profiler");
        $__internal_7a29d323ad0c9c9adda8004cae974575094a8050d5bf54fc9867500dd3b6d287->enter($__internal_7a29d323ad0c9c9adda8004cae974575094a8050d5bf54fc9867500dd3b6d287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a29d323ad0c9c9adda8004cae974575094a8050d5bf54fc9867500dd3b6d287->leave($__internal_7a29d323ad0c9c9adda8004cae974575094a8050d5bf54fc9867500dd3b6d287_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba81c9b00442695909d64698dc438093ac0e5d40be2451f8d50a79c27e99cc94 = $this->env->getExtension("native_profiler");
        $__internal_ba81c9b00442695909d64698dc438093ac0e5d40be2451f8d50a79c27e99cc94->enter($__internal_ba81c9b00442695909d64698dc438093ac0e5d40be2451f8d50a79c27e99cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">


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
        
        $__internal_ba81c9b00442695909d64698dc438093ac0e5d40be2451f8d50a79c27e99cc94->leave($__internal_ba81c9b00442695909d64698dc438093ac0e5d40be2451f8d50a79c27e99cc94_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55c12d3360abd4a05fba4215885508c17a04bd75c37807a87856e3ef3ec5c41 = $this->env->getExtension("native_profiler");
        $__internal_c55c12d3360abd4a05fba4215885508c17a04bd75c37807a87856e3ef3ec5c41->enter($__internal_c55c12d3360abd4a05fba4215885508c17a04bd75c37807a87856e3ef3ec5c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit Account</a></li>
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
        
        $__internal_c55c12d3360abd4a05fba4215885508c17a04bd75c37807a87856e3ef3ec5c41->leave($__internal_c55c12d3360abd4a05fba4215885508c17a04bd75c37807a87856e3ef3ec5c41_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_2c124d06a6f4534cb4c3968687136224a13049748c22b4f6d7ab1adf563e1798 = $this->env->getExtension("native_profiler");
        $__internal_2c124d06a6f4534cb4c3968687136224a13049748c22b4f6d7ab1adf563e1798->enter($__internal_2c124d06a6f4534cb4c3968687136224a13049748c22b4f6d7ab1adf563e1798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_2c124d06a6f4534cb4c3968687136224a13049748c22b4f6d7ab1adf563e1798->leave($__internal_2c124d06a6f4534cb4c3968687136224a13049748c22b4f6d7ab1adf563e1798_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_5bd99254c42594aebef5a8efa8f0778330ed279366859def2ee701f3d947c8cf = $this->env->getExtension("native_profiler");
        $__internal_5bd99254c42594aebef5a8efa8f0778330ed279366859def2ee701f3d947c8cf->enter($__internal_5bd99254c42594aebef5a8efa8f0778330ed279366859def2ee701f3d947c8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_5bd99254c42594aebef5a8efa8f0778330ed279366859def2ee701f3d947c8cf->leave($__internal_5bd99254c42594aebef5a8efa8f0778330ed279366859def2ee701f3d947c8cf_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_72bd1cd6d765e40703120731f69e4e0e60ca5a82e88f64c05185ff40ed7068fc = $this->env->getExtension("native_profiler");
        $__internal_72bd1cd6d765e40703120731f69e4e0e60ca5a82e88f64c05185ff40ed7068fc->enter($__internal_72bd1cd6d765e40703120731f69e4e0e60ca5a82e88f64c05185ff40ed7068fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_72bd1cd6d765e40703120731f69e4e0e60ca5a82e88f64c05185ff40ed7068fc->leave($__internal_72bd1cd6d765e40703120731f69e4e0e60ca5a82e88f64c05185ff40ed7068fc_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_81d2127f6bdaa00696534b95ab6b1fe0e0d95313ade0548936f221609abb054c = $this->env->getExtension("native_profiler");
        $__internal_81d2127f6bdaa00696534b95ab6b1fe0e0d95313ade0548936f221609abb054c->enter($__internal_81d2127f6bdaa00696534b95ab6b1fe0e0d95313ade0548936f221609abb054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_81d2127f6bdaa00696534b95ab6b1fe0e0d95313ade0548936f221609abb054c->leave($__internal_81d2127f6bdaa00696534b95ab6b1fe0e0d95313ade0548936f221609abb054c_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_01bfad82255d127d89e071099b22fceadd2b6138a59fe14b5093a1bf995f0413 = $this->env->getExtension("native_profiler");
        $__internal_01bfad82255d127d89e071099b22fceadd2b6138a59fe14b5093a1bf995f0413->enter($__internal_01bfad82255d127d89e071099b22fceadd2b6138a59fe14b5093a1bf995f0413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_01bfad82255d127d89e071099b22fceadd2b6138a59fe14b5093a1bf995f0413->leave($__internal_01bfad82255d127d89e071099b22fceadd2b6138a59fe14b5093a1bf995f0413_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06a2f7847491e696b55f81d4ebe1f5037412fefbdbdea9eab95c7296d303c5ab = $this->env->getExtension("native_profiler");
        $__internal_06a2f7847491e696b55f81d4ebe1f5037412fefbdbdea9eab95c7296d303c5ab->enter($__internal_06a2f7847491e696b55f81d4ebe1f5037412fefbdbdea9eab95c7296d303c5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 105
        $this->displayBlock('cumstomScript', $context, $blocks);
        
        $__internal_06a2f7847491e696b55f81d4ebe1f5037412fefbdbdea9eab95c7296d303c5ab->leave($__internal_06a2f7847491e696b55f81d4ebe1f5037412fefbdbdea9eab95c7296d303c5ab_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_7c636a63391305d72ce21d8be62ee638001b5d142fd6bab77d54f27c04c6fd05 = $this->env->getExtension("native_profiler");
        $__internal_7c636a63391305d72ce21d8be62ee638001b5d142fd6bab77d54f27c04c6fd05->enter($__internal_7c636a63391305d72ce21d8be62ee638001b5d142fd6bab77d54f27c04c6fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 106
        echo "
    ";
        
        $__internal_7c636a63391305d72ce21d8be62ee638001b5d142fd6bab77d54f27c04c6fd05->leave($__internal_7c636a63391305d72ce21d8be62ee638001b5d142fd6bab77d54f27c04c6fd05_prof);

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
        return array (  365 => 106,  353 => 105,  349 => 104,  345 => 103,  341 => 102,  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  317 => 96,  310 => 91,  304 => 90,  293 => 82,  281 => 81,  270 => 66,  261 => 67,  259 => 66,  249 => 58,  243 => 57,  232 => 44,  219 => 83,  217 => 82,  213 => 81,  200 => 70,  198 => 57,  186 => 48,  182 => 47,  174 => 44,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 109,  59 => 90,  57 => 36,  53 => 35,  47 => 33,  45 => 12,  40 => 11,  38 => 4,  33 => 1,);
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
/* */
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
/*                     <li><a href="{{ path('fos_user_profile_edit') }}">Edit Account</a></li>*/
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
/*     {% block cumstomScript %}*/
/* */
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
