<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d5ec7ee876f278bec67af5e3e91d53d161ce122a02440ed10ccaadc98b08dfc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_82b5fd02d0b32005c6b5d14e606248a9d336a1bd4e5f1c06f95f5fee4df8e8cf = $this->env->getExtension("native_profiler");
        $__internal_82b5fd02d0b32005c6b5d14e606248a9d336a1bd4e5f1c06f95f5fee4df8e8cf->enter($__internal_82b5fd02d0b32005c6b5d14e606248a9d336a1bd4e5f1c06f95f5fee4df8e8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b5fd02d0b32005c6b5d14e606248a9d336a1bd4e5f1c06f95f5fee4df8e8cf->leave($__internal_82b5fd02d0b32005c6b5d14e606248a9d336a1bd4e5f1c06f95f5fee4df8e8cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75f94f4e5d307c0436027064040f0472adff92b8aa5825e324706f4cc2d78349 = $this->env->getExtension("native_profiler");
        $__internal_75f94f4e5d307c0436027064040f0472adff92b8aa5825e324706f4cc2d78349->enter($__internal_75f94f4e5d307c0436027064040f0472adff92b8aa5825e324706f4cc2d78349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75f94f4e5d307c0436027064040f0472adff92b8aa5825e324706f4cc2d78349->leave($__internal_75f94f4e5d307c0436027064040f0472adff92b8aa5825e324706f4cc2d78349_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58ed92936c58bd42c0c3a39b89e4e9be3903356e37665c3ef4bc257c1acf095 = $this->env->getExtension("native_profiler");
        $__internal_c58ed92936c58bd42c0c3a39b89e4e9be3903356e37665c3ef4bc257c1acf095->enter($__internal_c58ed92936c58bd42c0c3a39b89e4e9be3903356e37665c3ef4bc257c1acf095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c58ed92936c58bd42c0c3a39b89e4e9be3903356e37665c3ef4bc257c1acf095->leave($__internal_c58ed92936c58bd42c0c3a39b89e4e9be3903356e37665c3ef4bc257c1acf095_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
