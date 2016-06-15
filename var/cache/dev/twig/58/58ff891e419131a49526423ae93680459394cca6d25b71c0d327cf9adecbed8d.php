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
        $__internal_5121924b09bd249dc24681ed2d572d1cf39692aeac3253cd6115e8a08cef8834 = $this->env->getExtension("native_profiler");
        $__internal_5121924b09bd249dc24681ed2d572d1cf39692aeac3253cd6115e8a08cef8834->enter($__internal_5121924b09bd249dc24681ed2d572d1cf39692aeac3253cd6115e8a08cef8834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/userid.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("NSEPBundle:Default:username"));
        
        $__internal_5121924b09bd249dc24681ed2d572d1cf39692aeac3253cd6115e8a08cef8834->leave($__internal_5121924b09bd249dc24681ed2d572d1cf39692aeac3253cd6115e8a08cef8834_prof);

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
