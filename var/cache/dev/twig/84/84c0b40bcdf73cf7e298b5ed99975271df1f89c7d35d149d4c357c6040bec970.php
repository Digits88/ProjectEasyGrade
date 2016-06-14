<?php

/* user/new.html.twig */
class __TwigTemplate_744891f495f4c6ec521ce303fa7af6955aba301d5d35f9b8b93eb216b5b01a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_45bd409e0947451b093534bac7e1a3d381034f281681af947eabe9a837239a6b = $this->env->getExtension("native_profiler");
        $__internal_45bd409e0947451b093534bac7e1a3d381034f281681af947eabe9a837239a6b->enter($__internal_45bd409e0947451b093534bac7e1a3d381034f281681af947eabe9a837239a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45bd409e0947451b093534bac7e1a3d381034f281681af947eabe9a837239a6b->leave($__internal_45bd409e0947451b093534bac7e1a3d381034f281681af947eabe9a837239a6b_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c4cd8aec393e9d17bb95ea3279188b1da69d24abacea7a08441bd4863e3978cd = $this->env->getExtension("native_profiler");
        $__internal_c4cd8aec393e9d17bb95ea3279188b1da69d24abacea7a08441bd4863e3978cd->enter($__internal_c4cd8aec393e9d17bb95ea3279188b1da69d24abacea7a08441bd4863e3978cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_c4cd8aec393e9d17bb95ea3279188b1da69d24abacea7a08441bd4863e3978cd->leave($__internal_c4cd8aec393e9d17bb95ea3279188b1da69d24abacea7a08441bd4863e3978cd_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_1572f6ef5e2a53e6c3cb1d3855c7d470a253e5f58a4646960948b326195851cf = $this->env->getExtension("native_profiler");
        $__internal_1572f6ef5e2a53e6c3cb1d3855c7d470a253e5f58a4646960948b326195851cf->enter($__internal_1572f6ef5e2a53e6c3cb1d3855c7d470a253e5f58a4646960948b326195851cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1572f6ef5e2a53e6c3cb1d3855c7d470a253e5f58a4646960948b326195851cf->leave($__internal_1572f6ef5e2a53e6c3cb1d3855c7d470a253e5f58a4646960948b326195851cf_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */