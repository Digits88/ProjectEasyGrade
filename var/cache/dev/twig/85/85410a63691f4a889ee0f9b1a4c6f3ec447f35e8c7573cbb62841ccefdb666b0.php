<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1b31e2f9872c3e04cc5f4d18d35d573310cf86e82a50ace3f8ed78d59c381132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_ead8121d297dba86656effbea05361c7bc15668e5bdbaa32bacca6c672344b1a = $this->env->getExtension("native_profiler");
        $__internal_ead8121d297dba86656effbea05361c7bc15668e5bdbaa32bacca6c672344b1a->enter($__internal_ead8121d297dba86656effbea05361c7bc15668e5bdbaa32bacca6c672344b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead8121d297dba86656effbea05361c7bc15668e5bdbaa32bacca6c672344b1a->leave($__internal_ead8121d297dba86656effbea05361c7bc15668e5bdbaa32bacca6c672344b1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fb08dea392cb130928976310e1b4d51276c5472db42f9779977008632c13c71 = $this->env->getExtension("native_profiler");
        $__internal_5fb08dea392cb130928976310e1b4d51276c5472db42f9779977008632c13c71->enter($__internal_5fb08dea392cb130928976310e1b4d51276c5472db42f9779977008632c13c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5fb08dea392cb130928976310e1b4d51276c5472db42f9779977008632c13c71->leave($__internal_5fb08dea392cb130928976310e1b4d51276c5472db42f9779977008632c13c71_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
