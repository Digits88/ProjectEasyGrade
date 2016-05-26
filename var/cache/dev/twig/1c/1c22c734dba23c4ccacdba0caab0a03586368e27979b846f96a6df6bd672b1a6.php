<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0e6c67e7b315524beb4b3ab4ccdd8221b125531263f098dd5d0b43d9fbd98140 extends Twig_Template
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
        $__internal_ec9de0dcef1a4c827babc3587c5d98aed6e274e0130558257ef79decf317a462 = $this->env->getExtension("native_profiler");
        $__internal_ec9de0dcef1a4c827babc3587c5d98aed6e274e0130558257ef79decf317a462->enter($__internal_ec9de0dcef1a4c827babc3587c5d98aed6e274e0130558257ef79decf317a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9de0dcef1a4c827babc3587c5d98aed6e274e0130558257ef79decf317a462->leave($__internal_ec9de0dcef1a4c827babc3587c5d98aed6e274e0130558257ef79decf317a462_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e82ca1eb2c6dad68092d89c3f1c240520c61bd9df4d0695b4bf195963a2c1bc4 = $this->env->getExtension("native_profiler");
        $__internal_e82ca1eb2c6dad68092d89c3f1c240520c61bd9df4d0695b4bf195963a2c1bc4->enter($__internal_e82ca1eb2c6dad68092d89c3f1c240520c61bd9df4d0695b4bf195963a2c1bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e82ca1eb2c6dad68092d89c3f1c240520c61bd9df4d0695b4bf195963a2c1bc4->leave($__internal_e82ca1eb2c6dad68092d89c3f1c240520c61bd9df4d0695b4bf195963a2c1bc4_prof);

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
