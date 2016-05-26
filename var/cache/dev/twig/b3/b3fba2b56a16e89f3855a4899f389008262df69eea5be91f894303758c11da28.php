<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_00eaee56ef811151df6c6a69c205ec1f1afe5bf75aee1f234fa2b39fc6495069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bf9782c8386dac3e4adde9eb8d3b09982a821a949eb29226d5a568e7d93f4ae6 = $this->env->getExtension("native_profiler");
        $__internal_bf9782c8386dac3e4adde9eb8d3b09982a821a949eb29226d5a568e7d93f4ae6->enter($__internal_bf9782c8386dac3e4adde9eb8d3b09982a821a949eb29226d5a568e7d93f4ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9782c8386dac3e4adde9eb8d3b09982a821a949eb29226d5a568e7d93f4ae6->leave($__internal_bf9782c8386dac3e4adde9eb8d3b09982a821a949eb29226d5a568e7d93f4ae6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ce64c43c0966301d81a1bfc87f84403ee1bc1cfc6b76a4cc8b73ab7c90dee50 = $this->env->getExtension("native_profiler");
        $__internal_0ce64c43c0966301d81a1bfc87f84403ee1bc1cfc6b76a4cc8b73ab7c90dee50->enter($__internal_0ce64c43c0966301d81a1bfc87f84403ee1bc1cfc6b76a4cc8b73ab7c90dee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0ce64c43c0966301d81a1bfc87f84403ee1bc1cfc6b76a4cc8b73ab7c90dee50->leave($__internal_0ce64c43c0966301d81a1bfc87f84403ee1bc1cfc6b76a4cc8b73ab7c90dee50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
