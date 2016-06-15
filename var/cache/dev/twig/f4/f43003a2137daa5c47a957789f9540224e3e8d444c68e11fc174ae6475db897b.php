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
        $__internal_4393070fe5ebc13f2fe342d0b47e236953fab75ccc850132be3c8be04b190418 = $this->env->getExtension("native_profiler");
        $__internal_4393070fe5ebc13f2fe342d0b47e236953fab75ccc850132be3c8be04b190418->enter($__internal_4393070fe5ebc13f2fe342d0b47e236953fab75ccc850132be3c8be04b190418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_4393070fe5ebc13f2fe342d0b47e236953fab75ccc850132be3c8be04b190418->leave($__internal_4393070fe5ebc13f2fe342d0b47e236953fab75ccc850132be3c8be04b190418_prof);

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
