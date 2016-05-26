<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a59969e3e9a83211f0fb2a4a7d3e174b725b0b41693a3ccd3e041fbbcf47f4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_50f84741fa73aede17fc66124839d9a2dbe422e066dbc470838a652592413699 = $this->env->getExtension("native_profiler");
        $__internal_50f84741fa73aede17fc66124839d9a2dbe422e066dbc470838a652592413699->enter($__internal_50f84741fa73aede17fc66124839d9a2dbe422e066dbc470838a652592413699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f84741fa73aede17fc66124839d9a2dbe422e066dbc470838a652592413699->leave($__internal_50f84741fa73aede17fc66124839d9a2dbe422e066dbc470838a652592413699_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f522463a2943bf98ac62639ded968629b1de98e9255dda64020d44645a9fb0b6 = $this->env->getExtension("native_profiler");
        $__internal_f522463a2943bf98ac62639ded968629b1de98e9255dda64020d44645a9fb0b6->enter($__internal_f522463a2943bf98ac62639ded968629b1de98e9255dda64020d44645a9fb0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f522463a2943bf98ac62639ded968629b1de98e9255dda64020d44645a9fb0b6->leave($__internal_f522463a2943bf98ac62639ded968629b1de98e9255dda64020d44645a9fb0b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
