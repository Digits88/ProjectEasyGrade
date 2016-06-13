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
        $__internal_aaf03b81cd9ad02596e727241406502840ccae10ce9873501863c28ac17c25aa = $this->env->getExtension("native_profiler");
        $__internal_aaf03b81cd9ad02596e727241406502840ccae10ce9873501863c28ac17c25aa->enter($__internal_aaf03b81cd9ad02596e727241406502840ccae10ce9873501863c28ac17c25aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf03b81cd9ad02596e727241406502840ccae10ce9873501863c28ac17c25aa->leave($__internal_aaf03b81cd9ad02596e727241406502840ccae10ce9873501863c28ac17c25aa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d77b1ce0fb8351534e2d18e564abcfe889d701b5693ad5723b871763bc4f3bf5 = $this->env->getExtension("native_profiler");
        $__internal_d77b1ce0fb8351534e2d18e564abcfe889d701b5693ad5723b871763bc4f3bf5->enter($__internal_d77b1ce0fb8351534e2d18e564abcfe889d701b5693ad5723b871763bc4f3bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d77b1ce0fb8351534e2d18e564abcfe889d701b5693ad5723b871763bc4f3bf5->leave($__internal_d77b1ce0fb8351534e2d18e564abcfe889d701b5693ad5723b871763bc4f3bf5_prof);

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
