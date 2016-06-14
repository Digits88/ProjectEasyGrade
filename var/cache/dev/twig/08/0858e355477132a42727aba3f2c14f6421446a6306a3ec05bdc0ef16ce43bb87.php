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
        $__internal_8fc495c495d5a60361dff9620a5578a9949d13132afc0f272912080f6b92a945 = $this->env->getExtension("native_profiler");
        $__internal_8fc495c495d5a60361dff9620a5578a9949d13132afc0f272912080f6b92a945->enter($__internal_8fc495c495d5a60361dff9620a5578a9949d13132afc0f272912080f6b92a945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc495c495d5a60361dff9620a5578a9949d13132afc0f272912080f6b92a945->leave($__internal_8fc495c495d5a60361dff9620a5578a9949d13132afc0f272912080f6b92a945_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6881c9d404dfb76b8ab14c681d71807e454a6ddbaee17a5d07facb3e5c8c058 = $this->env->getExtension("native_profiler");
        $__internal_e6881c9d404dfb76b8ab14c681d71807e454a6ddbaee17a5d07facb3e5c8c058->enter($__internal_e6881c9d404dfb76b8ab14c681d71807e454a6ddbaee17a5d07facb3e5c8c058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_e6881c9d404dfb76b8ab14c681d71807e454a6ddbaee17a5d07facb3e5c8c058->leave($__internal_e6881c9d404dfb76b8ab14c681d71807e454a6ddbaee17a5d07facb3e5c8c058_prof);

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
