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
        $__internal_5993d2a9e871785d3f2958ac746953130ceeb68536ba51325abbf4a0d301eeaa = $this->env->getExtension("native_profiler");
        $__internal_5993d2a9e871785d3f2958ac746953130ceeb68536ba51325abbf4a0d301eeaa->enter($__internal_5993d2a9e871785d3f2958ac746953130ceeb68536ba51325abbf4a0d301eeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5993d2a9e871785d3f2958ac746953130ceeb68536ba51325abbf4a0d301eeaa->leave($__internal_5993d2a9e871785d3f2958ac746953130ceeb68536ba51325abbf4a0d301eeaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4af96e5bded8b20c86472ed5759c932fa041200dc2f71f23d13e7809f2490ad6 = $this->env->getExtension("native_profiler");
        $__internal_4af96e5bded8b20c86472ed5759c932fa041200dc2f71f23d13e7809f2490ad6->enter($__internal_4af96e5bded8b20c86472ed5759c932fa041200dc2f71f23d13e7809f2490ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4af96e5bded8b20c86472ed5759c932fa041200dc2f71f23d13e7809f2490ad6->leave($__internal_4af96e5bded8b20c86472ed5759c932fa041200dc2f71f23d13e7809f2490ad6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_284a097631b22cc76ea8dc00b9fd9c5a94c528274e7b2b41c5039944ff5fd579 = $this->env->getExtension("native_profiler");
        $__internal_284a097631b22cc76ea8dc00b9fd9c5a94c528274e7b2b41c5039944ff5fd579->enter($__internal_284a097631b22cc76ea8dc00b9fd9c5a94c528274e7b2b41c5039944ff5fd579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_284a097631b22cc76ea8dc00b9fd9c5a94c528274e7b2b41c5039944ff5fd579->leave($__internal_284a097631b22cc76ea8dc00b9fd9c5a94c528274e7b2b41c5039944ff5fd579_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a321d79b24fccc2141e912cb6e021818389203d502b464fd9871e8cfc529b0f2 = $this->env->getExtension("native_profiler");
        $__internal_a321d79b24fccc2141e912cb6e021818389203d502b464fd9871e8cfc529b0f2->enter($__internal_a321d79b24fccc2141e912cb6e021818389203d502b464fd9871e8cfc529b0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a321d79b24fccc2141e912cb6e021818389203d502b464fd9871e8cfc529b0f2->leave($__internal_a321d79b24fccc2141e912cb6e021818389203d502b464fd9871e8cfc529b0f2_prof);

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
