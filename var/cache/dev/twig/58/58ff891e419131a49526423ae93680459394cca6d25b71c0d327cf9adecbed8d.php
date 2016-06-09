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
        $__internal_26b3566b6cf1d97cea62a998684bb9c0168fdb644673f950d7aafd3d7c023e81 = $this->env->getExtension("native_profiler");
        $__internal_26b3566b6cf1d97cea62a998684bb9c0168fdb644673f950d7aafd3d7c023e81->enter($__internal_26b3566b6cf1d97cea62a998684bb9c0168fdb644673f950d7aafd3d7c023e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_26b3566b6cf1d97cea62a998684bb9c0168fdb644673f950d7aafd3d7c023e81->leave($__internal_26b3566b6cf1d97cea62a998684bb9c0168fdb644673f950d7aafd3d7c023e81_prof);

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
