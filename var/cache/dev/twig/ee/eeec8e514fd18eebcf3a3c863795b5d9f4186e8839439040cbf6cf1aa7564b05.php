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
        $__internal_7949230bdcfee298fd139b78207931b0f945fb3f433ec47fa36989ca5d7f7e7f = $this->env->getExtension("native_profiler");
        $__internal_7949230bdcfee298fd139b78207931b0f945fb3f433ec47fa36989ca5d7f7e7f->enter($__internal_7949230bdcfee298fd139b78207931b0f945fb3f433ec47fa36989ca5d7f7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7949230bdcfee298fd139b78207931b0f945fb3f433ec47fa36989ca5d7f7e7f->leave($__internal_7949230bdcfee298fd139b78207931b0f945fb3f433ec47fa36989ca5d7f7e7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bff9bae6f94ed8ff1dd9e810904211c292f5e5bddcafa1264eed9ebd59cf4b9 = $this->env->getExtension("native_profiler");
        $__internal_0bff9bae6f94ed8ff1dd9e810904211c292f5e5bddcafa1264eed9ebd59cf4b9->enter($__internal_0bff9bae6f94ed8ff1dd9e810904211c292f5e5bddcafa1264eed9ebd59cf4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bff9bae6f94ed8ff1dd9e810904211c292f5e5bddcafa1264eed9ebd59cf4b9->leave($__internal_0bff9bae6f94ed8ff1dd9e810904211c292f5e5bddcafa1264eed9ebd59cf4b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ac48584cc67c1ebb305e38f491cdb32badf113332a3547fdf94e064109a9eb6 = $this->env->getExtension("native_profiler");
        $__internal_4ac48584cc67c1ebb305e38f491cdb32badf113332a3547fdf94e064109a9eb6->enter($__internal_4ac48584cc67c1ebb305e38f491cdb32badf113332a3547fdf94e064109a9eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ac48584cc67c1ebb305e38f491cdb32badf113332a3547fdf94e064109a9eb6->leave($__internal_4ac48584cc67c1ebb305e38f491cdb32badf113332a3547fdf94e064109a9eb6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c338e17fc25b60c91ee5a53e8153df0d3f87ad3e37c6c75b46f0ac4935e318d = $this->env->getExtension("native_profiler");
        $__internal_5c338e17fc25b60c91ee5a53e8153df0d3f87ad3e37c6c75b46f0ac4935e318d->enter($__internal_5c338e17fc25b60c91ee5a53e8153df0d3f87ad3e37c6c75b46f0ac4935e318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c338e17fc25b60c91ee5a53e8153df0d3f87ad3e37c6c75b46f0ac4935e318d->leave($__internal_5c338e17fc25b60c91ee5a53e8153df0d3f87ad3e37c6c75b46f0ac4935e318d_prof);

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
