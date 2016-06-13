<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5610a3cf5249a1c0cc26bd524799bfedf1f34db8506ca6164f1b2d087b4ceb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e96be0278f9881acd1ecbd7b356f015da99279ced4053d220367ab4ba96ecd9e = $this->env->getExtension("native_profiler");
        $__internal_e96be0278f9881acd1ecbd7b356f015da99279ced4053d220367ab4ba96ecd9e->enter($__internal_e96be0278f9881acd1ecbd7b356f015da99279ced4053d220367ab4ba96ecd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96be0278f9881acd1ecbd7b356f015da99279ced4053d220367ab4ba96ecd9e->leave($__internal_e96be0278f9881acd1ecbd7b356f015da99279ced4053d220367ab4ba96ecd9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_419e90d520dd0acfe30058633583d8d291026123c61e34a13521e64e678d57af = $this->env->getExtension("native_profiler");
        $__internal_419e90d520dd0acfe30058633583d8d291026123c61e34a13521e64e678d57af->enter($__internal_419e90d520dd0acfe30058633583d8d291026123c61e34a13521e64e678d57af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_419e90d520dd0acfe30058633583d8d291026123c61e34a13521e64e678d57af->leave($__internal_419e90d520dd0acfe30058633583d8d291026123c61e34a13521e64e678d57af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
