<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a351236a17ed1e8cb2ba49544551ecb8da1e52b962b4def9a03b2fb7926a3be2 extends Twig_Template
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
        $__internal_fe6edb85663357b9e08d39d761e24a13d8b18a364c828399aa948f3b3203c2c4 = $this->env->getExtension("native_profiler");
        $__internal_fe6edb85663357b9e08d39d761e24a13d8b18a364c828399aa948f3b3203c2c4->enter($__internal_fe6edb85663357b9e08d39d761e24a13d8b18a364c828399aa948f3b3203c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fe6edb85663357b9e08d39d761e24a13d8b18a364c828399aa948f3b3203c2c4->leave($__internal_fe6edb85663357b9e08d39d761e24a13d8b18a364c828399aa948f3b3203c2c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
