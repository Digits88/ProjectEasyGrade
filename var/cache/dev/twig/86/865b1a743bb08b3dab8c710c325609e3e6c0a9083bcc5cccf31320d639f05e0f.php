<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_19bda4b2bdbddf4924875e9ce21fb65be0955519353e373f39c29e852c67a94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d3ebb1b84ae736ed5b392869db42a848d9d808acb45fff17ddcd4bd76c41f64a = $this->env->getExtension("native_profiler");
        $__internal_d3ebb1b84ae736ed5b392869db42a848d9d808acb45fff17ddcd4bd76c41f64a->enter($__internal_d3ebb1b84ae736ed5b392869db42a848d9d808acb45fff17ddcd4bd76c41f64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ebb1b84ae736ed5b392869db42a848d9d808acb45fff17ddcd4bd76c41f64a->leave($__internal_d3ebb1b84ae736ed5b392869db42a848d9d808acb45fff17ddcd4bd76c41f64a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62e7c0bc9637094276e24cbaf951b9717ed4cfc183018d93a1f97d78bc7d0f33 = $this->env->getExtension("native_profiler");
        $__internal_62e7c0bc9637094276e24cbaf951b9717ed4cfc183018d93a1f97d78bc7d0f33->enter($__internal_62e7c0bc9637094276e24cbaf951b9717ed4cfc183018d93a1f97d78bc7d0f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_62e7c0bc9637094276e24cbaf951b9717ed4cfc183018d93a1f97d78bc7d0f33->leave($__internal_62e7c0bc9637094276e24cbaf951b9717ed4cfc183018d93a1f97d78bc7d0f33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
