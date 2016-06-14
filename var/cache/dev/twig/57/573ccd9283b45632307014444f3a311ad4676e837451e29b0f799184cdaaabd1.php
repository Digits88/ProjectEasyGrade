<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b6b6c751ddc3f9c7e5e04cef109449d269e655bee71a3468afaccf2d7c2e11cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_485fc849c1f30da49d8c9d923c26799415f1e134bb2a9c6aea2d2b5df1bf6093 = $this->env->getExtension("native_profiler");
        $__internal_485fc849c1f30da49d8c9d923c26799415f1e134bb2a9c6aea2d2b5df1bf6093->enter($__internal_485fc849c1f30da49d8c9d923c26799415f1e134bb2a9c6aea2d2b5df1bf6093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485fc849c1f30da49d8c9d923c26799415f1e134bb2a9c6aea2d2b5df1bf6093->leave($__internal_485fc849c1f30da49d8c9d923c26799415f1e134bb2a9c6aea2d2b5df1bf6093_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_121e5bb5d654ecc60348537d61acd782614a639df65deea7e415fd221a7fafc0 = $this->env->getExtension("native_profiler");
        $__internal_121e5bb5d654ecc60348537d61acd782614a639df65deea7e415fd221a7fafc0->enter($__internal_121e5bb5d654ecc60348537d61acd782614a639df65deea7e415fd221a7fafc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_121e5bb5d654ecc60348537d61acd782614a639df65deea7e415fd221a7fafc0->leave($__internal_121e5bb5d654ecc60348537d61acd782614a639df65deea7e415fd221a7fafc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
