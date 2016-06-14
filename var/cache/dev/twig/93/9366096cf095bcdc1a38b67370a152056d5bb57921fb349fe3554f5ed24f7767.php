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
        $__internal_31efb8a55515297bfba3e2095b769eab8d2de02fcf0d80df5bb6ae31c1f337e8 = $this->env->getExtension("native_profiler");
        $__internal_31efb8a55515297bfba3e2095b769eab8d2de02fcf0d80df5bb6ae31c1f337e8->enter($__internal_31efb8a55515297bfba3e2095b769eab8d2de02fcf0d80df5bb6ae31c1f337e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31efb8a55515297bfba3e2095b769eab8d2de02fcf0d80df5bb6ae31c1f337e8->leave($__internal_31efb8a55515297bfba3e2095b769eab8d2de02fcf0d80df5bb6ae31c1f337e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42b219d8e4a6fd90aaca26f43e9354bc8bd8d1819024f17f504f61846c3d294c = $this->env->getExtension("native_profiler");
        $__internal_42b219d8e4a6fd90aaca26f43e9354bc8bd8d1819024f17f504f61846c3d294c->enter($__internal_42b219d8e4a6fd90aaca26f43e9354bc8bd8d1819024f17f504f61846c3d294c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42b219d8e4a6fd90aaca26f43e9354bc8bd8d1819024f17f504f61846c3d294c->leave($__internal_42b219d8e4a6fd90aaca26f43e9354bc8bd8d1819024f17f504f61846c3d294c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37577adb2a757bec1fd12bdb6ef709e1fbe4892eab82e3ee896dfc0740dce6f = $this->env->getExtension("native_profiler");
        $__internal_f37577adb2a757bec1fd12bdb6ef709e1fbe4892eab82e3ee896dfc0740dce6f->enter($__internal_f37577adb2a757bec1fd12bdb6ef709e1fbe4892eab82e3ee896dfc0740dce6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f37577adb2a757bec1fd12bdb6ef709e1fbe4892eab82e3ee896dfc0740dce6f->leave($__internal_f37577adb2a757bec1fd12bdb6ef709e1fbe4892eab82e3ee896dfc0740dce6f_prof);

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
