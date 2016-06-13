<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f59b04177071b76363665bbb2b8d8d1b68daacf5c5458f4a1f61e49363c3060a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_abf7a49c5a13093eb8933609735ccfdf89e8f164ea1e6ea2258bf8b8ba9e0261 = $this->env->getExtension("native_profiler");
        $__internal_abf7a49c5a13093eb8933609735ccfdf89e8f164ea1e6ea2258bf8b8ba9e0261->enter($__internal_abf7a49c5a13093eb8933609735ccfdf89e8f164ea1e6ea2258bf8b8ba9e0261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf7a49c5a13093eb8933609735ccfdf89e8f164ea1e6ea2258bf8b8ba9e0261->leave($__internal_abf7a49c5a13093eb8933609735ccfdf89e8f164ea1e6ea2258bf8b8ba9e0261_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e74f3e9743a39f6a8f94ea08f9df45f460810740bd9fddfae9d0ba3e1497923d = $this->env->getExtension("native_profiler");
        $__internal_e74f3e9743a39f6a8f94ea08f9df45f460810740bd9fddfae9d0ba3e1497923d->enter($__internal_e74f3e9743a39f6a8f94ea08f9df45f460810740bd9fddfae9d0ba3e1497923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e74f3e9743a39f6a8f94ea08f9df45f460810740bd9fddfae9d0ba3e1497923d->leave($__internal_e74f3e9743a39f6a8f94ea08f9df45f460810740bd9fddfae9d0ba3e1497923d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
