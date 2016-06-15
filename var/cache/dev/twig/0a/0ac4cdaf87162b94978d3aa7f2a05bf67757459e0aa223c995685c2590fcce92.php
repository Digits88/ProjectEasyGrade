<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8ce026b52c08b99db703dbdca92f6d79e2a85b20475189ea3a9a837a8e35b5a extends Twig_Template
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
        $__internal_ebc5329ecc0adfa45b45bc247bd5cd5ff6a426c67087de1e753f1bdd8529953f = $this->env->getExtension("native_profiler");
        $__internal_ebc5329ecc0adfa45b45bc247bd5cd5ff6a426c67087de1e753f1bdd8529953f->enter($__internal_ebc5329ecc0adfa45b45bc247bd5cd5ff6a426c67087de1e753f1bdd8529953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc5329ecc0adfa45b45bc247bd5cd5ff6a426c67087de1e753f1bdd8529953f->leave($__internal_ebc5329ecc0adfa45b45bc247bd5cd5ff6a426c67087de1e753f1bdd8529953f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0fc77c45f58ee8a76461834b55305077ebd8062a380478bf10d5180dfa8245e = $this->env->getExtension("native_profiler");
        $__internal_c0fc77c45f58ee8a76461834b55305077ebd8062a380478bf10d5180dfa8245e->enter($__internal_c0fc77c45f58ee8a76461834b55305077ebd8062a380478bf10d5180dfa8245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0fc77c45f58ee8a76461834b55305077ebd8062a380478bf10d5180dfa8245e->leave($__internal_c0fc77c45f58ee8a76461834b55305077ebd8062a380478bf10d5180dfa8245e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6614f5ce0175c3f2e547a7925da2bd21b79b92a1eff9fb19bd787e07f07e0a08 = $this->env->getExtension("native_profiler");
        $__internal_6614f5ce0175c3f2e547a7925da2bd21b79b92a1eff9fb19bd787e07f07e0a08->enter($__internal_6614f5ce0175c3f2e547a7925da2bd21b79b92a1eff9fb19bd787e07f07e0a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6614f5ce0175c3f2e547a7925da2bd21b79b92a1eff9fb19bd787e07f07e0a08->leave($__internal_6614f5ce0175c3f2e547a7925da2bd21b79b92a1eff9fb19bd787e07f07e0a08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0c47757da0d352dda7935518c5741e6ba79cdc3d98dce8428ece8f0bba3c389 = $this->env->getExtension("native_profiler");
        $__internal_c0c47757da0d352dda7935518c5741e6ba79cdc3d98dce8428ece8f0bba3c389->enter($__internal_c0c47757da0d352dda7935518c5741e6ba79cdc3d98dce8428ece8f0bba3c389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0c47757da0d352dda7935518c5741e6ba79cdc3d98dce8428ece8f0bba3c389->leave($__internal_c0c47757da0d352dda7935518c5741e6ba79cdc3d98dce8428ece8f0bba3c389_prof);

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
