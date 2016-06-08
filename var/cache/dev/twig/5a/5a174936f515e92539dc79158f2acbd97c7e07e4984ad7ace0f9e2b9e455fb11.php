<?php

/* @NSEP/Default/userid.html.twig */
class __TwigTemplate_4914e909a543b3849922c8253da2299f909218209346b1da49ac7e1d85e97b1d extends Twig_Template
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
        $__internal_fc0e00abd059279e0d3795b169168d7bce22c465008e5bd65a44c4bb0baa82c2 = $this->env->getExtension("native_profiler");
        $__internal_fc0e00abd059279e0d3795b169168d7bce22c465008e5bd65a44c4bb0baa82c2->enter($__internal_fc0e00abd059279e0d3795b169168d7bce22c465008e5bd65a44c4bb0baa82c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_fc0e00abd059279e0d3795b169168d7bce22c465008e5bd65a44c4bb0baa82c2->leave($__internal_fc0e00abd059279e0d3795b169168d7bce22c465008e5bd65a44c4bb0baa82c2_prof);

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
