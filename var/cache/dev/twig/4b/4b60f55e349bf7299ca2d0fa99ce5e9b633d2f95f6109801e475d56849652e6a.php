<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0bcdb9d26e6696f6e3bfd64e18aa55e06a8eefff9b8b7e559cf0a5d8e9841fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ce6f5b1f6ca53b7b3ccd1fd49c9342f91206ce2c9499cc47678216aff64daad4 = $this->env->getExtension("native_profiler");
        $__internal_ce6f5b1f6ca53b7b3ccd1fd49c9342f91206ce2c9499cc47678216aff64daad4->enter($__internal_ce6f5b1f6ca53b7b3ccd1fd49c9342f91206ce2c9499cc47678216aff64daad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6f5b1f6ca53b7b3ccd1fd49c9342f91206ce2c9499cc47678216aff64daad4->leave($__internal_ce6f5b1f6ca53b7b3ccd1fd49c9342f91206ce2c9499cc47678216aff64daad4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef250fcf9e6ab25549f67e90a17815b50b60b34f15ed7f8f3827e08247976720 = $this->env->getExtension("native_profiler");
        $__internal_ef250fcf9e6ab25549f67e90a17815b50b60b34f15ed7f8f3827e08247976720->enter($__internal_ef250fcf9e6ab25549f67e90a17815b50b60b34f15ed7f8f3827e08247976720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ef250fcf9e6ab25549f67e90a17815b50b60b34f15ed7f8f3827e08247976720->leave($__internal_ef250fcf9e6ab25549f67e90a17815b50b60b34f15ed7f8f3827e08247976720_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
