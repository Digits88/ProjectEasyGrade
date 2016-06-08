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
        $__internal_eeb8174566c3a14c28e9a8af4c4b5d313753449b30cfcf8d2f967b8bfa895eba = $this->env->getExtension("native_profiler");
        $__internal_eeb8174566c3a14c28e9a8af4c4b5d313753449b30cfcf8d2f967b8bfa895eba->enter($__internal_eeb8174566c3a14c28e9a8af4c4b5d313753449b30cfcf8d2f967b8bfa895eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb8174566c3a14c28e9a8af4c4b5d313753449b30cfcf8d2f967b8bfa895eba->leave($__internal_eeb8174566c3a14c28e9a8af4c4b5d313753449b30cfcf8d2f967b8bfa895eba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8aaf34f9b6eaea80e733e8bd0ec4b171357518bb04086ff9023c07932156eaa = $this->env->getExtension("native_profiler");
        $__internal_d8aaf34f9b6eaea80e733e8bd0ec4b171357518bb04086ff9023c07932156eaa->enter($__internal_d8aaf34f9b6eaea80e733e8bd0ec4b171357518bb04086ff9023c07932156eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8aaf34f9b6eaea80e733e8bd0ec4b171357518bb04086ff9023c07932156eaa->leave($__internal_d8aaf34f9b6eaea80e733e8bd0ec4b171357518bb04086ff9023c07932156eaa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7917c0e223bed29a6b355e79d8ffb674fe283901bef6cb0a56f6eab1a2510c8b = $this->env->getExtension("native_profiler");
        $__internal_7917c0e223bed29a6b355e79d8ffb674fe283901bef6cb0a56f6eab1a2510c8b->enter($__internal_7917c0e223bed29a6b355e79d8ffb674fe283901bef6cb0a56f6eab1a2510c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7917c0e223bed29a6b355e79d8ffb674fe283901bef6cb0a56f6eab1a2510c8b->leave($__internal_7917c0e223bed29a6b355e79d8ffb674fe283901bef6cb0a56f6eab1a2510c8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce9f5357da4f0a09266c9ee63412cd601f6405f5532fec043b556c75dbf65a97 = $this->env->getExtension("native_profiler");
        $__internal_ce9f5357da4f0a09266c9ee63412cd601f6405f5532fec043b556c75dbf65a97->enter($__internal_ce9f5357da4f0a09266c9ee63412cd601f6405f5532fec043b556c75dbf65a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce9f5357da4f0a09266c9ee63412cd601f6405f5532fec043b556c75dbf65a97->leave($__internal_ce9f5357da4f0a09266c9ee63412cd601f6405f5532fec043b556c75dbf65a97_prof);

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
