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
        $__internal_e0e1d05147cd181a66b392ee1c35419a1320b770c58d4c7fe9e470bb44ce2888 = $this->env->getExtension("native_profiler");
        $__internal_e0e1d05147cd181a66b392ee1c35419a1320b770c58d4c7fe9e470bb44ce2888->enter($__internal_e0e1d05147cd181a66b392ee1c35419a1320b770c58d4c7fe9e470bb44ce2888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e1d05147cd181a66b392ee1c35419a1320b770c58d4c7fe9e470bb44ce2888->leave($__internal_e0e1d05147cd181a66b392ee1c35419a1320b770c58d4c7fe9e470bb44ce2888_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_570717dfe032f05faa7273ccd3a41fdfe3606ee2989cc4cfaddd6fee0597e721 = $this->env->getExtension("native_profiler");
        $__internal_570717dfe032f05faa7273ccd3a41fdfe3606ee2989cc4cfaddd6fee0597e721->enter($__internal_570717dfe032f05faa7273ccd3a41fdfe3606ee2989cc4cfaddd6fee0597e721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_570717dfe032f05faa7273ccd3a41fdfe3606ee2989cc4cfaddd6fee0597e721->leave($__internal_570717dfe032f05faa7273ccd3a41fdfe3606ee2989cc4cfaddd6fee0597e721_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_52a77ddfc8836ed31dcf44c6f301fb1fa00fae9193172886a763d7c956939616 = $this->env->getExtension("native_profiler");
        $__internal_52a77ddfc8836ed31dcf44c6f301fb1fa00fae9193172886a763d7c956939616->enter($__internal_52a77ddfc8836ed31dcf44c6f301fb1fa00fae9193172886a763d7c956939616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_52a77ddfc8836ed31dcf44c6f301fb1fa00fae9193172886a763d7c956939616->leave($__internal_52a77ddfc8836ed31dcf44c6f301fb1fa00fae9193172886a763d7c956939616_prof);

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
