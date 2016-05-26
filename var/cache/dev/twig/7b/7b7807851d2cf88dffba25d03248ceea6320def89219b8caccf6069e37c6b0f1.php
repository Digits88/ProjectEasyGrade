<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cda66ff07a32565de3ef566fdb1367f83720b53d5c4b47d95ea61113410dfff7 extends Twig_Template
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
        $__internal_47317b2a6c5fc50a1d2764a33404ef336cd9416bfb152671845f713b3b9b9ffd = $this->env->getExtension("native_profiler");
        $__internal_47317b2a6c5fc50a1d2764a33404ef336cd9416bfb152671845f713b3b9b9ffd->enter($__internal_47317b2a6c5fc50a1d2764a33404ef336cd9416bfb152671845f713b3b9b9ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47317b2a6c5fc50a1d2764a33404ef336cd9416bfb152671845f713b3b9b9ffd->leave($__internal_47317b2a6c5fc50a1d2764a33404ef336cd9416bfb152671845f713b3b9b9ffd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ccf74ebe6177de13e172d557ec9b9fc69d4752fbbcc2f1a6a197c995e0f7e76 = $this->env->getExtension("native_profiler");
        $__internal_6ccf74ebe6177de13e172d557ec9b9fc69d4752fbbcc2f1a6a197c995e0f7e76->enter($__internal_6ccf74ebe6177de13e172d557ec9b9fc69d4752fbbcc2f1a6a197c995e0f7e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6ccf74ebe6177de13e172d557ec9b9fc69d4752fbbcc2f1a6a197c995e0f7e76->leave($__internal_6ccf74ebe6177de13e172d557ec9b9fc69d4752fbbcc2f1a6a197c995e0f7e76_prof);

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
