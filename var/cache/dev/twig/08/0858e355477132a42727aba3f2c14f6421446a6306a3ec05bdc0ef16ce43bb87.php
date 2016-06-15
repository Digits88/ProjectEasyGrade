<?php

/* :default:index.html.twig */
class __TwigTemplate_171dd70dae51ee7946af2ac87b7c8e9ecb9bdad033bf8f2d90e1a755bf14cf5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_97200a723e95fc48e953dc8e060c73546c12726856415bd99641a52a3b8d8394 = $this->env->getExtension("native_profiler");
        $__internal_97200a723e95fc48e953dc8e060c73546c12726856415bd99641a52a3b8d8394->enter($__internal_97200a723e95fc48e953dc8e060c73546c12726856415bd99641a52a3b8d8394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97200a723e95fc48e953dc8e060c73546c12726856415bd99641a52a3b8d8394->leave($__internal_97200a723e95fc48e953dc8e060c73546c12726856415bd99641a52a3b8d8394_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7378b391706fe67e5dd2a2e5e139f9f7f3a2b44f2e434f38d2acb3ff68de430 = $this->env->getExtension("native_profiler");
        $__internal_a7378b391706fe67e5dd2a2e5e139f9f7f3a2b44f2e434f38d2acb3ff68de430->enter($__internal_a7378b391706fe67e5dd2a2e5e139f9f7f3a2b44f2e434f38d2acb3ff68de430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_a7378b391706fe67e5dd2a2e5e139f9f7f3a2b44f2e434f38d2acb3ff68de430->leave($__internal_a7378b391706fe67e5dd2a2e5e139f9f7f3a2b44f2e434f38d2acb3ff68de430_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
