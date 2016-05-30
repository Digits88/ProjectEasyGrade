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
        $__internal_b723adbc844b64c1e785d56a728434a4c4dccf528e529ef98731686bc288eb04 = $this->env->getExtension("native_profiler");
        $__internal_b723adbc844b64c1e785d56a728434a4c4dccf528e529ef98731686bc288eb04->enter($__internal_b723adbc844b64c1e785d56a728434a4c4dccf528e529ef98731686bc288eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b723adbc844b64c1e785d56a728434a4c4dccf528e529ef98731686bc288eb04->leave($__internal_b723adbc844b64c1e785d56a728434a4c4dccf528e529ef98731686bc288eb04_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_f0bcbb597b32b34d782d6f80d889440e0a5ef5fcd2b53e155eb2714a53d6015c = $this->env->getExtension("native_profiler");
        $__internal_f0bcbb597b32b34d782d6f80d889440e0a5ef5fcd2b53e155eb2714a53d6015c->enter($__internal_f0bcbb597b32b34d782d6f80d889440e0a5ef5fcd2b53e155eb2714a53d6015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_f0bcbb597b32b34d782d6f80d889440e0a5ef5fcd2b53e155eb2714a53d6015c->leave($__internal_f0bcbb597b32b34d782d6f80d889440e0a5ef5fcd2b53e155eb2714a53d6015c_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_e3a3f381daea4c72f5992d845c34e8f65efb53f775888ecd2a3932a3c03d0ad9 = $this->env->getExtension("native_profiler");
        $__internal_e3a3f381daea4c72f5992d845c34e8f65efb53f775888ecd2a3932a3c03d0ad9->enter($__internal_e3a3f381daea4c72f5992d845c34e8f65efb53f775888ecd2a3932a3c03d0ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e3a3f381daea4c72f5992d845c34e8f65efb53f775888ecd2a3932a3c03d0ad9->leave($__internal_e3a3f381daea4c72f5992d845c34e8f65efb53f775888ecd2a3932a3c03d0ad9_prof);

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
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
