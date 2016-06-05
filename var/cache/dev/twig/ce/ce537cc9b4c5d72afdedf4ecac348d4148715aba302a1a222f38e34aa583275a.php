<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e96805cadcb7ded62209ab41c81afab64035b723922a44b08abd734c3eba6e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8836fc7db8c9bda9a554e385c0b363d394cea7b21644f30112297e2f2b15c25 = $this->env->getExtension("native_profiler");
        $__internal_c8836fc7db8c9bda9a554e385c0b363d394cea7b21644f30112297e2f2b15c25->enter($__internal_c8836fc7db8c9bda9a554e385c0b363d394cea7b21644f30112297e2f2b15c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8836fc7db8c9bda9a554e385c0b363d394cea7b21644f30112297e2f2b15c25->leave($__internal_c8836fc7db8c9bda9a554e385c0b363d394cea7b21644f30112297e2f2b15c25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2395051343e2a716727b217c8a1efba969476a500b942c28fa3094c945b23033 = $this->env->getExtension("native_profiler");
        $__internal_2395051343e2a716727b217c8a1efba969476a500b942c28fa3094c945b23033->enter($__internal_2395051343e2a716727b217c8a1efba969476a500b942c28fa3094c945b23033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2395051343e2a716727b217c8a1efba969476a500b942c28fa3094c945b23033->leave($__internal_2395051343e2a716727b217c8a1efba969476a500b942c28fa3094c945b23033_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_403adbc09b70756585eeab352550e7cb0fd3b183c65f4773dd5e6f2ecbeba569 = $this->env->getExtension("native_profiler");
        $__internal_403adbc09b70756585eeab352550e7cb0fd3b183c65f4773dd5e6f2ecbeba569->enter($__internal_403adbc09b70756585eeab352550e7cb0fd3b183c65f4773dd5e6f2ecbeba569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_403adbc09b70756585eeab352550e7cb0fd3b183c65f4773dd5e6f2ecbeba569->leave($__internal_403adbc09b70756585eeab352550e7cb0fd3b183c65f4773dd5e6f2ecbeba569_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_827a8996f9f399fddfc95abe6051219091077a3a51f72dcd401a789a14910ace = $this->env->getExtension("native_profiler");
        $__internal_827a8996f9f399fddfc95abe6051219091077a3a51f72dcd401a789a14910ace->enter($__internal_827a8996f9f399fddfc95abe6051219091077a3a51f72dcd401a789a14910ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_827a8996f9f399fddfc95abe6051219091077a3a51f72dcd401a789a14910ace->leave($__internal_827a8996f9f399fddfc95abe6051219091077a3a51f72dcd401a789a14910ace_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
