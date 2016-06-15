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
        $__internal_10b1487666abb9ccfada1f220899d1cc55ac6918c81b02dd90c5f5a2e3c3c910 = $this->env->getExtension("native_profiler");
        $__internal_10b1487666abb9ccfada1f220899d1cc55ac6918c81b02dd90c5f5a2e3c3c910->enter($__internal_10b1487666abb9ccfada1f220899d1cc55ac6918c81b02dd90c5f5a2e3c3c910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10b1487666abb9ccfada1f220899d1cc55ac6918c81b02dd90c5f5a2e3c3c910->leave($__internal_10b1487666abb9ccfada1f220899d1cc55ac6918c81b02dd90c5f5a2e3c3c910_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_582918d236d48eecbc303b376312df0ad5cc571473af7d2adf455808c7a26ddd = $this->env->getExtension("native_profiler");
        $__internal_582918d236d48eecbc303b376312df0ad5cc571473af7d2adf455808c7a26ddd->enter($__internal_582918d236d48eecbc303b376312df0ad5cc571473af7d2adf455808c7a26ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_582918d236d48eecbc303b376312df0ad5cc571473af7d2adf455808c7a26ddd->leave($__internal_582918d236d48eecbc303b376312df0ad5cc571473af7d2adf455808c7a26ddd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef087958d6e2fcddd6db1e2d181b8f5c12d526071bb1a2f15d899fa5b0355a8a = $this->env->getExtension("native_profiler");
        $__internal_ef087958d6e2fcddd6db1e2d181b8f5c12d526071bb1a2f15d899fa5b0355a8a->enter($__internal_ef087958d6e2fcddd6db1e2d181b8f5c12d526071bb1a2f15d899fa5b0355a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef087958d6e2fcddd6db1e2d181b8f5c12d526071bb1a2f15d899fa5b0355a8a->leave($__internal_ef087958d6e2fcddd6db1e2d181b8f5c12d526071bb1a2f15d899fa5b0355a8a_prof);

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
