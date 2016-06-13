<?php

/* :submission:new.html.twig */
class __TwigTemplate_f35474989b4ed0d1ec402ca6f2a7c113facf0b18a40524ed5c30d6f93b816668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:new.html.twig", 1);
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
        $__internal_9a09ccf7dd03ab7a6c5e3a0dfade1b29fe9b8e179055035f479ed985c12ecd0b = $this->env->getExtension("native_profiler");
        $__internal_9a09ccf7dd03ab7a6c5e3a0dfade1b29fe9b8e179055035f479ed985c12ecd0b->enter($__internal_9a09ccf7dd03ab7a6c5e3a0dfade1b29fe9b8e179055035f479ed985c12ecd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a09ccf7dd03ab7a6c5e3a0dfade1b29fe9b8e179055035f479ed985c12ecd0b->leave($__internal_9a09ccf7dd03ab7a6c5e3a0dfade1b29fe9b8e179055035f479ed985c12ecd0b_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1ed8dd5adf4742475c0145286e44c5dca5a85ec6928bd51592e48f019cde949e = $this->env->getExtension("native_profiler");
        $__internal_1ed8dd5adf4742475c0145286e44c5dca5a85ec6928bd51592e48f019cde949e->enter($__internal_1ed8dd5adf4742475c0145286e44c5dca5a85ec6928bd51592e48f019cde949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1ed8dd5adf4742475c0145286e44c5dca5a85ec6928bd51592e48f019cde949e->leave($__internal_1ed8dd5adf4742475c0145286e44c5dca5a85ec6928bd51592e48f019cde949e_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_5322cc18f3aab13799db6ef63da01a323233fcd846b893ab678a6daa88292a7d = $this->env->getExtension("native_profiler");
        $__internal_5322cc18f3aab13799db6ef63da01a323233fcd846b893ab678a6daa88292a7d->enter($__internal_5322cc18f3aab13799db6ef63da01a323233fcd846b893ab678a6daa88292a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Upload\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5322cc18f3aab13799db6ef63da01a323233fcd846b893ab678a6daa88292a7d->leave($__internal_5322cc18f3aab13799db6ef63da01a323233fcd846b893ab678a6daa88292a7d_prof);

    }

    public function getTemplateName()
    {
        return ":submission:new.html.twig";
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
/*     <h1>Submission creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Upload" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('submission_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
