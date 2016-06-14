<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f048c3944c65f193a07637af00f3a967346ebbf42805730408ed8cc80df3b89e extends Twig_Template
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
        $__internal_033ba116236f0598fab8c15b97f266e29aedea630f3226507a250af53693e1ab = $this->env->getExtension("native_profiler");
        $__internal_033ba116236f0598fab8c15b97f266e29aedea630f3226507a250af53693e1ab->enter($__internal_033ba116236f0598fab8c15b97f266e29aedea630f3226507a250af53693e1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_033ba116236f0598fab8c15b97f266e29aedea630f3226507a250af53693e1ab->leave($__internal_033ba116236f0598fab8c15b97f266e29aedea630f3226507a250af53693e1ab_prof);

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
