<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fe652ef937c144fa825ec809cf14b25d8e15350225d6586795e7bd53ea4661d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_84e4b9c00cc02d55da2f47642b0758d2dfd4ba64584c21c5c8bf7b0daed2637c = $this->env->getExtension("native_profiler");
        $__internal_84e4b9c00cc02d55da2f47642b0758d2dfd4ba64584c21c5c8bf7b0daed2637c->enter($__internal_84e4b9c00cc02d55da2f47642b0758d2dfd4ba64584c21c5c8bf7b0daed2637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e4b9c00cc02d55da2f47642b0758d2dfd4ba64584c21c5c8bf7b0daed2637c->leave($__internal_84e4b9c00cc02d55da2f47642b0758d2dfd4ba64584c21c5c8bf7b0daed2637c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_debb6a5a107f5cda0b9129a9531b43f47f325f46f0a06fd53b75b07953ebb8ae = $this->env->getExtension("native_profiler");
        $__internal_debb6a5a107f5cda0b9129a9531b43f47f325f46f0a06fd53b75b07953ebb8ae->enter($__internal_debb6a5a107f5cda0b9129a9531b43f47f325f46f0a06fd53b75b07953ebb8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_debb6a5a107f5cda0b9129a9531b43f47f325f46f0a06fd53b75b07953ebb8ae->leave($__internal_debb6a5a107f5cda0b9129a9531b43f47f325f46f0a06fd53b75b07953ebb8ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
