<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_5292fd37227145d5e9809b3c839183ee85da9d785503a17ab846b978ec1d4267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2d00e7e182e3de3f47d372dee3daad18e6f1d5ec85dfd9102d7e7aaa6fff72d = $this->env->getExtension("native_profiler");
        $__internal_f2d00e7e182e3de3f47d372dee3daad18e6f1d5ec85dfd9102d7e7aaa6fff72d->enter($__internal_f2d00e7e182e3de3f47d372dee3daad18e6f1d5ec85dfd9102d7e7aaa6fff72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_f2d00e7e182e3de3f47d372dee3daad18e6f1d5ec85dfd9102d7e7aaa6fff72d->leave($__internal_f2d00e7e182e3de3f47d372dee3daad18e6f1d5ec85dfd9102d7e7aaa6fff72d_prof);

    }

    // line 1
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_a163020ab50a66b358156c3cbbe316a5dc9d356460953d6d32ac2f4f5ed7322c = $this->env->getExtension("native_profiler");
        $__internal_a163020ab50a66b358156c3cbbe316a5dc9d356460953d6d32ac2f4f5ed7322c->enter($__internal_a163020ab50a66b358156c3cbbe316a5dc9d356460953d6d32ac2f4f5ed7322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"vich-file\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 6
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 12
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a163020ab50a66b358156c3cbbe316a5dc9d356460953d6d32ac2f4f5ed7322c->leave($__internal_a163020ab50a66b358156c3cbbe316a5dc9d356460953d6d32ac2f4f5ed7322c_prof);

    }

    // line 16
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_2762061e2d8684e6f2c8db627f2124272264bfaa7045209e711e5ad56f2cc91a = $this->env->getExtension("native_profiler");
        $__internal_2762061e2d8684e6f2c8db627f2124272264bfaa7045209e711e5ad56f2cc91a->enter($__internal_2762061e2d8684e6f2c8db627f2124272264bfaa7045209e711e5ad56f2cc91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 17
        ob_start();
        // line 18
        echo "    <div class=\"vich-image\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 20
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 25
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 27
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 28
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 30
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2762061e2d8684e6f2c8db627f2124272264bfaa7045209e711e5ad56f2cc91a->leave($__internal_2762061e2d8684e6f2c8db627f2124272264bfaa7045209e711e5ad56f2cc91a_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  120 => 28,  117 => 27,  109 => 25,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  92 => 19,  89 => 18,  87 => 17,  81 => 16,  72 => 12,  64 => 10,  62 => 9,  59 => 8,  53 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 16,  26 => 15,  24 => 1,);
    }
}
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="vich-file">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*         {{ form_row(form.delete) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri is defined and download_uri %}*/
/*         <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*         {{ form_row(form.delete) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri is defined and download_uri %}*/
/*          <a href="{{ download_uri }}"><img src="{{ download_uri }}" alt="" /></a>*/
/*         {% endif %}*/
/*         {% if show_download_link and download_uri is defined and download_uri%}*/
/*         <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
