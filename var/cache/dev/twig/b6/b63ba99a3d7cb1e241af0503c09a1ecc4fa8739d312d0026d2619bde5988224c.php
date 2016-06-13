<?php

/* default/index.html.twig */
class __TwigTemplate_9b778da5ef0c799d79463112e3f809cfe08c5c95d80075f34b6070041ff3535b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cee0b793a3f537efa54680937b6fe6903ca5ee04f3b53671b2073d791afec02 = $this->env->getExtension("native_profiler");
        $__internal_2cee0b793a3f537efa54680937b6fe6903ca5ee04f3b53671b2073d791afec02->enter($__internal_2cee0b793a3f537efa54680937b6fe6903ca5ee04f3b53671b2073d791afec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cee0b793a3f537efa54680937b6fe6903ca5ee04f3b53671b2073d791afec02->leave($__internal_2cee0b793a3f537efa54680937b6fe6903ca5ee04f3b53671b2073d791afec02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_855fcbe594c2bce631f9a0308545a2c332fabbc9f512a4bb412015d6a3ec2a80 = $this->env->getExtension("native_profiler");
        $__internal_855fcbe594c2bce631f9a0308545a2c332fabbc9f512a4bb412015d6a3ec2a80->enter($__internal_855fcbe594c2bce631f9a0308545a2c332fabbc9f512a4bb412015d6a3ec2a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_855fcbe594c2bce631f9a0308545a2c332fabbc9f512a4bb412015d6a3ec2a80->leave($__internal_855fcbe594c2bce631f9a0308545a2c332fabbc9f512a4bb412015d6a3ec2a80_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     {{ id }}*/
/* {% endblock %}*/
/* */
