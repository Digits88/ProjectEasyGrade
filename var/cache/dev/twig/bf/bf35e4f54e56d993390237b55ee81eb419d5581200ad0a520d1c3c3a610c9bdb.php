<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_afade076776be8b02228dd2f0c09cd0bf051090217769e434524b1da9a3e8055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_cca00cc4ef392cd03699f7ffc7e658ce08baa090d91ca8ee36aed648adb296b1 = $this->env->getExtension("native_profiler");
        $__internal_cca00cc4ef392cd03699f7ffc7e658ce08baa090d91ca8ee36aed648adb296b1->enter($__internal_cca00cc4ef392cd03699f7ffc7e658ce08baa090d91ca8ee36aed648adb296b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca00cc4ef392cd03699f7ffc7e658ce08baa090d91ca8ee36aed648adb296b1->leave($__internal_cca00cc4ef392cd03699f7ffc7e658ce08baa090d91ca8ee36aed648adb296b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16645c809e876d9d9ed9ea436a77b7a98e76932642d3d4dec34ffc14306f108d = $this->env->getExtension("native_profiler");
        $__internal_16645c809e876d9d9ed9ea436a77b7a98e76932642d3d4dec34ffc14306f108d->enter($__internal_16645c809e876d9d9ed9ea436a77b7a98e76932642d3d4dec34ffc14306f108d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_16645c809e876d9d9ed9ea436a77b7a98e76932642d3d4dec34ffc14306f108d->leave($__internal_16645c809e876d9d9ed9ea436a77b7a98e76932642d3d4dec34ffc14306f108d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
