<?php

/* @NSEP/Default/userid.html.twig */
class __TwigTemplate_f4926667ea4017aa81b751263435cad1218779563fb60d859c0c732817c70ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd46134e49933be992903e1ca30d61678c47af6e0d51760363c06c2391fe15a0 = $this->env->getExtension("native_profiler");
        $__internal_fd46134e49933be992903e1ca30d61678c47af6e0d51760363c06c2391fe15a0->enter($__internal_fd46134e49933be992903e1ca30d61678c47af6e0d51760363c06c2391fe15a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_fd46134e49933be992903e1ca30d61678c47af6e0d51760363c06c2391fe15a0->leave($__internal_fd46134e49933be992903e1ca30d61678c47af6e0d51760363c06c2391fe15a0_prof);

    }

    public function getTemplateName()
    {
        return "@NSEP/Default/userid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('NSEPBundle:Default:username')) }}*/
