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
        $__internal_57688e273123894bc3b4724be0c4ac1481556c35cf41cd796c1d9628380a955f = $this->env->getExtension("native_profiler");
        $__internal_57688e273123894bc3b4724be0c4ac1481556c35cf41cd796c1d9628380a955f->enter($__internal_57688e273123894bc3b4724be0c4ac1481556c35cf41cd796c1d9628380a955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57688e273123894bc3b4724be0c4ac1481556c35cf41cd796c1d9628380a955f->leave($__internal_57688e273123894bc3b4724be0c4ac1481556c35cf41cd796c1d9628380a955f_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_41882d8fa30cde104fedc5353bd9eecf401bb721aaa29acd437a0aeb273b293a = $this->env->getExtension("native_profiler");
        $__internal_41882d8fa30cde104fedc5353bd9eecf401bb721aaa29acd437a0aeb273b293a->enter($__internal_41882d8fa30cde104fedc5353bd9eecf401bb721aaa29acd437a0aeb273b293a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_41882d8fa30cde104fedc5353bd9eecf401bb721aaa29acd437a0aeb273b293a->leave($__internal_41882d8fa30cde104fedc5353bd9eecf401bb721aaa29acd437a0aeb273b293a_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_3e3257c810399c9a779f1c78a7bf058a51053b3617c7a45aaeed81b679a904f7 = $this->env->getExtension("native_profiler");
        $__internal_3e3257c810399c9a779f1c78a7bf058a51053b3617c7a45aaeed81b679a904f7->enter($__internal_3e3257c810399c9a779f1c78a7bf058a51053b3617c7a45aaeed81b679a904f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
    <input class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_homepage");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
    </ul>
";
        
        $__internal_3e3257c810399c9a779f1c78a7bf058a51053b3617c7a45aaeed81b679a904f7->leave($__internal_3e3257c810399c9a779f1c78a7bf058a51053b3617c7a45aaeed81b679a904f7_prof);

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
/*     <input class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_homepage') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
