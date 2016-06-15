<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_34b2848d6a9603724c1a781d54fea7da7deae70ae164f229535f23347ae793eb extends Twig_Template
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
        $__internal_85c44ebd64cec94d46375dbd21f4f2cbad9e098be1bca454a77591df3ee46d08 = $this->env->getExtension("native_profiler");
        $__internal_85c44ebd64cec94d46375dbd21f4f2cbad9e098be1bca454a77591df3ee46d08->enter($__internal_85c44ebd64cec94d46375dbd21f4f2cbad9e098be1bca454a77591df3ee46d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c44ebd64cec94d46375dbd21f4f2cbad9e098be1bca454a77591df3ee46d08->leave($__internal_85c44ebd64cec94d46375dbd21f4f2cbad9e098be1bca454a77591df3ee46d08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57eee8222b3dce5250e5b37b9181b399c770e39cb7dc8927aee03014978c0fe2 = $this->env->getExtension("native_profiler");
        $__internal_57eee8222b3dce5250e5b37b9181b399c770e39cb7dc8927aee03014978c0fe2->enter($__internal_57eee8222b3dce5250e5b37b9181b399c770e39cb7dc8927aee03014978c0fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57eee8222b3dce5250e5b37b9181b399c770e39cb7dc8927aee03014978c0fe2->leave($__internal_57eee8222b3dce5250e5b37b9181b399c770e39cb7dc8927aee03014978c0fe2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2119e53c4a231c315e59f2aa9ce9f0a4d2559c7158881f46f1135c2ec12b79c = $this->env->getExtension("native_profiler");
        $__internal_f2119e53c4a231c315e59f2aa9ce9f0a4d2559c7158881f46f1135c2ec12b79c->enter($__internal_f2119e53c4a231c315e59f2aa9ce9f0a4d2559c7158881f46f1135c2ec12b79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2119e53c4a231c315e59f2aa9ce9f0a4d2559c7158881f46f1135c2ec12b79c->leave($__internal_f2119e53c4a231c315e59f2aa9ce9f0a4d2559c7158881f46f1135c2ec12b79c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_680173ebc0e3dfd988d492f12f9115106adc3e1d65fab297f8a8f4135fd939a8 = $this->env->getExtension("native_profiler");
        $__internal_680173ebc0e3dfd988d492f12f9115106adc3e1d65fab297f8a8f4135fd939a8->enter($__internal_680173ebc0e3dfd988d492f12f9115106adc3e1d65fab297f8a8f4135fd939a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_680173ebc0e3dfd988d492f12f9115106adc3e1d65fab297f8a8f4135fd939a8->leave($__internal_680173ebc0e3dfd988d492f12f9115106adc3e1d65fab297f8a8f4135fd939a8_prof);

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
