<?php

/* base.html.twig */
class __TwigTemplate_9f4a27ef01856195ee521eecaba90aa7152061fe9ecb02801cc040de4ff413bb extends Twig_Template
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
        $__internal_9788d91402516562ae6f15e1f442ebe52e968326a27991e94d818042511a747c = $this->env->getExtension("native_profiler");
        $__internal_9788d91402516562ae6f15e1f442ebe52e968326a27991e94d818042511a747c->enter($__internal_9788d91402516562ae6f15e1f442ebe52e968326a27991e94d818042511a747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
        
        $__internal_9788d91402516562ae6f15e1f442ebe52e968326a27991e94d818042511a747c->leave($__internal_9788d91402516562ae6f15e1f442ebe52e968326a27991e94d818042511a747c_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_ef2da2a58a6b6c000f97291a13454c27ea17f87c90182d444a53bca68f17c7fc = $this->env->getExtension("native_profiler");
        $__internal_ef2da2a58a6b6c000f97291a13454c27ea17f87c90182d444a53bca68f17c7fc->enter($__internal_ef2da2a58a6b6c000f97291a13454c27ea17f87c90182d444a53bca68f17c7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_ef2da2a58a6b6c000f97291a13454c27ea17f87c90182d444a53bca68f17c7fc->leave($__internal_ef2da2a58a6b6c000f97291a13454c27ea17f87c90182d444a53bca68f17c7fc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_63e5da1a6b88673d2f85c6253d9b4a93f16fbc6592c8db3ccf5d49f28bb5e160 = $this->env->getExtension("native_profiler");
        $__internal_63e5da1a6b88673d2f85c6253d9b4a93f16fbc6592c8db3ccf5d49f28bb5e160->enter($__internal_63e5da1a6b88673d2f85c6253d9b4a93f16fbc6592c8db3ccf5d49f28bb5e160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63e5da1a6b88673d2f85c6253d9b4a93f16fbc6592c8db3ccf5d49f28bb5e160->leave($__internal_63e5da1a6b88673d2f85c6253d9b4a93f16fbc6592c8db3ccf5d49f28bb5e160_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e630b3b4ba040ddbecd3f031f1c999ffe24a1be91e1787623470936ee1a6303c = $this->env->getExtension("native_profiler");
        $__internal_e630b3b4ba040ddbecd3f031f1c999ffe24a1be91e1787623470936ee1a6303c->enter($__internal_e630b3b4ba040ddbecd3f031f1c999ffe24a1be91e1787623470936ee1a6303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e630b3b4ba040ddbecd3f031f1c999ffe24a1be91e1787623470936ee1a6303c->leave($__internal_e630b3b4ba040ddbecd3f031f1c999ffe24a1be91e1787623470936ee1a6303c_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be4e61e159698135ea83641b13033bc14aa79b008d5ae7bb97c7f37c9bd115b = $this->env->getExtension("native_profiler");
        $__internal_1be4e61e159698135ea83641b13033bc14aa79b008d5ae7bb97c7f37c9bd115b->enter($__internal_1be4e61e159698135ea83641b13033bc14aa79b008d5ae7bb97c7f37c9bd115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"brand clearfix\">
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
        <span class=\"menu-btn\"><i class=\"fa fa-bars\"></i></span>
        <ul class=\"ts-profile-nav\">
            <li class=\"ts-account\">
                <a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/ts-avatar.jpg"), "html", null, true);
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> ";
        $this->displayBlock('authenticatedUsername', $context, $blocks);
        echo " <i class=\"fa fa-angle-down hidden-side\"></i></a>
                <ul>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("own_account");
        echo "\">Edit Account</a></li>
                    <li><a href=\"";
        // line 45
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
        // line 54
        $this->displayBlock('sidebarmenu', $context, $blocks);
        // line 67
        echo "            </ul>
        </nav>



        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <h2 class=\"page-title\">";
        // line 78
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                        ";
        // line 79
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 80
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1be4e61e159698135ea83641b13033bc14aa79b008d5ae7bb97c7f37c9bd115b->leave($__internal_1be4e61e159698135ea83641b13033bc14aa79b008d5ae7bb97c7f37c9bd115b_prof);

    }

    // line 42
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_be968b0e2433dd95a55a35c6981681a2e9bfad988e91f61a9757a6330f7ac839 = $this->env->getExtension("native_profiler");
        $__internal_be968b0e2433dd95a55a35c6981681a2e9bfad988e91f61a9757a6330f7ac839->enter($__internal_be968b0e2433dd95a55a35c6981681a2e9bfad988e91f61a9757a6330f7ac839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_be968b0e2433dd95a55a35c6981681a2e9bfad988e91f61a9757a6330f7ac839->leave($__internal_be968b0e2433dd95a55a35c6981681a2e9bfad988e91f61a9757a6330f7ac839_prof);

    }

    // line 54
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_ba4151283571ad74fca16ac502d4a4d9c22bcbc8292ad5131efece30eaf1ed53 = $this->env->getExtension("native_profiler");
        $__internal_ba4151283571ad74fca16ac502d4a4d9c22bcbc8292ad5131efece30eaf1ed53->enter($__internal_ba4151283571ad74fca16ac502d4a4d9c22bcbc8292ad5131efece30eaf1ed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 55
        echo "                    <li class=\"ts-label\">Search</li>
                    <li>
                        <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                    </li>
                    <li class=\"ts-label\">Main</li>
                    <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                        <ul>
                            ";
        // line 63
        $this->displayBlock('courselist', $context, $blocks);
        // line 64
        echo "                        </ul>
                    </li>
                ";
        
        $__internal_ba4151283571ad74fca16ac502d4a4d9c22bcbc8292ad5131efece30eaf1ed53->leave($__internal_ba4151283571ad74fca16ac502d4a4d9c22bcbc8292ad5131efece30eaf1ed53_prof);

    }

    // line 63
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_b69aa6d263f633d91a98abd6628b3b025a98831024e27e735d3d8f60eb78b8cf = $this->env->getExtension("native_profiler");
        $__internal_b69aa6d263f633d91a98abd6628b3b025a98831024e27e735d3d8f60eb78b8cf->enter($__internal_b69aa6d263f633d91a98abd6628b3b025a98831024e27e735d3d8f60eb78b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_b69aa6d263f633d91a98abd6628b3b025a98831024e27e735d3d8f60eb78b8cf->leave($__internal_b69aa6d263f633d91a98abd6628b3b025a98831024e27e735d3d8f60eb78b8cf_prof);

    }

    // line 78
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_2113606ece6d046222e5c8f9447555f1fcf886d76c0bbe0eccb1e45d7de07c93 = $this->env->getExtension("native_profiler");
        $__internal_2113606ece6d046222e5c8f9447555f1fcf886d76c0bbe0eccb1e45d7de07c93->enter($__internal_2113606ece6d046222e5c8f9447555f1fcf886d76c0bbe0eccb1e45d7de07c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_2113606ece6d046222e5c8f9447555f1fcf886d76c0bbe0eccb1e45d7de07c93->leave($__internal_2113606ece6d046222e5c8f9447555f1fcf886d76c0bbe0eccb1e45d7de07c93_prof);

    }

    // line 79
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_85620adfcf737148502fddfeb6b28e0848c64b13ce790d84219f9bad05044baa = $this->env->getExtension("native_profiler");
        $__internal_85620adfcf737148502fddfeb6b28e0848c64b13ce790d84219f9bad05044baa->enter($__internal_85620adfcf737148502fddfeb6b28e0848c64b13ce790d84219f9bad05044baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_85620adfcf737148502fddfeb6b28e0848c64b13ce790d84219f9bad05044baa->leave($__internal_85620adfcf737148502fddfeb6b28e0848c64b13ce790d84219f9bad05044baa_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20381afbe8e402ec306c977dfc38a33949c8b32c574a373ba4ea1738fb0dc7b8 = $this->env->getExtension("native_profiler");
        $__internal_20381afbe8e402ec306c977dfc38a33949c8b32c574a373ba4ea1738fb0dc7b8->enter($__internal_20381afbe8e402ec306c977dfc38a33949c8b32c574a373ba4ea1738fb0dc7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/chartData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 102
        $this->displayBlock('cumstomScript', $context, $blocks);
        
        $__internal_20381afbe8e402ec306c977dfc38a33949c8b32c574a373ba4ea1738fb0dc7b8->leave($__internal_20381afbe8e402ec306c977dfc38a33949c8b32c574a373ba4ea1738fb0dc7b8_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_4977f5674fd07929dbdfaeff2d147c374ad4a21d7d53364d2eb22460ae834395 = $this->env->getExtension("native_profiler");
        $__internal_4977f5674fd07929dbdfaeff2d147c374ad4a21d7d53364d2eb22460ae834395->enter($__internal_4977f5674fd07929dbdfaeff2d147c374ad4a21d7d53364d2eb22460ae834395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 103
        echo "
    ";
        
        $__internal_4977f5674fd07929dbdfaeff2d147c374ad4a21d7d53364d2eb22460ae834395->leave($__internal_4977f5674fd07929dbdfaeff2d147c374ad4a21d7d53364d2eb22460ae834395_prof);

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
        return array (  362 => 103,  350 => 102,  346 => 101,  342 => 100,  338 => 99,  334 => 98,  330 => 97,  326 => 96,  322 => 95,  318 => 94,  314 => 93,  307 => 88,  301 => 87,  290 => 79,  278 => 78,  267 => 63,  258 => 64,  256 => 63,  246 => 55,  240 => 54,  229 => 42,  216 => 80,  214 => 79,  210 => 78,  197 => 67,  195 => 54,  183 => 45,  179 => 44,  172 => 42,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 106,  59 => 87,  57 => 36,  53 => 35,  47 => 33,  45 => 12,  40 => 11,  38 => 4,  33 => 1,);
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
/*             <li class="ts-account">*/
/*                 <a href="#"><img src="{{ asset('bundles/nsep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> {% block authenticatedUsername %}{% endblock %} <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="{{ path('own_account') }}">Edit Account</a></li>*/
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
