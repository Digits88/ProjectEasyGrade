<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_efb05d13ee6b546af75494e534b0b1bb85a9ee8e6dea019b9e23fcdae86c7d72 extends Twig_Template
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
        $__internal_c36ae8b1140339fbe95ac9faebb587acb51384a88fd8a2a3bb157de5ecfbc225 = $this->env->getExtension("native_profiler");
        $__internal_c36ae8b1140339fbe95ac9faebb587acb51384a88fd8a2a3bb157de5ecfbc225->enter($__internal_c36ae8b1140339fbe95ac9faebb587acb51384a88fd8a2a3bb157de5ecfbc225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36ae8b1140339fbe95ac9faebb587acb51384a88fd8a2a3bb157de5ecfbc225->leave($__internal_c36ae8b1140339fbe95ac9faebb587acb51384a88fd8a2a3bb157de5ecfbc225_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a714d3b63197ac3b9d502d7f2699417700dd397ba5903dc8cefaa6b9ae738ba = $this->env->getExtension("native_profiler");
        $__internal_4a714d3b63197ac3b9d502d7f2699417700dd397ba5903dc8cefaa6b9ae738ba->enter($__internal_4a714d3b63197ac3b9d502d7f2699417700dd397ba5903dc8cefaa6b9ae738ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4a714d3b63197ac3b9d502d7f2699417700dd397ba5903dc8cefaa6b9ae738ba->leave($__internal_4a714d3b63197ac3b9d502d7f2699417700dd397ba5903dc8cefaa6b9ae738ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1357218bde18c16ea9403dcd2ae3178f8677e6e825f39e8d968df4d0ecb1c4c5 = $this->env->getExtension("native_profiler");
        $__internal_1357218bde18c16ea9403dcd2ae3178f8677e6e825f39e8d968df4d0ecb1c4c5->enter($__internal_1357218bde18c16ea9403dcd2ae3178f8677e6e825f39e8d968df4d0ecb1c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1357218bde18c16ea9403dcd2ae3178f8677e6e825f39e8d968df4d0ecb1c4c5->leave($__internal_1357218bde18c16ea9403dcd2ae3178f8677e6e825f39e8d968df4d0ecb1c4c5_prof);

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
