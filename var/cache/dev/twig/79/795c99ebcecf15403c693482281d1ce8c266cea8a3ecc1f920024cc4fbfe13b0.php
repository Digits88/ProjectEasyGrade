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
        $__internal_f6589e6a1243471f4be1509ab4dfec6889723620e260005a4251df9e9a4ebbc2 = $this->env->getExtension("native_profiler");
        $__internal_f6589e6a1243471f4be1509ab4dfec6889723620e260005a4251df9e9a4ebbc2->enter($__internal_f6589e6a1243471f4be1509ab4dfec6889723620e260005a4251df9e9a4ebbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6589e6a1243471f4be1509ab4dfec6889723620e260005a4251df9e9a4ebbc2->leave($__internal_f6589e6a1243471f4be1509ab4dfec6889723620e260005a4251df9e9a4ebbc2_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_2ff087da77aee2e4feaa883151f74850c42c336d142e194a122f458c78b557cf = $this->env->getExtension("native_profiler");
        $__internal_2ff087da77aee2e4feaa883151f74850c42c336d142e194a122f458c78b557cf->enter($__internal_2ff087da77aee2e4feaa883151f74850c42c336d142e194a122f458c78b557cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_2ff087da77aee2e4feaa883151f74850c42c336d142e194a122f458c78b557cf->leave($__internal_2ff087da77aee2e4feaa883151f74850c42c336d142e194a122f458c78b557cf_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_b83804b4ba495f6a4a8a7513905f7ffb1088f1a4cefe70e6edf64718b93aac59 = $this->env->getExtension("native_profiler");
        $__internal_b83804b4ba495f6a4a8a7513905f7ffb1088f1a4cefe70e6edf64718b93aac59->enter($__internal_b83804b4ba495f6a4a8a7513905f7ffb1088f1a4cefe70e6edf64718b93aac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submissions_all", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b83804b4ba495f6a4a8a7513905f7ffb1088f1a4cefe70e6edf64718b93aac59->leave($__internal_b83804b4ba495f6a4a8a7513905f7ffb1088f1a4cefe70e6edf64718b93aac59_prof);

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
/*             <br><a href="{{ path('submissions_all',{ 'id' : id }) }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
