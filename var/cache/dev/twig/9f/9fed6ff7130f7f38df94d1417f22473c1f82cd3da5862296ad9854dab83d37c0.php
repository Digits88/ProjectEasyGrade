<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8f3c389d209d403dd260896197eb57993daf50a1ca37100f714e4b22f99f49b7 extends Twig_Template
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
        $__internal_0dcc2b3acf202c684ee2fd37ad80d3ce29374e2d1912ee6dcd37518d097e1a07 = $this->env->getExtension("native_profiler");
        $__internal_0dcc2b3acf202c684ee2fd37ad80d3ce29374e2d1912ee6dcd37518d097e1a07->enter($__internal_0dcc2b3acf202c684ee2fd37ad80d3ce29374e2d1912ee6dcd37518d097e1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0dcc2b3acf202c684ee2fd37ad80d3ce29374e2d1912ee6dcd37518d097e1a07->leave($__internal_0dcc2b3acf202c684ee2fd37ad80d3ce29374e2d1912ee6dcd37518d097e1a07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
