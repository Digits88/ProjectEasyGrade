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
        $__internal_a10b15a11512b38656c3a8d9f35c2555138b7db56fcb0c0b6c467f9f825b4696 = $this->env->getExtension("native_profiler");
        $__internal_a10b15a11512b38656c3a8d9f35c2555138b7db56fcb0c0b6c467f9f825b4696->enter($__internal_a10b15a11512b38656c3a8d9f35c2555138b7db56fcb0c0b6c467f9f825b4696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_a10b15a11512b38656c3a8d9f35c2555138b7db56fcb0c0b6c467f9f825b4696->leave($__internal_a10b15a11512b38656c3a8d9f35c2555138b7db56fcb0c0b6c467f9f825b4696_prof);

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
