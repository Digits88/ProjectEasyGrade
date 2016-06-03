<?php

/* default/index.html.twig */
class __TwigTemplate_b063ea988ac9ec1d480ac054dd9ea21836cb3a2ef725ee124d13511606a9d465 extends Twig_Template
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
        $__internal_9519121519b85a1ab52a5507c0e5377099001a450a2dc28c04cd32706436a967 = $this->env->getExtension("native_profiler");
        $__internal_9519121519b85a1ab52a5507c0e5377099001a450a2dc28c04cd32706436a967->enter($__internal_9519121519b85a1ab52a5507c0e5377099001a450a2dc28c04cd32706436a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9519121519b85a1ab52a5507c0e5377099001a450a2dc28c04cd32706436a967->leave($__internal_9519121519b85a1ab52a5507c0e5377099001a450a2dc28c04cd32706436a967_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b44d3cc809515457e40dab1d4cba7d282ac8e8e81f65280f0efddb14426afc5e = $this->env->getExtension("native_profiler");
        $__internal_b44d3cc809515457e40dab1d4cba7d282ac8e8e81f65280f0efddb14426afc5e->enter($__internal_b44d3cc809515457e40dab1d4cba7d282ac8e8e81f65280f0efddb14426afc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_b44d3cc809515457e40dab1d4cba7d282ac8e8e81f65280f0efddb14426afc5e->leave($__internal_b44d3cc809515457e40dab1d4cba7d282ac8e8e81f65280f0efddb14426afc5e_prof);

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
