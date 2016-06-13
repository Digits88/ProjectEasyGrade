<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f791ed324a644b0792747fe45f89913122bdc998856cc6331a778759e7e226db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_62a63c47b8232cdc1f9cf287f27b2eaae5b80bd272b4b8c16ee888c8a98bd913 = $this->env->getExtension("native_profiler");
        $__internal_62a63c47b8232cdc1f9cf287f27b2eaae5b80bd272b4b8c16ee888c8a98bd913->enter($__internal_62a63c47b8232cdc1f9cf287f27b2eaae5b80bd272b4b8c16ee888c8a98bd913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a63c47b8232cdc1f9cf287f27b2eaae5b80bd272b4b8c16ee888c8a98bd913->leave($__internal_62a63c47b8232cdc1f9cf287f27b2eaae5b80bd272b4b8c16ee888c8a98bd913_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e3827731e51b43abe607c10ec61185bbc788dd78f036298dd5550e1c616f4d = $this->env->getExtension("native_profiler");
        $__internal_d3e3827731e51b43abe607c10ec61185bbc788dd78f036298dd5550e1c616f4d->enter($__internal_d3e3827731e51b43abe607c10ec61185bbc788dd78f036298dd5550e1c616f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3e3827731e51b43abe607c10ec61185bbc788dd78f036298dd5550e1c616f4d->leave($__internal_d3e3827731e51b43abe607c10ec61185bbc788dd78f036298dd5550e1c616f4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0668f3bdd3ef6807cd819a092dfe9cb85511459528cc508b9ea14b2d83b3c175 = $this->env->getExtension("native_profiler");
        $__internal_0668f3bdd3ef6807cd819a092dfe9cb85511459528cc508b9ea14b2d83b3c175->enter($__internal_0668f3bdd3ef6807cd819a092dfe9cb85511459528cc508b9ea14b2d83b3c175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0668f3bdd3ef6807cd819a092dfe9cb85511459528cc508b9ea14b2d83b3c175->leave($__internal_0668f3bdd3ef6807cd819a092dfe9cb85511459528cc508b9ea14b2d83b3c175_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
