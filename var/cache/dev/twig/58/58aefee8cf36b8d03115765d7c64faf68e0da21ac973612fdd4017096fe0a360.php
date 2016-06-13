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
        $__internal_604dc53cda9c4912318880f6e64cb791ecae90a804ead6711eb48540e4bc080d = $this->env->getExtension("native_profiler");
        $__internal_604dc53cda9c4912318880f6e64cb791ecae90a804ead6711eb48540e4bc080d->enter($__internal_604dc53cda9c4912318880f6e64cb791ecae90a804ead6711eb48540e4bc080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604dc53cda9c4912318880f6e64cb791ecae90a804ead6711eb48540e4bc080d->leave($__internal_604dc53cda9c4912318880f6e64cb791ecae90a804ead6711eb48540e4bc080d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19805c63fd16c03709a1c7087e8897fb083a88a63b749ee6eba4079a43642e17 = $this->env->getExtension("native_profiler");
        $__internal_19805c63fd16c03709a1c7087e8897fb083a88a63b749ee6eba4079a43642e17->enter($__internal_19805c63fd16c03709a1c7087e8897fb083a88a63b749ee6eba4079a43642e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_19805c63fd16c03709a1c7087e8897fb083a88a63b749ee6eba4079a43642e17->leave($__internal_19805c63fd16c03709a1c7087e8897fb083a88a63b749ee6eba4079a43642e17_prof);

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
