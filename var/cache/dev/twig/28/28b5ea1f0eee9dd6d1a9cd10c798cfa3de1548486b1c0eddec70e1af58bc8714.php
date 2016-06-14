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
        $__internal_39a8c05130ed63d54fb926d763c75eebfb99ece42630616e3f2019647e7d3e14 = $this->env->getExtension("native_profiler");
        $__internal_39a8c05130ed63d54fb926d763c75eebfb99ece42630616e3f2019647e7d3e14->enter($__internal_39a8c05130ed63d54fb926d763c75eebfb99ece42630616e3f2019647e7d3e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a8c05130ed63d54fb926d763c75eebfb99ece42630616e3f2019647e7d3e14->leave($__internal_39a8c05130ed63d54fb926d763c75eebfb99ece42630616e3f2019647e7d3e14_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f95088ee9cf2154ffe7d4093dbefb4f64e49ee9272d03b7a895a49ff151d7d79 = $this->env->getExtension("native_profiler");
        $__internal_f95088ee9cf2154ffe7d4093dbefb4f64e49ee9272d03b7a895a49ff151d7d79->enter($__internal_f95088ee9cf2154ffe7d4093dbefb4f64e49ee9272d03b7a895a49ff151d7d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f95088ee9cf2154ffe7d4093dbefb4f64e49ee9272d03b7a895a49ff151d7d79->leave($__internal_f95088ee9cf2154ffe7d4093dbefb4f64e49ee9272d03b7a895a49ff151d7d79_prof);

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
