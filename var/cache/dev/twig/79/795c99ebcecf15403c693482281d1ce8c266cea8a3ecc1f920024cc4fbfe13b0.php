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
        $__internal_6ae15551803054b465c91381a3403c55c88b4efd87723ad398b20c212715c7cc = $this->env->getExtension("native_profiler");
        $__internal_6ae15551803054b465c91381a3403c55c88b4efd87723ad398b20c212715c7cc->enter($__internal_6ae15551803054b465c91381a3403c55c88b4efd87723ad398b20c212715c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae15551803054b465c91381a3403c55c88b4efd87723ad398b20c212715c7cc->leave($__internal_6ae15551803054b465c91381a3403c55c88b4efd87723ad398b20c212715c7cc_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_bc50586c4fb5af3ab82f0b01e7e2477b3355df1c9e9257cf9ec5da0ea0fa66cb = $this->env->getExtension("native_profiler");
        $__internal_bc50586c4fb5af3ab82f0b01e7e2477b3355df1c9e9257cf9ec5da0ea0fa66cb->enter($__internal_bc50586c4fb5af3ab82f0b01e7e2477b3355df1c9e9257cf9ec5da0ea0fa66cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_bc50586c4fb5af3ab82f0b01e7e2477b3355df1c9e9257cf9ec5da0ea0fa66cb->leave($__internal_bc50586c4fb5af3ab82f0b01e7e2477b3355df1c9e9257cf9ec5da0ea0fa66cb_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_16fb68466b5872c8d4e161172e3e590078922beb7e0b8c5f9ac7d482d1c05a54 = $this->env->getExtension("native_profiler");
        $__internal_16fb68466b5872c8d4e161172e3e590078922beb7e0b8c5f9ac7d482d1c05a54->enter($__internal_16fb68466b5872c8d4e161172e3e590078922beb7e0b8c5f9ac7d482d1c05a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_16fb68466b5872c8d4e161172e3e590078922beb7e0b8c5f9ac7d482d1c05a54->leave($__internal_16fb68466b5872c8d4e161172e3e590078922beb7e0b8c5f9ac7d482d1c05a54_prof);

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