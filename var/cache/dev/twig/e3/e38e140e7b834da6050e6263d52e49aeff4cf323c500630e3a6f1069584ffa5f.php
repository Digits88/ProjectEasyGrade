<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5e6572eca1960fdee633d7eaff24a159c8b7870011809b5cb6fbf0d59e677c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b7cde287c71fbb35d62836b8fe0d0ce4188aa7fd8e53edd4d78a3c697b5d2c01 = $this->env->getExtension("native_profiler");
        $__internal_b7cde287c71fbb35d62836b8fe0d0ce4188aa7fd8e53edd4d78a3c697b5d2c01->enter($__internal_b7cde287c71fbb35d62836b8fe0d0ce4188aa7fd8e53edd4d78a3c697b5d2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7cde287c71fbb35d62836b8fe0d0ce4188aa7fd8e53edd4d78a3c697b5d2c01->leave($__internal_b7cde287c71fbb35d62836b8fe0d0ce4188aa7fd8e53edd4d78a3c697b5d2c01_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1eeb25bdec6b1e4628c5ba4ad07423176269edf9e438558060c880dc7d4f4539 = $this->env->getExtension("native_profiler");
        $__internal_1eeb25bdec6b1e4628c5ba4ad07423176269edf9e438558060c880dc7d4f4539->enter($__internal_1eeb25bdec6b1e4628c5ba4ad07423176269edf9e438558060c880dc7d4f4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1eeb25bdec6b1e4628c5ba4ad07423176269edf9e438558060c880dc7d4f4539->leave($__internal_1eeb25bdec6b1e4628c5ba4ad07423176269edf9e438558060c880dc7d4f4539_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
