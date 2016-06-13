<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_408718802458cddcb6406cdd537164d5a358cfcc1845e04799b7b026b548fdf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b7f5894c0b3c59db5ef188e274c4a1e093a424ac4abda2bd2f7465cd2c445896 = $this->env->getExtension("native_profiler");
        $__internal_b7f5894c0b3c59db5ef188e274c4a1e093a424ac4abda2bd2f7465cd2c445896->enter($__internal_b7f5894c0b3c59db5ef188e274c4a1e093a424ac4abda2bd2f7465cd2c445896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f5894c0b3c59db5ef188e274c4a1e093a424ac4abda2bd2f7465cd2c445896->leave($__internal_b7f5894c0b3c59db5ef188e274c4a1e093a424ac4abda2bd2f7465cd2c445896_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb1638198e6470c68299a82fcec4f7ee52a818b15242ae7974c584f4cdb76222 = $this->env->getExtension("native_profiler");
        $__internal_eb1638198e6470c68299a82fcec4f7ee52a818b15242ae7974c584f4cdb76222->enter($__internal_eb1638198e6470c68299a82fcec4f7ee52a818b15242ae7974c584f4cdb76222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_eb1638198e6470c68299a82fcec4f7ee52a818b15242ae7974c584f4cdb76222->leave($__internal_eb1638198e6470c68299a82fcec4f7ee52a818b15242ae7974c584f4cdb76222_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
