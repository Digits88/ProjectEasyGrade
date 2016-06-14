<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_7c257fd496df5b968ad3570d82d48489cd31a7371b8ef37a2ed43e078ed4e3b8 extends Twig_Template
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
        $__internal_f95fcb9673fb8a9860e6dee64132ecf8d3779964684793cfd332b5747879f643 = $this->env->getExtension("native_profiler");
        $__internal_f95fcb9673fb8a9860e6dee64132ecf8d3779964684793cfd332b5747879f643->enter($__internal_f95fcb9673fb8a9860e6dee64132ecf8d3779964684793cfd332b5747879f643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95fcb9673fb8a9860e6dee64132ecf8d3779964684793cfd332b5747879f643->leave($__internal_f95fcb9673fb8a9860e6dee64132ecf8d3779964684793cfd332b5747879f643_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7aa1918ef3b50402c0ee45a4b32243397e63f4798c1c0d587fbbf7f2c5e2d8a1 = $this->env->getExtension("native_profiler");
        $__internal_7aa1918ef3b50402c0ee45a4b32243397e63f4798c1c0d587fbbf7f2c5e2d8a1->enter($__internal_7aa1918ef3b50402c0ee45a4b32243397e63f4798c1c0d587fbbf7f2c5e2d8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7aa1918ef3b50402c0ee45a4b32243397e63f4798c1c0d587fbbf7f2c5e2d8a1->leave($__internal_7aa1918ef3b50402c0ee45a4b32243397e63f4798c1c0d587fbbf7f2c5e2d8a1_prof);

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
