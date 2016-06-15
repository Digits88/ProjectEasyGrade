<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_95bb208137b063db705ab40d8c4558ca7c1c711d91dbeb1ad3663703ee1e5986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4a7b147707e4fed8bfd8484dba8aa34d52ac7bc9ed942d8662c037bc2ff0e39b = $this->env->getExtension("native_profiler");
        $__internal_4a7b147707e4fed8bfd8484dba8aa34d52ac7bc9ed942d8662c037bc2ff0e39b->enter($__internal_4a7b147707e4fed8bfd8484dba8aa34d52ac7bc9ed942d8662c037bc2ff0e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7b147707e4fed8bfd8484dba8aa34d52ac7bc9ed942d8662c037bc2ff0e39b->leave($__internal_4a7b147707e4fed8bfd8484dba8aa34d52ac7bc9ed942d8662c037bc2ff0e39b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_714e99ca9414f9890318d5c1be5ff4c85a45d7418336ccaed9f85d27afa57cfe = $this->env->getExtension("native_profiler");
        $__internal_714e99ca9414f9890318d5c1be5ff4c85a45d7418336ccaed9f85d27afa57cfe->enter($__internal_714e99ca9414f9890318d5c1be5ff4c85a45d7418336ccaed9f85d27afa57cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_714e99ca9414f9890318d5c1be5ff4c85a45d7418336ccaed9f85d27afa57cfe->leave($__internal_714e99ca9414f9890318d5c1be5ff4c85a45d7418336ccaed9f85d27afa57cfe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
