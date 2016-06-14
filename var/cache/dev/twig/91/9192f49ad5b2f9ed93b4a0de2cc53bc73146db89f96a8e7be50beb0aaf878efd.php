<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_95bb208137b063db705ab40d8c4558ca7c1c711d91dbeb1ad3663703ee1e5986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c0f67c6840d9e1720f870d0532f84ffdb0ac780de4b9190d78d2ac38b31dab3b = $this->env->getExtension("native_profiler");
        $__internal_c0f67c6840d9e1720f870d0532f84ffdb0ac780de4b9190d78d2ac38b31dab3b->enter($__internal_c0f67c6840d9e1720f870d0532f84ffdb0ac780de4b9190d78d2ac38b31dab3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f67c6840d9e1720f870d0532f84ffdb0ac780de4b9190d78d2ac38b31dab3b->leave($__internal_c0f67c6840d9e1720f870d0532f84ffdb0ac780de4b9190d78d2ac38b31dab3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c690a5c2dfef06b566be6ac4476308ce8e899b906c981800cc8b67cb9d66c0a6 = $this->env->getExtension("native_profiler");
        $__internal_c690a5c2dfef06b566be6ac4476308ce8e899b906c981800cc8b67cb9d66c0a6->enter($__internal_c690a5c2dfef06b566be6ac4476308ce8e899b906c981800cc8b67cb9d66c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c690a5c2dfef06b566be6ac4476308ce8e899b906c981800cc8b67cb9d66c0a6->leave($__internal_c690a5c2dfef06b566be6ac4476308ce8e899b906c981800cc8b67cb9d66c0a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
