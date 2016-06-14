<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_be9067ea89ef8faba5ad5bba80c24b112635ac7979c1c61832a6c037f052d18c extends Twig_Template
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
        $__internal_4c79630e96e0e4ac29d48496ed2f23d5e8355a7538a83fa6e8ff9a95237ad0ce = $this->env->getExtension("native_profiler");
        $__internal_4c79630e96e0e4ac29d48496ed2f23d5e8355a7538a83fa6e8ff9a95237ad0ce->enter($__internal_4c79630e96e0e4ac29d48496ed2f23d5e8355a7538a83fa6e8ff9a95237ad0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4c79630e96e0e4ac29d48496ed2f23d5e8355a7538a83fa6e8ff9a95237ad0ce->leave($__internal_4c79630e96e0e4ac29d48496ed2f23d5e8355a7538a83fa6e8ff9a95237ad0ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
