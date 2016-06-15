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
        $__internal_0ecd43ec3e2d2f006f7dae3cc018db79a0b24cdc0d43d183c2682fe8706d20c0 = $this->env->getExtension("native_profiler");
        $__internal_0ecd43ec3e2d2f006f7dae3cc018db79a0b24cdc0d43d183c2682fe8706d20c0->enter($__internal_0ecd43ec3e2d2f006f7dae3cc018db79a0b24cdc0d43d183c2682fe8706d20c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecd43ec3e2d2f006f7dae3cc018db79a0b24cdc0d43d183c2682fe8706d20c0->leave($__internal_0ecd43ec3e2d2f006f7dae3cc018db79a0b24cdc0d43d183c2682fe8706d20c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28b6061bd6c271bab98271aa2a27a27391d7789352692bd6055c026cf18848f0 = $this->env->getExtension("native_profiler");
        $__internal_28b6061bd6c271bab98271aa2a27a27391d7789352692bd6055c026cf18848f0->enter($__internal_28b6061bd6c271bab98271aa2a27a27391d7789352692bd6055c026cf18848f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_28b6061bd6c271bab98271aa2a27a27391d7789352692bd6055c026cf18848f0->leave($__internal_28b6061bd6c271bab98271aa2a27a27391d7789352692bd6055c026cf18848f0_prof);

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
