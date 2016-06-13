<?php

/* user/edit.html.twig */
class __TwigTemplate_5811b7e2584378a43b901be1eaf15f15998efed0160f1c08fbf5a8414f962720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_e9061a46b3609a609af425cd19aafe3f2fe34e7523eecdeeb28aa55980d5a9b6 = $this->env->getExtension("native_profiler");
        $__internal_e9061a46b3609a609af425cd19aafe3f2fe34e7523eecdeeb28aa55980d5a9b6->enter($__internal_e9061a46b3609a609af425cd19aafe3f2fe34e7523eecdeeb28aa55980d5a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9061a46b3609a609af425cd19aafe3f2fe34e7523eecdeeb28aa55980d5a9b6->leave($__internal_e9061a46b3609a609af425cd19aafe3f2fe34e7523eecdeeb28aa55980d5a9b6_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9095bccae1b3e29388b951456852321938ed8e555bebdd8fb382aec8030b0f77 = $this->env->getExtension("native_profiler");
        $__internal_9095bccae1b3e29388b951456852321938ed8e555bebdd8fb382aec8030b0f77->enter($__internal_9095bccae1b3e29388b951456852321938ed8e555bebdd8fb382aec8030b0f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_9095bccae1b3e29388b951456852321938ed8e555bebdd8fb382aec8030b0f77->leave($__internal_9095bccae1b3e29388b951456852321938ed8e555bebdd8fb382aec8030b0f77_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_f3a4383f3459d5bf67e8e51547370ff769a3338b516a4a43a50f805cdc91cd1d = $this->env->getExtension("native_profiler");
        $__internal_f3a4383f3459d5bf67e8e51547370ff769a3338b516a4a43a50f805cdc91cd1d->enter($__internal_f3a4383f3459d5bf67e8e51547370ff769a3338b516a4a43a50f805cdc91cd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input class=\"btn btn-success\" type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
    </ul>
";
        
        $__internal_f3a4383f3459d5bf67e8e51547370ff769a3338b516a4a43a50f805cdc91cd1d->leave($__internal_f3a4383f3459d5bf67e8e51547370ff769a3338b516a4a43a50f805cdc91cd1d_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*     {{ form_widget(edit_form) }}*/
/*     <input class="btn btn-success" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
