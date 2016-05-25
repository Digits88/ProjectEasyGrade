<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d9c99ac76fc2140fc3dd8703ff925340bb8bc959ec9650ad2e7c5009bf5ec5a8 extends Twig_Template
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
        $__internal_7e12b80d4b844ce8e3bf7e5964116d96b5193e6acdee83a06a5d92e8563dcfc9 = $this->env->getExtension("native_profiler");
        $__internal_7e12b80d4b844ce8e3bf7e5964116d96b5193e6acdee83a06a5d92e8563dcfc9->enter($__internal_7e12b80d4b844ce8e3bf7e5964116d96b5193e6acdee83a06a5d92e8563dcfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e12b80d4b844ce8e3bf7e5964116d96b5193e6acdee83a06a5d92e8563dcfc9->leave($__internal_7e12b80d4b844ce8e3bf7e5964116d96b5193e6acdee83a06a5d92e8563dcfc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48154627780f711358dadf8c72ca946615fa527544cddbfba07ef1b1dcd6a2e1 = $this->env->getExtension("native_profiler");
        $__internal_48154627780f711358dadf8c72ca946615fa527544cddbfba07ef1b1dcd6a2e1->enter($__internal_48154627780f711358dadf8c72ca946615fa527544cddbfba07ef1b1dcd6a2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48154627780f711358dadf8c72ca946615fa527544cddbfba07ef1b1dcd6a2e1->leave($__internal_48154627780f711358dadf8c72ca946615fa527544cddbfba07ef1b1dcd6a2e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b3184c8be00eb58f3d8d50fc17db636b1324d2fbb6e4e5242ccfd98bd9cf268 = $this->env->getExtension("native_profiler");
        $__internal_3b3184c8be00eb58f3d8d50fc17db636b1324d2fbb6e4e5242ccfd98bd9cf268->enter($__internal_3b3184c8be00eb58f3d8d50fc17db636b1324d2fbb6e4e5242ccfd98bd9cf268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b3184c8be00eb58f3d8d50fc17db636b1324d2fbb6e4e5242ccfd98bd9cf268->leave($__internal_3b3184c8be00eb58f3d8d50fc17db636b1324d2fbb6e4e5242ccfd98bd9cf268_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0842028539c4bc01b65b56440e3e497637d980a9d2e42e432d12dbe5f76fe689 = $this->env->getExtension("native_profiler");
        $__internal_0842028539c4bc01b65b56440e3e497637d980a9d2e42e432d12dbe5f76fe689->enter($__internal_0842028539c4bc01b65b56440e3e497637d980a9d2e42e432d12dbe5f76fe689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0842028539c4bc01b65b56440e3e497637d980a9d2e42e432d12dbe5f76fe689->leave($__internal_0842028539c4bc01b65b56440e3e497637d980a9d2e42e432d12dbe5f76fe689_prof);

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
