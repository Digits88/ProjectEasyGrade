<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_347ebd72659b64ed79d59cad53cf59c43aa13e0d7c797951085927518fba179b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b613af28afebc6abd95301eb011f2168da4502df4f83043c652a7815ecc22f = $this->env->getExtension("native_profiler");
        $__internal_46b613af28afebc6abd95301eb011f2168da4502df4f83043c652a7815ecc22f->enter($__internal_46b613af28afebc6abd95301eb011f2168da4502df4f83043c652a7815ecc22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_46b613af28afebc6abd95301eb011f2168da4502df4f83043c652a7815ecc22f->leave($__internal_46b613af28afebc6abd95301eb011f2168da4502df4f83043c652a7815ecc22f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b0dcf7d94a9e8fd0eba10d9e1a7675c56b5648f6cf4e00e416e7fe3959a1c04c = $this->env->getExtension("native_profiler");
        $__internal_b0dcf7d94a9e8fd0eba10d9e1a7675c56b5648f6cf4e00e416e7fe3959a1c04c->enter($__internal_b0dcf7d94a9e8fd0eba10d9e1a7675c56b5648f6cf4e00e416e7fe3959a1c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b0dcf7d94a9e8fd0eba10d9e1a7675c56b5648f6cf4e00e416e7fe3959a1c04c->leave($__internal_b0dcf7d94a9e8fd0eba10d9e1a7675c56b5648f6cf4e00e416e7fe3959a1c04c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_887acda33a08d45016b744a75866ea46899aa00348e93307d3da0c32fdccd95a = $this->env->getExtension("native_profiler");
        $__internal_887acda33a08d45016b744a75866ea46899aa00348e93307d3da0c32fdccd95a->enter($__internal_887acda33a08d45016b744a75866ea46899aa00348e93307d3da0c32fdccd95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_887acda33a08d45016b744a75866ea46899aa00348e93307d3da0c32fdccd95a->leave($__internal_887acda33a08d45016b744a75866ea46899aa00348e93307d3da0c32fdccd95a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9532a5bb41d65d6d487d1ac69903454b84eaa939f0a55690c80b243df1546f08 = $this->env->getExtension("native_profiler");
        $__internal_9532a5bb41d65d6d487d1ac69903454b84eaa939f0a55690c80b243df1546f08->enter($__internal_9532a5bb41d65d6d487d1ac69903454b84eaa939f0a55690c80b243df1546f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9532a5bb41d65d6d487d1ac69903454b84eaa939f0a55690c80b243df1546f08->leave($__internal_9532a5bb41d65d6d487d1ac69903454b84eaa939f0a55690c80b243df1546f08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
