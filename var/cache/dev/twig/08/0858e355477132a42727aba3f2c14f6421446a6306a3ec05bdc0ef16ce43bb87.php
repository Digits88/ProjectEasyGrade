<?php

/* :default:index.html.twig */
class __TwigTemplate_171dd70dae51ee7946af2ac87b7c8e9ecb9bdad033bf8f2d90e1a755bf14cf5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_6c769c722ca2337e78c87454251a7d54d4fcfe95c1988ba8bf19ac2caf7cfb93 = $this->env->getExtension("native_profiler");
        $__internal_6c769c722ca2337e78c87454251a7d54d4fcfe95c1988ba8bf19ac2caf7cfb93->enter($__internal_6c769c722ca2337e78c87454251a7d54d4fcfe95c1988ba8bf19ac2caf7cfb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c769c722ca2337e78c87454251a7d54d4fcfe95c1988ba8bf19ac2caf7cfb93->leave($__internal_6c769c722ca2337e78c87454251a7d54d4fcfe95c1988ba8bf19ac2caf7cfb93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b60beabd8257c65088be137b8b083ea0b2ec84c6e80abd6a9f5a9a1a5257f9 = $this->env->getExtension("native_profiler");
        $__internal_d9b60beabd8257c65088be137b8b083ea0b2ec84c6e80abd6a9f5a9a1a5257f9->enter($__internal_d9b60beabd8257c65088be137b8b083ea0b2ec84c6e80abd6a9f5a9a1a5257f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_d9b60beabd8257c65088be137b8b083ea0b2ec84c6e80abd6a9f5a9a1a5257f9->leave($__internal_d9b60beabd8257c65088be137b8b083ea0b2ec84c6e80abd6a9f5a9a1a5257f9_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
