<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d3388d657fca6ab5658586b887385093adeff08b43b272f0e8a65d4f2d64228a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4eae71823a494379e6ea3ec21be99dfd3c66d3d75ce3e6a08866e7d836963d0a = $this->env->getExtension("native_profiler");
        $__internal_4eae71823a494379e6ea3ec21be99dfd3c66d3d75ce3e6a08866e7d836963d0a->enter($__internal_4eae71823a494379e6ea3ec21be99dfd3c66d3d75ce3e6a08866e7d836963d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eae71823a494379e6ea3ec21be99dfd3c66d3d75ce3e6a08866e7d836963d0a->leave($__internal_4eae71823a494379e6ea3ec21be99dfd3c66d3d75ce3e6a08866e7d836963d0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68188a35a2d29508dd0552682acba7a88fe8fc0645deaa8934fad67500c39163 = $this->env->getExtension("native_profiler");
        $__internal_68188a35a2d29508dd0552682acba7a88fe8fc0645deaa8934fad67500c39163->enter($__internal_68188a35a2d29508dd0552682acba7a88fe8fc0645deaa8934fad67500c39163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_68188a35a2d29508dd0552682acba7a88fe8fc0645deaa8934fad67500c39163->leave($__internal_68188a35a2d29508dd0552682acba7a88fe8fc0645deaa8934fad67500c39163_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
