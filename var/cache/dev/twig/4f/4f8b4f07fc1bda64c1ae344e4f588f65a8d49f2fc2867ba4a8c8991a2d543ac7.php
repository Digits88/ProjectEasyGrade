<?php

/* @NSEP/Default/graph.html.twig */
class __TwigTemplate_b993beeb4d4defb2255c8f3c38069a61e03771176111748629147c7c1f441295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@NSEP/Default/graph.html.twig", 1);
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
        $__internal_7283faf94486ec7087af4ac2b444634c85143f9ec8bda09645983e337d62d296 = $this->env->getExtension("native_profiler");
        $__internal_7283faf94486ec7087af4ac2b444634c85143f9ec8bda09645983e337d62d296->enter($__internal_7283faf94486ec7087af4ac2b444634c85143f9ec8bda09645983e337d62d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/graph.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7283faf94486ec7087af4ac2b444634c85143f9ec8bda09645983e337d62d296->leave($__internal_7283faf94486ec7087af4ac2b444634c85143f9ec8bda09645983e337d62d296_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_5971978a1aed39a9a39dea72315890884a530c2b01c6ec0c32d130a2a50f98ab = $this->env->getExtension("native_profiler");
        $__internal_5971978a1aed39a9a39dea72315890884a530c2b01c6ec0c32d130a2a50f98ab->enter($__internal_5971978a1aed39a9a39dea72315890884a530c2b01c6ec0c32d130a2a50f98ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_5971978a1aed39a9a39dea72315890884a530c2b01c6ec0c32d130a2a50f98ab->leave($__internal_5971978a1aed39a9a39dea72315890884a530c2b01c6ec0c32d130a2a50f98ab_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_ccbd2ac05fb50c8260380a13b2fca9c55023476e46299e465284dc59a0e3b1fa = $this->env->getExtension("native_profiler");
        $__internal_ccbd2ac05fb50c8260380a13b2fca9c55023476e46299e465284dc59a0e3b1fa->enter($__internal_ccbd2ac05fb50c8260380a13b2fca9c55023476e46299e465284dc59a0e3b1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_ccbd2ac05fb50c8260380a13b2fca9c55023476e46299e465284dc59a0e3b1fa->leave($__internal_ccbd2ac05fb50c8260380a13b2fca9c55023476e46299e465284dc59a0e3b1fa_prof);

    }

    public function getTemplateName()
    {
        return "@NSEP/Default/graph.html.twig";
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
