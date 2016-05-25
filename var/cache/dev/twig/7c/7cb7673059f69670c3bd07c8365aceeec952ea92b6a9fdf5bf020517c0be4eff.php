<?php

/* base.html.twig */
class __TwigTemplate_7349493d3be937923ab9e39098840a65009e7500010e2de3c19046af785d210b extends Twig_Template
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
        $__internal_ce7a0aafbc1093cc1460e3bef6fbbe726fae7b58db6cc5336dd4d27a69d1a4cf = $this->env->getExtension("native_profiler");
        $__internal_ce7a0aafbc1093cc1460e3bef6fbbe726fae7b58db6cc5336dd4d27a69d1a4cf->enter($__internal_ce7a0aafbc1093cc1460e3bef6fbbe726fae7b58db6cc5336dd4d27a69d1a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ce7a0aafbc1093cc1460e3bef6fbbe726fae7b58db6cc5336dd4d27a69d1a4cf->leave($__internal_ce7a0aafbc1093cc1460e3bef6fbbe726fae7b58db6cc5336dd4d27a69d1a4cf_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_f8fddd535b2eaecb623a33544cc04b46de865840f7d248a9f2bbb6627ffdd5fb = $this->env->getExtension("native_profiler");
        $__internal_f8fddd535b2eaecb623a33544cc04b46de865840f7d248a9f2bbb6627ffdd5fb->enter($__internal_f8fddd535b2eaecb623a33544cc04b46de865840f7d248a9f2bbb6627ffdd5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_f8fddd535b2eaecb623a33544cc04b46de865840f7d248a9f2bbb6627ffdd5fb->leave($__internal_f8fddd535b2eaecb623a33544cc04b46de865840f7d248a9f2bbb6627ffdd5fb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f261754c3888eec650d09ceb255e9def423c8ee20ec638f8db145ab4e85848b = $this->env->getExtension("native_profiler");
        $__internal_1f261754c3888eec650d09ceb255e9def423c8ee20ec638f8db145ab4e85848b->enter($__internal_1f261754c3888eec650d09ceb255e9def423c8ee20ec638f8db145ab4e85848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f261754c3888eec650d09ceb255e9def423c8ee20ec638f8db145ab4e85848b->leave($__internal_1f261754c3888eec650d09ceb255e9def423c8ee20ec638f8db145ab4e85848b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4871403efb308fd8a2cfd593894ba0d18d50f86bdc09554d70c60bede8af8c2d = $this->env->getExtension("native_profiler");
        $__internal_4871403efb308fd8a2cfd593894ba0d18d50f86bdc09554d70c60bede8af8c2d->enter($__internal_4871403efb308fd8a2cfd593894ba0d18d50f86bdc09554d70c60bede8af8c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4871403efb308fd8a2cfd593894ba0d18d50f86bdc09554d70c60bede8af8c2d->leave($__internal_4871403efb308fd8a2cfd593894ba0d18d50f86bdc09554d70c60bede8af8c2d_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_8873dae84f88e75096eddf7861fce6d547ec74177cb5d6a5afb1e51d4e33f289 = $this->env->getExtension("native_profiler");
        $__internal_8873dae84f88e75096eddf7861fce6d547ec74177cb5d6a5afb1e51d4e33f289->enter($__internal_8873dae84f88e75096eddf7861fce6d547ec74177cb5d6a5afb1e51d4e33f289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8873dae84f88e75096eddf7861fce6d547ec74177cb5d6a5afb1e51d4e33f289->leave($__internal_8873dae84f88e75096eddf7861fce6d547ec74177cb5d6a5afb1e51d4e33f289_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_a31ca01be4f78476509594db39c192c06af06b1a76fc523c147e1583ad5df544 = $this->env->getExtension("native_profiler");
        $__internal_a31ca01be4f78476509594db39c192c06af06b1a76fc523c147e1583ad5df544->enter($__internal_a31ca01be4f78476509594db39c192c06af06b1a76fc523c147e1583ad5df544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_a31ca01be4f78476509594db39c192c06af06b1a76fc523c147e1583ad5df544->leave($__internal_a31ca01be4f78476509594db39c192c06af06b1a76fc523c147e1583ad5df544_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_addaa89d3cf4468ccbc2c0b13df18b5283c75f56302e482d2da18e9667d54c23 = $this->env->getExtension("native_profiler");
        $__internal_addaa89d3cf4468ccbc2c0b13df18b5283c75f56302e482d2da18e9667d54c23->enter($__internal_addaa89d3cf4468ccbc2c0b13df18b5283c75f56302e482d2da18e9667d54c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_addaa89d3cf4468ccbc2c0b13df18b5283c75f56302e482d2da18e9667d54c23->leave($__internal_addaa89d3cf4468ccbc2c0b13df18b5283c75f56302e482d2da18e9667d54c23_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_e921d68489c86cc0d689e8082d1d5e2ccc0a62eedb88a2fef6f4fd7e51fa4100 = $this->env->getExtension("native_profiler");
        $__internal_e921d68489c86cc0d689e8082d1d5e2ccc0a62eedb88a2fef6f4fd7e51fa4100->enter($__internal_e921d68489c86cc0d689e8082d1d5e2ccc0a62eedb88a2fef6f4fd7e51fa4100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_e921d68489c86cc0d689e8082d1d5e2ccc0a62eedb88a2fef6f4fd7e51fa4100->leave($__internal_e921d68489c86cc0d689e8082d1d5e2ccc0a62eedb88a2fef6f4fd7e51fa4100_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_1aaf449efee02202b22f00e7ec310278a2280a2b7a04125ebb157f20ecb4c710 = $this->env->getExtension("native_profiler");
        $__internal_1aaf449efee02202b22f00e7ec310278a2280a2b7a04125ebb157f20ecb4c710->enter($__internal_1aaf449efee02202b22f00e7ec310278a2280a2b7a04125ebb157f20ecb4c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_1aaf449efee02202b22f00e7ec310278a2280a2b7a04125ebb157f20ecb4c710->leave($__internal_1aaf449efee02202b22f00e7ec310278a2280a2b7a04125ebb157f20ecb4c710_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_e3b609695c62afc0eb171000c615a69e1933421418cc240a062bb2bb52533e00 = $this->env->getExtension("native_profiler");
        $__internal_e3b609695c62afc0eb171000c615a69e1933421418cc240a062bb2bb52533e00->enter($__internal_e3b609695c62afc0eb171000c615a69e1933421418cc240a062bb2bb52533e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_e3b609695c62afc0eb171000c615a69e1933421418cc240a062bb2bb52533e00->leave($__internal_e3b609695c62afc0eb171000c615a69e1933421418cc240a062bb2bb52533e00_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5432038d785c7eb7d4cc8533a1afe3685c061127bb34af7746fd901739f46c92 = $this->env->getExtension("native_profiler");
        $__internal_5432038d785c7eb7d4cc8533a1afe3685c061127bb34af7746fd901739f46c92->enter($__internal_5432038d785c7eb7d4cc8533a1afe3685c061127bb34af7746fd901739f46c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5432038d785c7eb7d4cc8533a1afe3685c061127bb34af7746fd901739f46c92->leave($__internal_5432038d785c7eb7d4cc8533a1afe3685c061127bb34af7746fd901739f46c92_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
