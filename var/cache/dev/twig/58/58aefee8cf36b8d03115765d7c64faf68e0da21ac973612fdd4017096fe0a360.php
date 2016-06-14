<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_2729a97dbc68b43b5bbe7ec7337cf428151b5b1a791c8aee65ddd214c82560c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_783be0bb8e53080af9a0c7c096ebb72dbfbe5dc100464f395b9a6d3affd60783 = $this->env->getExtension("native_profiler");
        $__internal_783be0bb8e53080af9a0c7c096ebb72dbfbe5dc100464f395b9a6d3affd60783->enter($__internal_783be0bb8e53080af9a0c7c096ebb72dbfbe5dc100464f395b9a6d3affd60783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_783be0bb8e53080af9a0c7c096ebb72dbfbe5dc100464f395b9a6d3affd60783->leave($__internal_783be0bb8e53080af9a0c7c096ebb72dbfbe5dc100464f395b9a6d3affd60783_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cce893c13af615c834a0d49093bfa0f6b763b5b439b44c879461c0a334862592 = $this->env->getExtension("native_profiler");
        $__internal_cce893c13af615c834a0d49093bfa0f6b763b5b439b44c879461c0a334862592->enter($__internal_cce893c13af615c834a0d49093bfa0f6b763b5b439b44c879461c0a334862592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cce893c13af615c834a0d49093bfa0f6b763b5b439b44c879461c0a334862592->leave($__internal_cce893c13af615c834a0d49093bfa0f6b763b5b439b44c879461c0a334862592_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
