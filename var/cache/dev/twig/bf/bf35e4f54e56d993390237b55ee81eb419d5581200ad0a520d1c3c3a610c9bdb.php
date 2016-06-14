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
        $__internal_d9af0673f75f9a9bee1a81283265b46eb26b93cfc9ca5cf523c830e47fae31ff = $this->env->getExtension("native_profiler");
        $__internal_d9af0673f75f9a9bee1a81283265b46eb26b93cfc9ca5cf523c830e47fae31ff->enter($__internal_d9af0673f75f9a9bee1a81283265b46eb26b93cfc9ca5cf523c830e47fae31ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9af0673f75f9a9bee1a81283265b46eb26b93cfc9ca5cf523c830e47fae31ff->leave($__internal_d9af0673f75f9a9bee1a81283265b46eb26b93cfc9ca5cf523c830e47fae31ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3e47c09fc28ebf2dab4edd3a2e988a550bda6f8f4d90a2da4d919aea8ce5154 = $this->env->getExtension("native_profiler");
        $__internal_e3e47c09fc28ebf2dab4edd3a2e988a550bda6f8f4d90a2da4d919aea8ce5154->enter($__internal_e3e47c09fc28ebf2dab4edd3a2e988a550bda6f8f4d90a2da4d919aea8ce5154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e3e47c09fc28ebf2dab4edd3a2e988a550bda6f8f4d90a2da4d919aea8ce5154->leave($__internal_e3e47c09fc28ebf2dab4edd3a2e988a550bda6f8f4d90a2da4d919aea8ce5154_prof);

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
