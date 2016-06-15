<?php

/* :course:edit.html.twig */
class __TwigTemplate_bd7fb75ed9f399fad942258c4cb9ae4c733a5267ecfdfea415318b70a1542c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:edit.html.twig", 1);
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
        $__internal_1eb639dcc2bea56188a84ab9df74553910e243ebf2c9f28239135a23765a342a = $this->env->getExtension("native_profiler");
        $__internal_1eb639dcc2bea56188a84ab9df74553910e243ebf2c9f28239135a23765a342a->enter($__internal_1eb639dcc2bea56188a84ab9df74553910e243ebf2c9f28239135a23765a342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb639dcc2bea56188a84ab9df74553910e243ebf2c9f28239135a23765a342a->leave($__internal_1eb639dcc2bea56188a84ab9df74553910e243ebf2c9f28239135a23765a342a_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_0755f5a26464f581734dd7344dcab92ed90ad091bccc9831e69d2ce03ae8ad1a = $this->env->getExtension("native_profiler");
        $__internal_0755f5a26464f581734dd7344dcab92ed90ad091bccc9831e69d2ce03ae8ad1a->enter($__internal_0755f5a26464f581734dd7344dcab92ed90ad091bccc9831e69d2ce03ae8ad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_0755f5a26464f581734dd7344dcab92ed90ad091bccc9831e69d2ce03ae8ad1a->leave($__internal_0755f5a26464f581734dd7344dcab92ed90ad091bccc9831e69d2ce03ae8ad1a_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_dcfa130219043c0d955f2d97753987d5958df568dd6a8a57f6b073dd30adaed2 = $this->env->getExtension("native_profiler");
        $__internal_dcfa130219043c0d955f2d97753987d5958df568dd6a8a57f6b073dd30adaed2->enter($__internal_dcfa130219043c0d955f2d97753987d5958df568dd6a8a57f6b073dd30adaed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
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
        
        $__internal_dcfa130219043c0d955f2d97753987d5958df568dd6a8a57f6b073dd30adaed2->leave($__internal_dcfa130219043c0d955f2d97753987d5958df568dd6a8a57f6b073dd30adaed2_prof);

    }

    public function getTemplateName()
    {
        return ":course:edit.html.twig";
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
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <br><input class="btn btn-warning" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
