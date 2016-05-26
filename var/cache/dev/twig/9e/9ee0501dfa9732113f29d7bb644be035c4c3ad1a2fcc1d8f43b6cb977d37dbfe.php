<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c0dbc595abe68575cddbc38944f29b9bf9823e002e92613829fb7b29ad810a35 extends Twig_Template
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
        $__internal_803b7675a63b67cce0bb96b55db2b2b633e0b342e2777e1cd10ccd00b6d67d2a = $this->env->getExtension("native_profiler");
        $__internal_803b7675a63b67cce0bb96b55db2b2b633e0b342e2777e1cd10ccd00b6d67d2a->enter($__internal_803b7675a63b67cce0bb96b55db2b2b633e0b342e2777e1cd10ccd00b6d67d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_803b7675a63b67cce0bb96b55db2b2b633e0b342e2777e1cd10ccd00b6d67d2a->leave($__internal_803b7675a63b67cce0bb96b55db2b2b633e0b342e2777e1cd10ccd00b6d67d2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a574b4cb716539008904ce1485f1ab7cbf11e75f2586cd1a60ea56c44d7b6a44 = $this->env->getExtension("native_profiler");
        $__internal_a574b4cb716539008904ce1485f1ab7cbf11e75f2586cd1a60ea56c44d7b6a44->enter($__internal_a574b4cb716539008904ce1485f1ab7cbf11e75f2586cd1a60ea56c44d7b6a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a574b4cb716539008904ce1485f1ab7cbf11e75f2586cd1a60ea56c44d7b6a44->leave($__internal_a574b4cb716539008904ce1485f1ab7cbf11e75f2586cd1a60ea56c44d7b6a44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6853adb1bcdc7271176eef6d01464f5f1fb49471265d8b5468cfd34c2bd8a93a = $this->env->getExtension("native_profiler");
        $__internal_6853adb1bcdc7271176eef6d01464f5f1fb49471265d8b5468cfd34c2bd8a93a->enter($__internal_6853adb1bcdc7271176eef6d01464f5f1fb49471265d8b5468cfd34c2bd8a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6853adb1bcdc7271176eef6d01464f5f1fb49471265d8b5468cfd34c2bd8a93a->leave($__internal_6853adb1bcdc7271176eef6d01464f5f1fb49471265d8b5468cfd34c2bd8a93a_prof);

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
