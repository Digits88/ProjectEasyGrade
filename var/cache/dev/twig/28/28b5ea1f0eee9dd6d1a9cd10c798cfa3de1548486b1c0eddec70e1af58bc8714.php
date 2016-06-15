<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3d6ce06562fdb36ea6c51caabea3b8c0e744c2f2cb8aa74379d2a231d38ef56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_47defa76d6735492669e644079da998eaa4bc88b4a96b4a79b9932c2ec03a3e2 = $this->env->getExtension("native_profiler");
        $__internal_47defa76d6735492669e644079da998eaa4bc88b4a96b4a79b9932c2ec03a3e2->enter($__internal_47defa76d6735492669e644079da998eaa4bc88b4a96b4a79b9932c2ec03a3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47defa76d6735492669e644079da998eaa4bc88b4a96b4a79b9932c2ec03a3e2->leave($__internal_47defa76d6735492669e644079da998eaa4bc88b4a96b4a79b9932c2ec03a3e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4ae2b889f31db4250f76b69bba4cf36f21316b1d9eb2c818cad55365b3abf85 = $this->env->getExtension("native_profiler");
        $__internal_d4ae2b889f31db4250f76b69bba4cf36f21316b1d9eb2c818cad55365b3abf85->enter($__internal_d4ae2b889f31db4250f76b69bba4cf36f21316b1d9eb2c818cad55365b3abf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d4ae2b889f31db4250f76b69bba4cf36f21316b1d9eb2c818cad55365b3abf85->leave($__internal_d4ae2b889f31db4250f76b69bba4cf36f21316b1d9eb2c818cad55365b3abf85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
