<?php

/* submission/new.html.twig */
class __TwigTemplate_e46d0be768505f8bcc892c64e7ea5ead37a8a6f6b3edce6660007893281c57cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3afa5010302ecdb380a0fdce3197f82470248eb1838d4c28969a1d4b2f6bc949 = $this->env->getExtension("native_profiler");
        $__internal_3afa5010302ecdb380a0fdce3197f82470248eb1838d4c28969a1d4b2f6bc949->enter($__internal_3afa5010302ecdb380a0fdce3197f82470248eb1838d4c28969a1d4b2f6bc949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afa5010302ecdb380a0fdce3197f82470248eb1838d4c28969a1d4b2f6bc949->leave($__internal_3afa5010302ecdb380a0fdce3197f82470248eb1838d4c28969a1d4b2f6bc949_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2031cc9bf5c0e7f10e92f65fc01cdb0ae988037f94f4fdd0926ff34e1b5d6f1 = $this->env->getExtension("native_profiler");
        $__internal_c2031cc9bf5c0e7f10e92f65fc01cdb0ae988037f94f4fdd0926ff34e1b5d6f1->enter($__internal_c2031cc9bf5c0e7f10e92f65fc01cdb0ae988037f94f4fdd0926ff34e1b5d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Submission creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c2031cc9bf5c0e7f10e92f65fc01cdb0ae988037f94f4fdd0926ff34e1b5d6f1->leave($__internal_c2031cc9bf5c0e7f10e92f65fc01cdb0ae988037f94f4fdd0926ff34e1b5d6f1_prof);

    }

    public function getTemplateName()
    {
        return "submission/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Submission creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
