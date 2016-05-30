<?php

/* base.html.twig */
class __TwigTemplate_6b12ae45c8d4d48a58d6eccfaf5e6e6aad07865c03d2175b5ee7f34d8256aa09 extends Twig_Template
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
        $__internal_ea1d5b81e0ee605b58e8db00d168b74fe429b29e3de4b582de486443a60c7502 = $this->env->getExtension("native_profiler");
        $__internal_ea1d5b81e0ee605b58e8db00d168b74fe429b29e3de4b582de486443a60c7502->enter($__internal_ea1d5b81e0ee605b58e8db00d168b74fe429b29e3de4b582de486443a60c7502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ea1d5b81e0ee605b58e8db00d168b74fe429b29e3de4b582de486443a60c7502->leave($__internal_ea1d5b81e0ee605b58e8db00d168b74fe429b29e3de4b582de486443a60c7502_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_0a44cb42a0ebe86bd6515ef4d6baad3992e336194a0d3c860585a812133bedca = $this->env->getExtension("native_profiler");
        $__internal_0a44cb42a0ebe86bd6515ef4d6baad3992e336194a0d3c860585a812133bedca->enter($__internal_0a44cb42a0ebe86bd6515ef4d6baad3992e336194a0d3c860585a812133bedca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_0a44cb42a0ebe86bd6515ef4d6baad3992e336194a0d3c860585a812133bedca->leave($__internal_0a44cb42a0ebe86bd6515ef4d6baad3992e336194a0d3c860585a812133bedca_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_e75e252bc4ca2532dc1eb5b90dab1731abd254b59d90c02c5a1bb9934f66c6c4 = $this->env->getExtension("native_profiler");
        $__internal_e75e252bc4ca2532dc1eb5b90dab1731abd254b59d90c02c5a1bb9934f66c6c4->enter($__internal_e75e252bc4ca2532dc1eb5b90dab1731abd254b59d90c02c5a1bb9934f66c6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e75e252bc4ca2532dc1eb5b90dab1731abd254b59d90c02c5a1bb9934f66c6c4->leave($__internal_e75e252bc4ca2532dc1eb5b90dab1731abd254b59d90c02c5a1bb9934f66c6c4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be5427ba756cd00ddc5dfe553d0fe96010f2caf90851f727af18c7785ee03dfe = $this->env->getExtension("native_profiler");
        $__internal_be5427ba756cd00ddc5dfe553d0fe96010f2caf90851f727af18c7785ee03dfe->enter($__internal_be5427ba756cd00ddc5dfe553d0fe96010f2caf90851f727af18c7785ee03dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_be5427ba756cd00ddc5dfe553d0fe96010f2caf90851f727af18c7785ee03dfe->leave($__internal_be5427ba756cd00ddc5dfe553d0fe96010f2caf90851f727af18c7785ee03dfe_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_e410a9bdf32e46d93a796a783e23f39573a1188067e61aa5c5b0a7d32fed91f4 = $this->env->getExtension("native_profiler");
        $__internal_e410a9bdf32e46d93a796a783e23f39573a1188067e61aa5c5b0a7d32fed91f4->enter($__internal_e410a9bdf32e46d93a796a783e23f39573a1188067e61aa5c5b0a7d32fed91f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e410a9bdf32e46d93a796a783e23f39573a1188067e61aa5c5b0a7d32fed91f4->leave($__internal_e410a9bdf32e46d93a796a783e23f39573a1188067e61aa5c5b0a7d32fed91f4_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_7592410f551d52f55c4a47d250ddf858771bb098ec276e3d1d010720dc06f3e6 = $this->env->getExtension("native_profiler");
        $__internal_7592410f551d52f55c4a47d250ddf858771bb098ec276e3d1d010720dc06f3e6->enter($__internal_7592410f551d52f55c4a47d250ddf858771bb098ec276e3d1d010720dc06f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_7592410f551d52f55c4a47d250ddf858771bb098ec276e3d1d010720dc06f3e6->leave($__internal_7592410f551d52f55c4a47d250ddf858771bb098ec276e3d1d010720dc06f3e6_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_f6852289e5b49ef8fd0bae1c96b4a638e990b8062ea74e5d1420b6e8f0655709 = $this->env->getExtension("native_profiler");
        $__internal_f6852289e5b49ef8fd0bae1c96b4a638e990b8062ea74e5d1420b6e8f0655709->enter($__internal_f6852289e5b49ef8fd0bae1c96b4a638e990b8062ea74e5d1420b6e8f0655709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_f6852289e5b49ef8fd0bae1c96b4a638e990b8062ea74e5d1420b6e8f0655709->leave($__internal_f6852289e5b49ef8fd0bae1c96b4a638e990b8062ea74e5d1420b6e8f0655709_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_d3eddb931be1113338363e8314067d18e283cb8f9a1eba6e5142626a824078cd = $this->env->getExtension("native_profiler");
        $__internal_d3eddb931be1113338363e8314067d18e283cb8f9a1eba6e5142626a824078cd->enter($__internal_d3eddb931be1113338363e8314067d18e283cb8f9a1eba6e5142626a824078cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_d3eddb931be1113338363e8314067d18e283cb8f9a1eba6e5142626a824078cd->leave($__internal_d3eddb931be1113338363e8314067d18e283cb8f9a1eba6e5142626a824078cd_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_852664d8b49bbc602bb1d7a7d88c424e11a49c529638a30d1791571920ff4201 = $this->env->getExtension("native_profiler");
        $__internal_852664d8b49bbc602bb1d7a7d88c424e11a49c529638a30d1791571920ff4201->enter($__internal_852664d8b49bbc602bb1d7a7d88c424e11a49c529638a30d1791571920ff4201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_852664d8b49bbc602bb1d7a7d88c424e11a49c529638a30d1791571920ff4201->leave($__internal_852664d8b49bbc602bb1d7a7d88c424e11a49c529638a30d1791571920ff4201_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_d5291ac4d95049757b2b054c8584792ba561f830a576bd6c6f54e03c2a191cf7 = $this->env->getExtension("native_profiler");
        $__internal_d5291ac4d95049757b2b054c8584792ba561f830a576bd6c6f54e03c2a191cf7->enter($__internal_d5291ac4d95049757b2b054c8584792ba561f830a576bd6c6f54e03c2a191cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_d5291ac4d95049757b2b054c8584792ba561f830a576bd6c6f54e03c2a191cf7->leave($__internal_d5291ac4d95049757b2b054c8584792ba561f830a576bd6c6f54e03c2a191cf7_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bc3950d610fc05789253b3d6580d16cedfee23d4eedc32829870c2c4fc59deb = $this->env->getExtension("native_profiler");
        $__internal_5bc3950d610fc05789253b3d6580d16cedfee23d4eedc32829870c2c4fc59deb->enter($__internal_5bc3950d610fc05789253b3d6580d16cedfee23d4eedc32829870c2c4fc59deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5bc3950d610fc05789253b3d6580d16cedfee23d4eedc32829870c2c4fc59deb->leave($__internal_5bc3950d610fc05789253b3d6580d16cedfee23d4eedc32829870c2c4fc59deb_prof);

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
        return array (  345 => 104,  341 => 103,  337 => 102,  333 => 101,  329 => 100,  325 => 99,  321 => 98,  317 => 97,  313 => 96,  306 => 91,  300 => 90,  289 => 82,  277 => 81,  266 => 66,  257 => 67,  255 => 66,  245 => 58,  239 => 57,  228 => 44,  215 => 83,  213 => 82,  209 => 81,  196 => 70,  194 => 57,  182 => 48,  173 => 44,  164 => 38,  161 => 37,  155 => 36,  146 => 31,  141 => 29,  136 => 27,  131 => 25,  126 => 23,  121 => 21,  116 => 19,  111 => 17,  105 => 13,  99 => 12,  87 => 11,  75 => 5,  69 => 4,  60 => 108,  58 => 90,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
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
