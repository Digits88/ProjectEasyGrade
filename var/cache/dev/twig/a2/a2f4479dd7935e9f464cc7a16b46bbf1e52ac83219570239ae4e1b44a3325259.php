<?php

/* NSEPBundle:Default:graph.html.twig */
class __TwigTemplate_b2b18741016192c16ef11823cc69def35bea7e7deb926f16eb008835864f2bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NSEPBundle:Default:graph.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8ec8d1cdb86fd2a652159f3f9e4efc65fe51c5e683bdc719ec367965366dfac = $this->env->getExtension("native_profiler");
        $__internal_c8ec8d1cdb86fd2a652159f3f9e4efc65fe51c5e683bdc719ec367965366dfac->enter($__internal_c8ec8d1cdb86fd2a652159f3f9e4efc65fe51c5e683bdc719ec367965366dfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:graph.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ec8d1cdb86fd2a652159f3f9e4efc65fe51c5e683bdc719ec367965366dfac->leave($__internal_c8ec8d1cdb86fd2a652159f3f9e4efc65fe51c5e683bdc719ec367965366dfac_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_33d4e7186b62c7a337bc9899b58065175266e35a5d3b7f4689c578b527beb09e = $this->env->getExtension("native_profiler");
        $__internal_33d4e7186b62c7a337bc9899b58065175266e35a5d3b7f4689c578b527beb09e->enter($__internal_33d4e7186b62c7a337bc9899b58065175266e35a5d3b7f4689c578b527beb09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_33d4e7186b62c7a337bc9899b58065175266e35a5d3b7f4689c578b527beb09e->leave($__internal_33d4e7186b62c7a337bc9899b58065175266e35a5d3b7f4689c578b527beb09e_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_f801726c4674d62a14c774de440ceb90cad2decb6222f36b26ae43343d651c0d = $this->env->getExtension("native_profiler");
        $__internal_f801726c4674d62a14c774de440ceb90cad2decb6222f36b26ae43343d651c0d->enter($__internal_f801726c4674d62a14c774de440ceb90cad2decb6222f36b26ae43343d651c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "

<div class=\"col-md-4\">
    <div class=\"box box-solid\">
        <div class=\"box-header\">
            <h3 class=\"box-title text-warning\">Sparkline Bar</h3>

            <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class=\"box-body text-center\">
            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"100px\" data-bar-Width=\"14\" data-bar-Spacing=\"7\" data-bar-Color=\"#f39c12\">
                6,4,8, 9, 10, 5, 13, 18, 21, 7, 9
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->


";
        
        $__internal_f801726c4674d62a14c774de440ceb90cad2decb6222f36b26ae43343d651c0d->leave($__internal_f801726c4674d62a14c774de440ceb90cad2decb6222f36b26ae43343d651c0d_prof);

    }

    public function getTemplateName()
    {
        return "NSEPBundle:Default:graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/* */
/* */
/* <div class="col-md-4">*/
/*     <div class="box box-solid">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title text-warning">Sparkline Bar</h3>*/
/* */
/*             <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.box-header -->*/
/*         <div class="box-body text-center">*/
/*             <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">*/
/*                 6,4,8, 9, 10, 5, 13, 18, 21, 7, 9*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.box-body -->*/
/*     </div>*/
/*     <!-- /.box -->*/
/* </div>*/
/* <!-- /.col -->*/
/* </div>*/
/* <!-- /.row -->*/
/* */
/* */
/* {% endblock contentdetail %}*/
