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
        $__internal_47727e7344d9b8babd903e5b7bddb60cdb0fc15699607f0ef62bd33905ccfc53 = $this->env->getExtension("native_profiler");
        $__internal_47727e7344d9b8babd903e5b7bddb60cdb0fc15699607f0ef62bd33905ccfc53->enter($__internal_47727e7344d9b8babd903e5b7bddb60cdb0fc15699607f0ef62bd33905ccfc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47727e7344d9b8babd903e5b7bddb60cdb0fc15699607f0ef62bd33905ccfc53->leave($__internal_47727e7344d9b8babd903e5b7bddb60cdb0fc15699607f0ef62bd33905ccfc53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b5b4f92f7117612a88c6810865e2c0516cc1d625f3626e4f60095b7d718a057 = $this->env->getExtension("native_profiler");
        $__internal_8b5b4f92f7117612a88c6810865e2c0516cc1d625f3626e4f60095b7d718a057->enter($__internal_8b5b4f92f7117612a88c6810865e2c0516cc1d625f3626e4f60095b7d718a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8b5b4f92f7117612a88c6810865e2c0516cc1d625f3626e4f60095b7d718a057->leave($__internal_8b5b4f92f7117612a88c6810865e2c0516cc1d625f3626e4f60095b7d718a057_prof);

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
