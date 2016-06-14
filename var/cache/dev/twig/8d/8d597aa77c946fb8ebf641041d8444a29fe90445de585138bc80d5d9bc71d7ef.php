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
        $__internal_241b1abd3c40c427d3efd7e76311208608a976eb5433bfe33bb41560ed3dd6c5 = $this->env->getExtension("native_profiler");
        $__internal_241b1abd3c40c427d3efd7e76311208608a976eb5433bfe33bb41560ed3dd6c5->enter($__internal_241b1abd3c40c427d3efd7e76311208608a976eb5433bfe33bb41560ed3dd6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241b1abd3c40c427d3efd7e76311208608a976eb5433bfe33bb41560ed3dd6c5->leave($__internal_241b1abd3c40c427d3efd7e76311208608a976eb5433bfe33bb41560ed3dd6c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c121b18b9d65f9bbcc9eee24df49ad7c20efe29429845fddcc7528d0d74f81e = $this->env->getExtension("native_profiler");
        $__internal_0c121b18b9d65f9bbcc9eee24df49ad7c20efe29429845fddcc7528d0d74f81e->enter($__internal_0c121b18b9d65f9bbcc9eee24df49ad7c20efe29429845fddcc7528d0d74f81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c121b18b9d65f9bbcc9eee24df49ad7c20efe29429845fddcc7528d0d74f81e->leave($__internal_0c121b18b9d65f9bbcc9eee24df49ad7c20efe29429845fddcc7528d0d74f81e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccab135b3fe787ac15228ffa5d22662b44f3821d0512eb2fc34ddf9bcc51a498 = $this->env->getExtension("native_profiler");
        $__internal_ccab135b3fe787ac15228ffa5d22662b44f3821d0512eb2fc34ddf9bcc51a498->enter($__internal_ccab135b3fe787ac15228ffa5d22662b44f3821d0512eb2fc34ddf9bcc51a498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccab135b3fe787ac15228ffa5d22662b44f3821d0512eb2fc34ddf9bcc51a498->leave($__internal_ccab135b3fe787ac15228ffa5d22662b44f3821d0512eb2fc34ddf9bcc51a498_prof);

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
