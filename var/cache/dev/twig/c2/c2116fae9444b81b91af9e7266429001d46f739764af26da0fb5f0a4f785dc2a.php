<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8e5bea9974df6e0c4e37839e81c8666926923159f72dcc05cec76923c0e44328 extends Twig_Template
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
        $__internal_cef30c3d5f64ec7a1fc9752facbb6ec61aff45919fe3629bae03a698f469379f = $this->env->getExtension("native_profiler");
        $__internal_cef30c3d5f64ec7a1fc9752facbb6ec61aff45919fe3629bae03a698f469379f->enter($__internal_cef30c3d5f64ec7a1fc9752facbb6ec61aff45919fe3629bae03a698f469379f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef30c3d5f64ec7a1fc9752facbb6ec61aff45919fe3629bae03a698f469379f->leave($__internal_cef30c3d5f64ec7a1fc9752facbb6ec61aff45919fe3629bae03a698f469379f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9984fd562637bcb01043895aded4d2025416408fe11b37c8d520dbf5cbc0e583 = $this->env->getExtension("native_profiler");
        $__internal_9984fd562637bcb01043895aded4d2025416408fe11b37c8d520dbf5cbc0e583->enter($__internal_9984fd562637bcb01043895aded4d2025416408fe11b37c8d520dbf5cbc0e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9984fd562637bcb01043895aded4d2025416408fe11b37c8d520dbf5cbc0e583->leave($__internal_9984fd562637bcb01043895aded4d2025416408fe11b37c8d520dbf5cbc0e583_prof);

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
