<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1e7ce39f14987e1f4f9d154b055b45dbc9afb8ec16e547a7ba0079c117ccb0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f4c19ffb79b95065116003132c28398f5caedccde246e397e297c938ab0f2c = $this->env->getExtension("native_profiler");
        $__internal_57f4c19ffb79b95065116003132c28398f5caedccde246e397e297c938ab0f2c->enter($__internal_57f4c19ffb79b95065116003132c28398f5caedccde246e397e297c938ab0f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f4c19ffb79b95065116003132c28398f5caedccde246e397e297c938ab0f2c->leave($__internal_57f4c19ffb79b95065116003132c28398f5caedccde246e397e297c938ab0f2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6b9eea5920e59dae10cb37656a58a088a54f6583dabf6498724b44ef72d974b = $this->env->getExtension("native_profiler");
        $__internal_c6b9eea5920e59dae10cb37656a58a088a54f6583dabf6498724b44ef72d974b->enter($__internal_c6b9eea5920e59dae10cb37656a58a088a54f6583dabf6498724b44ef72d974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6b9eea5920e59dae10cb37656a58a088a54f6583dabf6498724b44ef72d974b->leave($__internal_c6b9eea5920e59dae10cb37656a58a088a54f6583dabf6498724b44ef72d974b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21f8d46a3a33369195d9ff28a7433ea01e89b6ad03759e0d1b2a820f708ee1d2 = $this->env->getExtension("native_profiler");
        $__internal_21f8d46a3a33369195d9ff28a7433ea01e89b6ad03759e0d1b2a820f708ee1d2->enter($__internal_21f8d46a3a33369195d9ff28a7433ea01e89b6ad03759e0d1b2a820f708ee1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21f8d46a3a33369195d9ff28a7433ea01e89b6ad03759e0d1b2a820f708ee1d2->leave($__internal_21f8d46a3a33369195d9ff28a7433ea01e89b6ad03759e0d1b2a820f708ee1d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8d057be8fd29ec1d08a9b82c37998ead4fe29abcbafc28a92855b4d155d9238 = $this->env->getExtension("native_profiler");
        $__internal_e8d057be8fd29ec1d08a9b82c37998ead4fe29abcbafc28a92855b4d155d9238->enter($__internal_e8d057be8fd29ec1d08a9b82c37998ead4fe29abcbafc28a92855b4d155d9238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8d057be8fd29ec1d08a9b82c37998ead4fe29abcbafc28a92855b4d155d9238->leave($__internal_e8d057be8fd29ec1d08a9b82c37998ead4fe29abcbafc28a92855b4d155d9238_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
