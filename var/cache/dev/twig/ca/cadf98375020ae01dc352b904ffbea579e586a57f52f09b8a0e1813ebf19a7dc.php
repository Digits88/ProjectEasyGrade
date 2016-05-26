<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7c5f61d60886122394feeff6b153f982c54981dd61a2f900f9ab9134f4a45e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bdd72b8c598df2a8061605294dc9ee85dcddbd0eeb07b3580f0749d89f2471f9 = $this->env->getExtension("native_profiler");
        $__internal_bdd72b8c598df2a8061605294dc9ee85dcddbd0eeb07b3580f0749d89f2471f9->enter($__internal_bdd72b8c598df2a8061605294dc9ee85dcddbd0eeb07b3580f0749d89f2471f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd72b8c598df2a8061605294dc9ee85dcddbd0eeb07b3580f0749d89f2471f9->leave($__internal_bdd72b8c598df2a8061605294dc9ee85dcddbd0eeb07b3580f0749d89f2471f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bfbe571d7e416884a5a9cbb009985628db2442ac41686a30287633cbbc661858 = $this->env->getExtension("native_profiler");
        $__internal_bfbe571d7e416884a5a9cbb009985628db2442ac41686a30287633cbbc661858->enter($__internal_bfbe571d7e416884a5a9cbb009985628db2442ac41686a30287633cbbc661858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bfbe571d7e416884a5a9cbb009985628db2442ac41686a30287633cbbc661858->leave($__internal_bfbe571d7e416884a5a9cbb009985628db2442ac41686a30287633cbbc661858_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84b8b8f44a0da13843dc2911b764ed2894b732b6a21f7ff8c9658b93f3bc2e76 = $this->env->getExtension("native_profiler");
        $__internal_84b8b8f44a0da13843dc2911b764ed2894b732b6a21f7ff8c9658b93f3bc2e76->enter($__internal_84b8b8f44a0da13843dc2911b764ed2894b732b6a21f7ff8c9658b93f3bc2e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84b8b8f44a0da13843dc2911b764ed2894b732b6a21f7ff8c9658b93f3bc2e76->leave($__internal_84b8b8f44a0da13843dc2911b764ed2894b732b6a21f7ff8c9658b93f3bc2e76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52966d50d45af113be5e9684b2bbb9c0d8c72ec723175a7ae95c7a7b41cfb93a = $this->env->getExtension("native_profiler");
        $__internal_52966d50d45af113be5e9684b2bbb9c0d8c72ec723175a7ae95c7a7b41cfb93a->enter($__internal_52966d50d45af113be5e9684b2bbb9c0d8c72ec723175a7ae95c7a7b41cfb93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52966d50d45af113be5e9684b2bbb9c0d8c72ec723175a7ae95c7a7b41cfb93a->leave($__internal_52966d50d45af113be5e9684b2bbb9c0d8c72ec723175a7ae95c7a7b41cfb93a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
