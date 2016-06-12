<?php

/* submission/new.html.twig */
class __TwigTemplate_7ad41ddd84076f39c6860ae413bb66ca4dfdec9f0887cf5e51ada04bec9cd2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/new.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8837cf71d9f1ab1bf37aece50cdb016138924f2727799e9559a45c6af76b2ae0 = $this->env->getExtension("native_profiler");
        $__internal_8837cf71d9f1ab1bf37aece50cdb016138924f2727799e9559a45c6af76b2ae0->enter($__internal_8837cf71d9f1ab1bf37aece50cdb016138924f2727799e9559a45c6af76b2ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8837cf71d9f1ab1bf37aece50cdb016138924f2727799e9559a45c6af76b2ae0->leave($__internal_8837cf71d9f1ab1bf37aece50cdb016138924f2727799e9559a45c6af76b2ae0_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_dbaf06010c76e2d4c03d27c3cb5161b2bb1e85662e0386fc44b67862c6ee6688 = $this->env->getExtension("native_profiler");
        $__internal_dbaf06010c76e2d4c03d27c3cb5161b2bb1e85662e0386fc44b67862c6ee6688->enter($__internal_dbaf06010c76e2d4c03d27c3cb5161b2bb1e85662e0386fc44b67862c6ee6688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_dbaf06010c76e2d4c03d27c3cb5161b2bb1e85662e0386fc44b67862c6ee6688->leave($__internal_dbaf06010c76e2d4c03d27c3cb5161b2bb1e85662e0386fc44b67862c6ee6688_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_a32166d58425ff83b18311513928e09008e1f1ae4ccb4d39581076a03eff09eb = $this->env->getExtension("native_profiler");
        $__internal_a32166d58425ff83b18311513928e09008e1f1ae4ccb4d39581076a03eff09eb->enter($__internal_a32166d58425ff83b18311513928e09008e1f1ae4ccb4d39581076a03eff09eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Upload\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a32166d58425ff83b18311513928e09008e1f1ae4ccb4d39581076a03eff09eb->leave($__internal_a32166d58425ff83b18311513928e09008e1f1ae4ccb4d39581076a03eff09eb_prof);

    }

    public function getTemplateName()
    {
        return "submission/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Upload" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('submission_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
