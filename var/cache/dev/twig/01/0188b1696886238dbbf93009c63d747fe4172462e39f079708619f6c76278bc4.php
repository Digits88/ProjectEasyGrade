<?php

/* NSEPBundle:Default:userid.html.twig */
class __TwigTemplate_f6831e79bd79c6a774989e8526b6fe46654b2399585619610b48f227fb3b5f13 extends Twig_Template
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
        $__internal_bd79ade90d65e8dabbf4d49503b70c5f0b4e0850ec1e05af74fc6afeb3aead82 = $this->env->getExtension("native_profiler");
        $__internal_bd79ade90d65e8dabbf4d49503b70c5f0b4e0850ec1e05af74fc6afeb3aead82->enter($__internal_bd79ade90d65e8dabbf4d49503b70c5f0b4e0850ec1e05af74fc6afeb3aead82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_bd79ade90d65e8dabbf4d49503b70c5f0b4e0850ec1e05af74fc6afeb3aead82->leave($__internal_bd79ade90d65e8dabbf4d49503b70c5f0b4e0850ec1e05af74fc6afeb3aead82_prof);

    }

    public function getTemplateName()
    {
        return "NSEPBundle:Default:userid.html.twig";
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
