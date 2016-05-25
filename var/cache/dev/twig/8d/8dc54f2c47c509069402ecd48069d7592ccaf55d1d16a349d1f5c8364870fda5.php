<?php

/* user/edit.html.twig */
class __TwigTemplate_739481d166f55173fe1922ebe2475c967579ef4d617f7deef89a8a01e728a494 extends Twig_Template
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
        $__internal_37be736a83f3ebef867202df35acf373b5d166fd9132f1357de6f3a924132bc8 = $this->env->getExtension("native_profiler");
        $__internal_37be736a83f3ebef867202df35acf373b5d166fd9132f1357de6f3a924132bc8->enter($__internal_37be736a83f3ebef867202df35acf373b5d166fd9132f1357de6f3a924132bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37be736a83f3ebef867202df35acf373b5d166fd9132f1357de6f3a924132bc8->leave($__internal_37be736a83f3ebef867202df35acf373b5d166fd9132f1357de6f3a924132bc8_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_cff4154bc61f92d2b09a07b057d14467d15fad14b2524ed801d8aaaf53aeeca2 = $this->env->getExtension("native_profiler");
        $__internal_cff4154bc61f92d2b09a07b057d14467d15fad14b2524ed801d8aaaf53aeeca2->enter($__internal_cff4154bc61f92d2b09a07b057d14467d15fad14b2524ed801d8aaaf53aeeca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_cff4154bc61f92d2b09a07b057d14467d15fad14b2524ed801d8aaaf53aeeca2->leave($__internal_cff4154bc61f92d2b09a07b057d14467d15fad14b2524ed801d8aaaf53aeeca2_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_b2f1154f5185e644bdc5182bc7c30d38f7fda22379322da29709fc23cfd71cfa = $this->env->getExtension("native_profiler");
        $__internal_b2f1154f5185e644bdc5182bc7c30d38f7fda22379322da29709fc23cfd71cfa->enter($__internal_b2f1154f5185e644bdc5182bc7c30d38f7fda22379322da29709fc23cfd71cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
    <input type=\"submit\" value=\"Edit\" />
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
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b2f1154f5185e644bdc5182bc7c30d38f7fda22379322da29709fc23cfd71cfa->leave($__internal_b2f1154f5185e644bdc5182bc7c30d38f7fda22379322da29709fc23cfd71cfa_prof);

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
        return array (  86 => 22,  81 => 20,  74 => 16,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
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
/*     <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
