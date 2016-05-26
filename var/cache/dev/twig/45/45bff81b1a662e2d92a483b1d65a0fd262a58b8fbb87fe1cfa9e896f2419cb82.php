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
        $__internal_117e62619cc598fe37b0d2aaeccc1e2a55df3a8a3b6a4b21faff224150f4aec9 = $this->env->getExtension("native_profiler");
        $__internal_117e62619cc598fe37b0d2aaeccc1e2a55df3a8a3b6a4b21faff224150f4aec9->enter($__internal_117e62619cc598fe37b0d2aaeccc1e2a55df3a8a3b6a4b21faff224150f4aec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_117e62619cc598fe37b0d2aaeccc1e2a55df3a8a3b6a4b21faff224150f4aec9->leave($__internal_117e62619cc598fe37b0d2aaeccc1e2a55df3a8a3b6a4b21faff224150f4aec9_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_1d003f59008226313895e3516755afda4ed49ccc73303a1cef7f11fa14fcd373 = $this->env->getExtension("native_profiler");
        $__internal_1d003f59008226313895e3516755afda4ed49ccc73303a1cef7f11fa14fcd373->enter($__internal_1d003f59008226313895e3516755afda4ed49ccc73303a1cef7f11fa14fcd373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_1d003f59008226313895e3516755afda4ed49ccc73303a1cef7f11fa14fcd373->leave($__internal_1d003f59008226313895e3516755afda4ed49ccc73303a1cef7f11fa14fcd373_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ab8e0851a05a8db0defa291560e855b0a7941804f9a1200ce3bb227c683702c = $this->env->getExtension("native_profiler");
        $__internal_5ab8e0851a05a8db0defa291560e855b0a7941804f9a1200ce3bb227c683702c->enter($__internal_5ab8e0851a05a8db0defa291560e855b0a7941804f9a1200ce3bb227c683702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ab8e0851a05a8db0defa291560e855b0a7941804f9a1200ce3bb227c683702c->leave($__internal_5ab8e0851a05a8db0defa291560e855b0a7941804f9a1200ce3bb227c683702c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb894320405aa5850398414606eff12a0e2c03a6d014c1deddc55f24543d998f = $this->env->getExtension("native_profiler");
        $__internal_fb894320405aa5850398414606eff12a0e2c03a6d014c1deddc55f24543d998f->enter($__internal_fb894320405aa5850398414606eff12a0e2c03a6d014c1deddc55f24543d998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fb894320405aa5850398414606eff12a0e2c03a6d014c1deddc55f24543d998f->leave($__internal_fb894320405aa5850398414606eff12a0e2c03a6d014c1deddc55f24543d998f_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_c39b062badeb7d299014b5c5f412bee59859f16b7c085f986577eeadf788e47f = $this->env->getExtension("native_profiler");
        $__internal_c39b062badeb7d299014b5c5f412bee59859f16b7c085f986577eeadf788e47f->enter($__internal_c39b062badeb7d299014b5c5f412bee59859f16b7c085f986577eeadf788e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c39b062badeb7d299014b5c5f412bee59859f16b7c085f986577eeadf788e47f->leave($__internal_c39b062badeb7d299014b5c5f412bee59859f16b7c085f986577eeadf788e47f_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_ce7c183283e37a7a081659f3bf1dbe9f71027315f462fba172c3f0db94ec64fa = $this->env->getExtension("native_profiler");
        $__internal_ce7c183283e37a7a081659f3bf1dbe9f71027315f462fba172c3f0db94ec64fa->enter($__internal_ce7c183283e37a7a081659f3bf1dbe9f71027315f462fba172c3f0db94ec64fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_ce7c183283e37a7a081659f3bf1dbe9f71027315f462fba172c3f0db94ec64fa->leave($__internal_ce7c183283e37a7a081659f3bf1dbe9f71027315f462fba172c3f0db94ec64fa_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_ab29674187077b7b43b5e09ce8a84f162b8693d79507f51aa5991c9248c02240 = $this->env->getExtension("native_profiler");
        $__internal_ab29674187077b7b43b5e09ce8a84f162b8693d79507f51aa5991c9248c02240->enter($__internal_ab29674187077b7b43b5e09ce8a84f162b8693d79507f51aa5991c9248c02240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_ab29674187077b7b43b5e09ce8a84f162b8693d79507f51aa5991c9248c02240->leave($__internal_ab29674187077b7b43b5e09ce8a84f162b8693d79507f51aa5991c9248c02240_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_6d5de5339dca77a0792e1e71e16ccdef2bb51835f6c818f82394f5312678fd22 = $this->env->getExtension("native_profiler");
        $__internal_6d5de5339dca77a0792e1e71e16ccdef2bb51835f6c818f82394f5312678fd22->enter($__internal_6d5de5339dca77a0792e1e71e16ccdef2bb51835f6c818f82394f5312678fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_6d5de5339dca77a0792e1e71e16ccdef2bb51835f6c818f82394f5312678fd22->leave($__internal_6d5de5339dca77a0792e1e71e16ccdef2bb51835f6c818f82394f5312678fd22_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_4c84331347b99ccd925b0f19440ff8f612ceb8fc36c6263bd5303a8ab861cb03 = $this->env->getExtension("native_profiler");
        $__internal_4c84331347b99ccd925b0f19440ff8f612ceb8fc36c6263bd5303a8ab861cb03->enter($__internal_4c84331347b99ccd925b0f19440ff8f612ceb8fc36c6263bd5303a8ab861cb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_4c84331347b99ccd925b0f19440ff8f612ceb8fc36c6263bd5303a8ab861cb03->leave($__internal_4c84331347b99ccd925b0f19440ff8f612ceb8fc36c6263bd5303a8ab861cb03_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_4c544d9db442529814734c2f23b73775d18110b06025677847d5284183bf425f = $this->env->getExtension("native_profiler");
        $__internal_4c544d9db442529814734c2f23b73775d18110b06025677847d5284183bf425f->enter($__internal_4c544d9db442529814734c2f23b73775d18110b06025677847d5284183bf425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_4c544d9db442529814734c2f23b73775d18110b06025677847d5284183bf425f->leave($__internal_4c544d9db442529814734c2f23b73775d18110b06025677847d5284183bf425f_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4888c763a1607df41f17e2e51c083d71747d3a771052551fa12d69b4d2a31774 = $this->env->getExtension("native_profiler");
        $__internal_4888c763a1607df41f17e2e51c083d71747d3a771052551fa12d69b4d2a31774->enter($__internal_4888c763a1607df41f17e2e51c083d71747d3a771052551fa12d69b4d2a31774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4888c763a1607df41f17e2e51c083d71747d3a771052551fa12d69b4d2a31774->leave($__internal_4888c763a1607df41f17e2e51c083d71747d3a771052551fa12d69b4d2a31774_prof);

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
