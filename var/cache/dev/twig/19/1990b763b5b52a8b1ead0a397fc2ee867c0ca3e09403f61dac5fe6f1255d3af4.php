<?php

/* course/edit.html.twig */
class __TwigTemplate_d6ba5e52b3079d1594c8e29ba26741187b411f337fd64c1e76dd015620effb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/edit.html.twig", 1);
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
        $__internal_502a76aa1ed056a4bb719f1d02802784876c33b856f1768389a4828b2764cde5 = $this->env->getExtension("native_profiler");
        $__internal_502a76aa1ed056a4bb719f1d02802784876c33b856f1768389a4828b2764cde5->enter($__internal_502a76aa1ed056a4bb719f1d02802784876c33b856f1768389a4828b2764cde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_502a76aa1ed056a4bb719f1d02802784876c33b856f1768389a4828b2764cde5->leave($__internal_502a76aa1ed056a4bb719f1d02802784876c33b856f1768389a4828b2764cde5_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_afa575f996081fc151d4ae432942cae85d6053e336e1c22f25142ec2a3b3ef39 = $this->env->getExtension("native_profiler");
        $__internal_afa575f996081fc151d4ae432942cae85d6053e336e1c22f25142ec2a3b3ef39->enter($__internal_afa575f996081fc151d4ae432942cae85d6053e336e1c22f25142ec2a3b3ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_afa575f996081fc151d4ae432942cae85d6053e336e1c22f25142ec2a3b3ef39->leave($__internal_afa575f996081fc151d4ae432942cae85d6053e336e1c22f25142ec2a3b3ef39_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_dae4c40a245c7ba65ff673b956ab14eb6f1ec6b0fb25b5b252a0c373dc10fdf6 = $this->env->getExtension("native_profiler");
        $__internal_dae4c40a245c7ba65ff673b956ab14eb6f1ec6b0fb25b5b252a0c373dc10fdf6->enter($__internal_dae4c40a245c7ba65ff673b956ab14eb6f1ec6b0fb25b5b252a0c373dc10fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <br><input class=\"btn btn-warning\" type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dae4c40a245c7ba65ff673b956ab14eb6f1ec6b0fb25b5b252a0c373dc10fdf6->leave($__internal_dae4c40a245c7ba65ff673b956ab14eb6f1ec6b0fb25b5b252a0c373dc10fdf6_prof);

    }

    public function getTemplateName()
    {
        return "course/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <br><input class="btn btn-warning" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
