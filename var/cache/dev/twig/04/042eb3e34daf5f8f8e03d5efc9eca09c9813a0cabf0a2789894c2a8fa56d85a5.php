<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_8888b73c13171ebe358f645142f5a29cd913c7a011cc6d15b7b0a1fbdc5e9e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_a1b78fb4ef246559684df68113901dcf37123be64534e440384a64930b1d884c = $this->env->getExtension("native_profiler");
        $__internal_a1b78fb4ef246559684df68113901dcf37123be64534e440384a64930b1d884c->enter($__internal_a1b78fb4ef246559684df68113901dcf37123be64534e440384a64930b1d884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b78fb4ef246559684df68113901dcf37123be64534e440384a64930b1d884c->leave($__internal_a1b78fb4ef246559684df68113901dcf37123be64534e440384a64930b1d884c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_270f0000cdf48575a8a9f8ccd3ecd41ae8e9876b580d019b6e5d251c39c8e4b0 = $this->env->getExtension("native_profiler");
        $__internal_270f0000cdf48575a8a9f8ccd3ecd41ae8e9876b580d019b6e5d251c39c8e4b0->enter($__internal_270f0000cdf48575a8a9f8ccd3ecd41ae8e9876b580d019b6e5d251c39c8e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_270f0000cdf48575a8a9f8ccd3ecd41ae8e9876b580d019b6e5d251c39c8e4b0->leave($__internal_270f0000cdf48575a8a9f8ccd3ecd41ae8e9876b580d019b6e5d251c39c8e4b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
