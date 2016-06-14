<?php

/* NSEPBundle:Default:userid.html.twig */
class __TwigTemplate_d9c9892228faee97d0248ec0af0368fe168e3ff022d91f4cfafa8ec64fe45156 extends Twig_Template
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
        $__internal_34dc2c43d4ac88651db44284eae01f4b1b57827b4da5be99804ec6b1f5a4595a = $this->env->getExtension("native_profiler");
        $__internal_34dc2c43d4ac88651db44284eae01f4b1b57827b4da5be99804ec6b1f5a4595a->enter($__internal_34dc2c43d4ac88651db44284eae01f4b1b57827b4da5be99804ec6b1f5a4595a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_34dc2c43d4ac88651db44284eae01f4b1b57827b4da5be99804ec6b1f5a4595a->leave($__internal_34dc2c43d4ac88651db44284eae01f4b1b57827b4da5be99804ec6b1f5a4595a_prof);

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
