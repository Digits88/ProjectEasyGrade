<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e081d50d909a191256275eecc0fb8151526f7d0d6240762fbab5b9d3ce31518c extends Twig_Template
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
        $__internal_6c7e09555a379dea498ea07d8f0881f3c59190bc418542e8ecf33233c8dff0c3 = $this->env->getExtension("native_profiler");
        $__internal_6c7e09555a379dea498ea07d8f0881f3c59190bc418542e8ecf33233c8dff0c3->enter($__internal_6c7e09555a379dea498ea07d8f0881f3c59190bc418542e8ecf33233c8dff0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6c7e09555a379dea498ea07d8f0881f3c59190bc418542e8ecf33233c8dff0c3->leave($__internal_6c7e09555a379dea498ea07d8f0881f3c59190bc418542e8ecf33233c8dff0c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
