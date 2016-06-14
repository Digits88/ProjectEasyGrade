<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b18f2dbe8dcfb6fe182ce598c7bb863ca3139124f8c56bc0ba4e1ccf1eebe348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2298b9f0793f87975e8bed896c0f311dd9b8d9110f8eec6e4e48972f74be7f16 = $this->env->getExtension("native_profiler");
        $__internal_2298b9f0793f87975e8bed896c0f311dd9b8d9110f8eec6e4e48972f74be7f16->enter($__internal_2298b9f0793f87975e8bed896c0f311dd9b8d9110f8eec6e4e48972f74be7f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2298b9f0793f87975e8bed896c0f311dd9b8d9110f8eec6e4e48972f74be7f16->leave($__internal_2298b9f0793f87975e8bed896c0f311dd9b8d9110f8eec6e4e48972f74be7f16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adc1af4b57c81b11f2d048646e5c6aacf58c3ff3cd32ba8f5cebc3f9edd5d93e = $this->env->getExtension("native_profiler");
        $__internal_adc1af4b57c81b11f2d048646e5c6aacf58c3ff3cd32ba8f5cebc3f9edd5d93e->enter($__internal_adc1af4b57c81b11f2d048646e5c6aacf58c3ff3cd32ba8f5cebc3f9edd5d93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_adc1af4b57c81b11f2d048646e5c6aacf58c3ff3cd32ba8f5cebc3f9edd5d93e->leave($__internal_adc1af4b57c81b11f2d048646e5c6aacf58c3ff3cd32ba8f5cebc3f9edd5d93e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
