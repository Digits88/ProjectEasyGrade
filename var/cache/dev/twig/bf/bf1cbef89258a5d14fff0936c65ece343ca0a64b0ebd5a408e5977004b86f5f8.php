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
        $__internal_58db5da5b42d173194c67f596e091ea49fb07c7d0b7e85fddbe630087fdeb2e7 = $this->env->getExtension("native_profiler");
        $__internal_58db5da5b42d173194c67f596e091ea49fb07c7d0b7e85fddbe630087fdeb2e7->enter($__internal_58db5da5b42d173194c67f596e091ea49fb07c7d0b7e85fddbe630087fdeb2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58db5da5b42d173194c67f596e091ea49fb07c7d0b7e85fddbe630087fdeb2e7->leave($__internal_58db5da5b42d173194c67f596e091ea49fb07c7d0b7e85fddbe630087fdeb2e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42214064e5c28b9184bf9da6bebb31d2dd58e169b9e14ed61d9625e2d38ff272 = $this->env->getExtension("native_profiler");
        $__internal_42214064e5c28b9184bf9da6bebb31d2dd58e169b9e14ed61d9625e2d38ff272->enter($__internal_42214064e5c28b9184bf9da6bebb31d2dd58e169b9e14ed61d9625e2d38ff272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_42214064e5c28b9184bf9da6bebb31d2dd58e169b9e14ed61d9625e2d38ff272->leave($__internal_42214064e5c28b9184bf9da6bebb31d2dd58e169b9e14ed61d9625e2d38ff272_prof);

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
