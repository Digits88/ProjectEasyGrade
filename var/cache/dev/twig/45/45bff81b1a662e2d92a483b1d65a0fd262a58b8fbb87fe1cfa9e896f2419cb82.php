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
        $__internal_f45f1412122cfd454294cf1ddb428b69f83cbe3f22b69d1d4784ef20114cf879 = $this->env->getExtension("native_profiler");
        $__internal_f45f1412122cfd454294cf1ddb428b69f83cbe3f22b69d1d4784ef20114cf879->enter($__internal_f45f1412122cfd454294cf1ddb428b69f83cbe3f22b69d1d4784ef20114cf879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f45f1412122cfd454294cf1ddb428b69f83cbe3f22b69d1d4784ef20114cf879->leave($__internal_f45f1412122cfd454294cf1ddb428b69f83cbe3f22b69d1d4784ef20114cf879_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_413d6c109c8f3df507a0ebf6583531b72e432e0f1ff214d43da035ba408b2040 = $this->env->getExtension("native_profiler");
        $__internal_413d6c109c8f3df507a0ebf6583531b72e432e0f1ff214d43da035ba408b2040->enter($__internal_413d6c109c8f3df507a0ebf6583531b72e432e0f1ff214d43da035ba408b2040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_413d6c109c8f3df507a0ebf6583531b72e432e0f1ff214d43da035ba408b2040->leave($__internal_413d6c109c8f3df507a0ebf6583531b72e432e0f1ff214d43da035ba408b2040_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_95dac4db43d9f0ed917665c1345886ae4a663923ba2ac9ad98121732bfeb0409 = $this->env->getExtension("native_profiler");
        $__internal_95dac4db43d9f0ed917665c1345886ae4a663923ba2ac9ad98121732bfeb0409->enter($__internal_95dac4db43d9f0ed917665c1345886ae4a663923ba2ac9ad98121732bfeb0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95dac4db43d9f0ed917665c1345886ae4a663923ba2ac9ad98121732bfeb0409->leave($__internal_95dac4db43d9f0ed917665c1345886ae4a663923ba2ac9ad98121732bfeb0409_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afb87ae3acf9502b90d8c4eb31457a4589bb2a9e956a474bcc0ce615d773efed = $this->env->getExtension("native_profiler");
        $__internal_afb87ae3acf9502b90d8c4eb31457a4589bb2a9e956a474bcc0ce615d773efed->enter($__internal_afb87ae3acf9502b90d8c4eb31457a4589bb2a9e956a474bcc0ce615d773efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_afb87ae3acf9502b90d8c4eb31457a4589bb2a9e956a474bcc0ce615d773efed->leave($__internal_afb87ae3acf9502b90d8c4eb31457a4589bb2a9e956a474bcc0ce615d773efed_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_edaf30189eb139e4264cc4d60ede8862d8e7c09825b1d425b065c15818597cac = $this->env->getExtension("native_profiler");
        $__internal_edaf30189eb139e4264cc4d60ede8862d8e7c09825b1d425b065c15818597cac->enter($__internal_edaf30189eb139e4264cc4d60ede8862d8e7c09825b1d425b065c15818597cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_edaf30189eb139e4264cc4d60ede8862d8e7c09825b1d425b065c15818597cac->leave($__internal_edaf30189eb139e4264cc4d60ede8862d8e7c09825b1d425b065c15818597cac_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c3dc1e48c235bf6145e2025851f8a5c1975b3ea268caa00b2816f6da05a73a3c = $this->env->getExtension("native_profiler");
        $__internal_c3dc1e48c235bf6145e2025851f8a5c1975b3ea268caa00b2816f6da05a73a3c->enter($__internal_c3dc1e48c235bf6145e2025851f8a5c1975b3ea268caa00b2816f6da05a73a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_c3dc1e48c235bf6145e2025851f8a5c1975b3ea268caa00b2816f6da05a73a3c->leave($__internal_c3dc1e48c235bf6145e2025851f8a5c1975b3ea268caa00b2816f6da05a73a3c_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_e736405efff08bd5638cee527b0d2cd16e0053d073a74da691cd88082efa035a = $this->env->getExtension("native_profiler");
        $__internal_e736405efff08bd5638cee527b0d2cd16e0053d073a74da691cd88082efa035a->enter($__internal_e736405efff08bd5638cee527b0d2cd16e0053d073a74da691cd88082efa035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_e736405efff08bd5638cee527b0d2cd16e0053d073a74da691cd88082efa035a->leave($__internal_e736405efff08bd5638cee527b0d2cd16e0053d073a74da691cd88082efa035a_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_ca573a3642a185bad26ed1dfce651fa2763ccd9efd245d9505ee96d54ddd634a = $this->env->getExtension("native_profiler");
        $__internal_ca573a3642a185bad26ed1dfce651fa2763ccd9efd245d9505ee96d54ddd634a->enter($__internal_ca573a3642a185bad26ed1dfce651fa2763ccd9efd245d9505ee96d54ddd634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_ca573a3642a185bad26ed1dfce651fa2763ccd9efd245d9505ee96d54ddd634a->leave($__internal_ca573a3642a185bad26ed1dfce651fa2763ccd9efd245d9505ee96d54ddd634a_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_fd63ebcc86b0da737a5a48bd88d3bfe141667f96a5ac2aa33d9f9c6ef0c4c72b = $this->env->getExtension("native_profiler");
        $__internal_fd63ebcc86b0da737a5a48bd88d3bfe141667f96a5ac2aa33d9f9c6ef0c4c72b->enter($__internal_fd63ebcc86b0da737a5a48bd88d3bfe141667f96a5ac2aa33d9f9c6ef0c4c72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_fd63ebcc86b0da737a5a48bd88d3bfe141667f96a5ac2aa33d9f9c6ef0c4c72b->leave($__internal_fd63ebcc86b0da737a5a48bd88d3bfe141667f96a5ac2aa33d9f9c6ef0c4c72b_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_d13350731b815900a4c4241081ebee5d2ad202bcf815cf54c2a9488a423f01ca = $this->env->getExtension("native_profiler");
        $__internal_d13350731b815900a4c4241081ebee5d2ad202bcf815cf54c2a9488a423f01ca->enter($__internal_d13350731b815900a4c4241081ebee5d2ad202bcf815cf54c2a9488a423f01ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_d13350731b815900a4c4241081ebee5d2ad202bcf815cf54c2a9488a423f01ca->leave($__internal_d13350731b815900a4c4241081ebee5d2ad202bcf815cf54c2a9488a423f01ca_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72a58e0afb7d1dea6de3f5f07366e5bb0e19cd29295ab6692cfbcb6fedfe87cc = $this->env->getExtension("native_profiler");
        $__internal_72a58e0afb7d1dea6de3f5f07366e5bb0e19cd29295ab6692cfbcb6fedfe87cc->enter($__internal_72a58e0afb7d1dea6de3f5f07366e5bb0e19cd29295ab6692cfbcb6fedfe87cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_72a58e0afb7d1dea6de3f5f07366e5bb0e19cd29295ab6692cfbcb6fedfe87cc->leave($__internal_72a58e0afb7d1dea6de3f5f07366e5bb0e19cd29295ab6692cfbcb6fedfe87cc_prof);

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
