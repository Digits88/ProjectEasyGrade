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
        $__internal_dcdd64aac038fc768855ddb6356de8222b7978cf0de9cf7d1a4a05afbe6bbc2b = $this->env->getExtension("native_profiler");
        $__internal_dcdd64aac038fc768855ddb6356de8222b7978cf0de9cf7d1a4a05afbe6bbc2b->enter($__internal_dcdd64aac038fc768855ddb6356de8222b7978cf0de9cf7d1a4a05afbe6bbc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcdd64aac038fc768855ddb6356de8222b7978cf0de9cf7d1a4a05afbe6bbc2b->leave($__internal_dcdd64aac038fc768855ddb6356de8222b7978cf0de9cf7d1a4a05afbe6bbc2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c115c1f0cb00bce9b3f740500cd22fc8faed4d544ecefd17f1b9e25aeac75f51 = $this->env->getExtension("native_profiler");
        $__internal_c115c1f0cb00bce9b3f740500cd22fc8faed4d544ecefd17f1b9e25aeac75f51->enter($__internal_c115c1f0cb00bce9b3f740500cd22fc8faed4d544ecefd17f1b9e25aeac75f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c115c1f0cb00bce9b3f740500cd22fc8faed4d544ecefd17f1b9e25aeac75f51->leave($__internal_c115c1f0cb00bce9b3f740500cd22fc8faed4d544ecefd17f1b9e25aeac75f51_prof);

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
