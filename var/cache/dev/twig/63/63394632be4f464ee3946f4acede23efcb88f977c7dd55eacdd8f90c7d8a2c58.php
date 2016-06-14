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
        $__internal_3e3e8c94491f07a568c0c204b5d22c02453b715fa6014bb3cc36ea67089b3038 = $this->env->getExtension("native_profiler");
        $__internal_3e3e8c94491f07a568c0c204b5d22c02453b715fa6014bb3cc36ea67089b3038->enter($__internal_3e3e8c94491f07a568c0c204b5d22c02453b715fa6014bb3cc36ea67089b3038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3e8c94491f07a568c0c204b5d22c02453b715fa6014bb3cc36ea67089b3038->leave($__internal_3e3e8c94491f07a568c0c204b5d22c02453b715fa6014bb3cc36ea67089b3038_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e1357a05a12ff986aa89785895bb0eefe7b3dd825bcbab9ad259c0caea6baf2 = $this->env->getExtension("native_profiler");
        $__internal_1e1357a05a12ff986aa89785895bb0eefe7b3dd825bcbab9ad259c0caea6baf2->enter($__internal_1e1357a05a12ff986aa89785895bb0eefe7b3dd825bcbab9ad259c0caea6baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1e1357a05a12ff986aa89785895bb0eefe7b3dd825bcbab9ad259c0caea6baf2->leave($__internal_1e1357a05a12ff986aa89785895bb0eefe7b3dd825bcbab9ad259c0caea6baf2_prof);

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
