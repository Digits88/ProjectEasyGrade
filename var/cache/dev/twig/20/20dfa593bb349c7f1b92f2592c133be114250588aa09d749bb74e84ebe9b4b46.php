<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e0a0229f71fe4bd6cc02583229604ce63d1864d5a18df80cf68246be3222132a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_e52353d393775063902a152cda85e6aa2ea4657768bbcfadd28e24b4d8de834c = $this->env->getExtension("native_profiler");
        $__internal_e52353d393775063902a152cda85e6aa2ea4657768bbcfadd28e24b4d8de834c->enter($__internal_e52353d393775063902a152cda85e6aa2ea4657768bbcfadd28e24b4d8de834c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52353d393775063902a152cda85e6aa2ea4657768bbcfadd28e24b4d8de834c->leave($__internal_e52353d393775063902a152cda85e6aa2ea4657768bbcfadd28e24b4d8de834c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ba837e703705aa6e2c948a2500dc6b34c2a0999d1fa571befc8c38e33732685 = $this->env->getExtension("native_profiler");
        $__internal_2ba837e703705aa6e2c948a2500dc6b34c2a0999d1fa571befc8c38e33732685->enter($__internal_2ba837e703705aa6e2c948a2500dc6b34c2a0999d1fa571befc8c38e33732685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2ba837e703705aa6e2c948a2500dc6b34c2a0999d1fa571befc8c38e33732685->leave($__internal_2ba837e703705aa6e2c948a2500dc6b34c2a0999d1fa571befc8c38e33732685_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
