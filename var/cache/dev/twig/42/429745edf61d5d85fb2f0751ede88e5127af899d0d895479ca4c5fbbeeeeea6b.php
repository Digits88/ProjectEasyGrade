<?php

/* :assignment:edit.html.twig */
class __TwigTemplate_1ff5854fd7fc5e616f79a2aa52a1591bc710cbbd1027a5a9606262ee50ab15fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:edit.html.twig", 1);
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
        $__internal_3b7f52c7c6eeca1a1bac4d65eb664769953797630042ea504bd3d3dace2456f3 = $this->env->getExtension("native_profiler");
        $__internal_3b7f52c7c6eeca1a1bac4d65eb664769953797630042ea504bd3d3dace2456f3->enter($__internal_3b7f52c7c6eeca1a1bac4d65eb664769953797630042ea504bd3d3dace2456f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7f52c7c6eeca1a1bac4d65eb664769953797630042ea504bd3d3dace2456f3->leave($__internal_3b7f52c7c6eeca1a1bac4d65eb664769953797630042ea504bd3d3dace2456f3_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_6dc9d9804c53f8fc41927103aaec875a2e577d033d16986e0b856925b555b6fc = $this->env->getExtension("native_profiler");
        $__internal_6dc9d9804c53f8fc41927103aaec875a2e577d033d16986e0b856925b555b6fc->enter($__internal_6dc9d9804c53f8fc41927103aaec875a2e577d033d16986e0b856925b555b6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_6dc9d9804c53f8fc41927103aaec875a2e577d033d16986e0b856925b555b6fc->leave($__internal_6dc9d9804c53f8fc41927103aaec875a2e577d033d16986e0b856925b555b6fc_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_dd45b8d21aad442546ea0b484e808ebc2860450cf77745306650bdad9b3b75b8 = $this->env->getExtension("native_profiler");
        $__internal_dd45b8d21aad442546ea0b484e808ebc2860450cf77745306650bdad9b3b75b8->enter($__internal_dd45b8d21aad442546ea0b484e808ebc2860450cf77745306650bdad9b3b75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input  class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_assignments");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dd45b8d21aad442546ea0b484e808ebc2860450cf77745306650bdad9b3b75b8->leave($__internal_dd45b8d21aad442546ea0b484e808ebc2860450cf77745306650bdad9b3b75b8_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:edit.html.twig";
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
/*     <h1>Assignment edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input  class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_assignments') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-warning">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
