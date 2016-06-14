<?php

/* @NSEP/Default/userid.html.twig */
class __TwigTemplate_ee6dff77386330ee0c3c9a1efe40e81a54aca12805595d6eca39859d54cf1ae3 extends Twig_Template
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
        $__internal_504fe1edfd53c143d2436ad22b1876d7b4851a08fc75ce52b6a5f86118612b2a = $this->env->getExtension("native_profiler");
        $__internal_504fe1edfd53c143d2436ad22b1876d7b4851a08fc75ce52b6a5f86118612b2a->enter($__internal_504fe1edfd53c143d2436ad22b1876d7b4851a08fc75ce52b6a5f86118612b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_504fe1edfd53c143d2436ad22b1876d7b4851a08fc75ce52b6a5f86118612b2a->leave($__internal_504fe1edfd53c143d2436ad22b1876d7b4851a08fc75ce52b6a5f86118612b2a_prof);

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
