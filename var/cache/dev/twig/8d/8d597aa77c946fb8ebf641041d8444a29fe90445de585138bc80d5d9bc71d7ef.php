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
        $__internal_88a426cdcc283139a5af6bf850c7e4e67baea97f0b9c9c801e10c305193a0141 = $this->env->getExtension("native_profiler");
        $__internal_88a426cdcc283139a5af6bf850c7e4e67baea97f0b9c9c801e10c305193a0141->enter($__internal_88a426cdcc283139a5af6bf850c7e4e67baea97f0b9c9c801e10c305193a0141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a426cdcc283139a5af6bf850c7e4e67baea97f0b9c9c801e10c305193a0141->leave($__internal_88a426cdcc283139a5af6bf850c7e4e67baea97f0b9c9c801e10c305193a0141_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_059aeb3b269b932366512d19e88aa747a561b8c3bf17d6eeb73f322bd9100a8d = $this->env->getExtension("native_profiler");
        $__internal_059aeb3b269b932366512d19e88aa747a561b8c3bf17d6eeb73f322bd9100a8d->enter($__internal_059aeb3b269b932366512d19e88aa747a561b8c3bf17d6eeb73f322bd9100a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_059aeb3b269b932366512d19e88aa747a561b8c3bf17d6eeb73f322bd9100a8d->leave($__internal_059aeb3b269b932366512d19e88aa747a561b8c3bf17d6eeb73f322bd9100a8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a821b99428222058378540026430f86a2cf2232894e4bf8421f3c495d9438e6e = $this->env->getExtension("native_profiler");
        $__internal_a821b99428222058378540026430f86a2cf2232894e4bf8421f3c495d9438e6e->enter($__internal_a821b99428222058378540026430f86a2cf2232894e4bf8421f3c495d9438e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a821b99428222058378540026430f86a2cf2232894e4bf8421f3c495d9438e6e->leave($__internal_a821b99428222058378540026430f86a2cf2232894e4bf8421f3c495d9438e6e_prof);

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
