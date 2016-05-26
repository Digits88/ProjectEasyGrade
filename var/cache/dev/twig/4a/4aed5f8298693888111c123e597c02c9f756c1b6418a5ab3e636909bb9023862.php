<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2a68433be5509b94792d2e0756159501492607457b14ee24383225431c01e077 extends Twig_Template
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
        $__internal_95d6a3ed3df7f70edb2ede208aa764a5f963347903dc5d5b9c3d8588acb68a95 = $this->env->getExtension("native_profiler");
        $__internal_95d6a3ed3df7f70edb2ede208aa764a5f963347903dc5d5b9c3d8588acb68a95->enter($__internal_95d6a3ed3df7f70edb2ede208aa764a5f963347903dc5d5b9c3d8588acb68a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95d6a3ed3df7f70edb2ede208aa764a5f963347903dc5d5b9c3d8588acb68a95->leave($__internal_95d6a3ed3df7f70edb2ede208aa764a5f963347903dc5d5b9c3d8588acb68a95_prof);

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
