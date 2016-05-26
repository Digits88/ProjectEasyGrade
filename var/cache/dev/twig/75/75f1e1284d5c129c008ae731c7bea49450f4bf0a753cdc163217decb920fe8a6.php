<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_e94133c796eaf7afa3286df841027478fcf3b87e0f596bbf8b3f6b45ceac7008 extends Twig_Template
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
        $__internal_3da062683f962e3ee05c114411c8bc38eec93b59556afe3c9d5ef03b51c94b68 = $this->env->getExtension("native_profiler");
        $__internal_3da062683f962e3ee05c114411c8bc38eec93b59556afe3c9d5ef03b51c94b68->enter($__internal_3da062683f962e3ee05c114411c8bc38eec93b59556afe3c9d5ef03b51c94b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da062683f962e3ee05c114411c8bc38eec93b59556afe3c9d5ef03b51c94b68->leave($__internal_3da062683f962e3ee05c114411c8bc38eec93b59556afe3c9d5ef03b51c94b68_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbacc8715ef73cc71626b9fe775303c71ebe037c7ab0bdb8210a3607956f52f2 = $this->env->getExtension("native_profiler");
        $__internal_bbacc8715ef73cc71626b9fe775303c71ebe037c7ab0bdb8210a3607956f52f2->enter($__internal_bbacc8715ef73cc71626b9fe775303c71ebe037c7ab0bdb8210a3607956f52f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bbacc8715ef73cc71626b9fe775303c71ebe037c7ab0bdb8210a3607956f52f2->leave($__internal_bbacc8715ef73cc71626b9fe775303c71ebe037c7ab0bdb8210a3607956f52f2_prof);

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
