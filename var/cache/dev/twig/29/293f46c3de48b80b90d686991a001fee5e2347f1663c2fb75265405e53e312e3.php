<?php

/* course/new.html.twig */
class __TwigTemplate_af871a0939b8d0c3abb1e505cd2e1ec45757f18bbc90c6f526ff15b5df84511b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/new.html.twig", 1);
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
        $__internal_e3063f640c2d5ad7ec2761cb5939f1424e5682b07aa82d09411b7a6afa90fb2b = $this->env->getExtension("native_profiler");
        $__internal_e3063f640c2d5ad7ec2761cb5939f1424e5682b07aa82d09411b7a6afa90fb2b->enter($__internal_e3063f640c2d5ad7ec2761cb5939f1424e5682b07aa82d09411b7a6afa90fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3063f640c2d5ad7ec2761cb5939f1424e5682b07aa82d09411b7a6afa90fb2b->leave($__internal_e3063f640c2d5ad7ec2761cb5939f1424e5682b07aa82d09411b7a6afa90fb2b_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_eabeeb3226b1a778c132b26c4a6260b43f8305fdabe97d86de8e5ab9243fb3fc = $this->env->getExtension("native_profiler");
        $__internal_eabeeb3226b1a778c132b26c4a6260b43f8305fdabe97d86de8e5ab9243fb3fc->enter($__internal_eabeeb3226b1a778c132b26c4a6260b43f8305fdabe97d86de8e5ab9243fb3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_eabeeb3226b1a778c132b26c4a6260b43f8305fdabe97d86de8e5ab9243fb3fc->leave($__internal_eabeeb3226b1a778c132b26c4a6260b43f8305fdabe97d86de8e5ab9243fb3fc_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_ef217421b0810eb7f874e0d61edc99d211ea240bb5d857ba52cbaa7a94f9a15f = $this->env->getExtension("native_profiler");
        $__internal_ef217421b0810eb7f874e0d61edc99d211ea240bb5d857ba52cbaa7a94f9a15f->enter($__internal_ef217421b0810eb7f874e0d61edc99d211ea240bb5d857ba52cbaa7a94f9a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input type=\"submit\" value=\"Create\" class=\"btn btn-success\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ef217421b0810eb7f874e0d61edc99d211ea240bb5d857ba52cbaa7a94f9a15f->leave($__internal_ef217421b0810eb7f874e0d61edc99d211ea240bb5d857ba52cbaa7a94f9a15f_prof);

    }

    public function getTemplateName()
    {
        return "course/new.html.twig";
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
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input type="submit" value="Create" class="btn btn-success" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
