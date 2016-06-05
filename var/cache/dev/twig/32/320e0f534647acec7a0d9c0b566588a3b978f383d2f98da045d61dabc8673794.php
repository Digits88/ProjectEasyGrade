<?php

/* user/new.html.twig */
class __TwigTemplate_63381a52628d9846f209c40b6aa77534eefcb6a994825a5d773c45b4739e1b76 extends Twig_Template
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
        $__internal_8da5fda3abbc67b578efbbc8997aed203bd6aab51cb61ade5909c63f415732b5 = $this->env->getExtension("native_profiler");
        $__internal_8da5fda3abbc67b578efbbc8997aed203bd6aab51cb61ade5909c63f415732b5->enter($__internal_8da5fda3abbc67b578efbbc8997aed203bd6aab51cb61ade5909c63f415732b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da5fda3abbc67b578efbbc8997aed203bd6aab51cb61ade5909c63f415732b5->leave($__internal_8da5fda3abbc67b578efbbc8997aed203bd6aab51cb61ade5909c63f415732b5_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_0e0a4fecd74dbe21e3f3a624102b2b50bc2c8ae544be5d327b9c10eff4e34434 = $this->env->getExtension("native_profiler");
        $__internal_0e0a4fecd74dbe21e3f3a624102b2b50bc2c8ae544be5d327b9c10eff4e34434->enter($__internal_0e0a4fecd74dbe21e3f3a624102b2b50bc2c8ae544be5d327b9c10eff4e34434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_0e0a4fecd74dbe21e3f3a624102b2b50bc2c8ae544be5d327b9c10eff4e34434->leave($__internal_0e0a4fecd74dbe21e3f3a624102b2b50bc2c8ae544be5d327b9c10eff4e34434_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_91ded755a8308b64c5f0414d1aa9277339a0b2232f508c53328b8cee9c51a767 = $this->env->getExtension("native_profiler");
        $__internal_91ded755a8308b64c5f0414d1aa9277339a0b2232f508c53328b8cee9c51a767->enter($__internal_91ded755a8308b64c5f0414d1aa9277339a0b2232f508c53328b8cee9c51a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_91ded755a8308b64c5f0414d1aa9277339a0b2232f508c53328b8cee9c51a767->leave($__internal_91ded755a8308b64c5f0414d1aa9277339a0b2232f508c53328b8cee9c51a767_prof);

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
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
