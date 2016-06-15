<?php

/* default/index.html.twig */
class __TwigTemplate_9b778da5ef0c799d79463112e3f809cfe08c5c95d80075f34b6070041ff3535b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6921868e042d0a3859e81f6a1e8d20d0cf70f0eafd0dd5d43ee5c36303b54b2d = $this->env->getExtension("native_profiler");
        $__internal_6921868e042d0a3859e81f6a1e8d20d0cf70f0eafd0dd5d43ee5c36303b54b2d->enter($__internal_6921868e042d0a3859e81f6a1e8d20d0cf70f0eafd0dd5d43ee5c36303b54b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6921868e042d0a3859e81f6a1e8d20d0cf70f0eafd0dd5d43ee5c36303b54b2d->leave($__internal_6921868e042d0a3859e81f6a1e8d20d0cf70f0eafd0dd5d43ee5c36303b54b2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f331ea489bc05469567f83250ef1c0c65715de04c7065035093f7d6f3c6cde = $this->env->getExtension("native_profiler");
        $__internal_66f331ea489bc05469567f83250ef1c0c65715de04c7065035093f7d6f3c6cde->enter($__internal_66f331ea489bc05469567f83250ef1c0c65715de04c7065035093f7d6f3c6cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_66f331ea489bc05469567f83250ef1c0c65715de04c7065035093f7d6f3c6cde->leave($__internal_66f331ea489bc05469567f83250ef1c0c65715de04c7065035093f7d6f3c6cde_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     {{ id }}*/
/* {% endblock %}*/
/* */
