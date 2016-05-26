<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_72dd3c5f0e1e1c27aed373134110367592c3be54e3b62402d90edb7b209b23f6 extends Twig_Template
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
        $__internal_a73b31bb9e1e7050dce9b3a55bfb19b250df6baf65d78f0bc9e99ef3bbff6b73 = $this->env->getExtension("native_profiler");
        $__internal_a73b31bb9e1e7050dce9b3a55bfb19b250df6baf65d78f0bc9e99ef3bbff6b73->enter($__internal_a73b31bb9e1e7050dce9b3a55bfb19b250df6baf65d78f0bc9e99ef3bbff6b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a73b31bb9e1e7050dce9b3a55bfb19b250df6baf65d78f0bc9e99ef3bbff6b73->leave($__internal_a73b31bb9e1e7050dce9b3a55bfb19b250df6baf65d78f0bc9e99ef3bbff6b73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_535016c45a5c1ffb20eaa09e77bc1a9592d0232acc69e990c566e8a11e8b3402 = $this->env->getExtension("native_profiler");
        $__internal_535016c45a5c1ffb20eaa09e77bc1a9592d0232acc69e990c566e8a11e8b3402->enter($__internal_535016c45a5c1ffb20eaa09e77bc1a9592d0232acc69e990c566e8a11e8b3402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_535016c45a5c1ffb20eaa09e77bc1a9592d0232acc69e990c566e8a11e8b3402->leave($__internal_535016c45a5c1ffb20eaa09e77bc1a9592d0232acc69e990c566e8a11e8b3402_prof);

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
