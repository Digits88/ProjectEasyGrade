<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_8f493351ac160963b3bf4b646caaf6fd82b8179e299952e3a66159b963149c3a extends Twig_Template
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
        $__internal_193b49cd461ce2b3f955962e3e3a8d8bce499e738dfc28da11e761857af0ab3e = $this->env->getExtension("native_profiler");
        $__internal_193b49cd461ce2b3f955962e3e3a8d8bce499e738dfc28da11e761857af0ab3e->enter($__internal_193b49cd461ce2b3f955962e3e3a8d8bce499e738dfc28da11e761857af0ab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_193b49cd461ce2b3f955962e3e3a8d8bce499e738dfc28da11e761857af0ab3e->leave($__internal_193b49cd461ce2b3f955962e3e3a8d8bce499e738dfc28da11e761857af0ab3e_prof);

    }

    // line 1
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_82887765daf4346353e9739baceddbb49a6b2a8d57d4d3d15b507a5668729895 = $this->env->getExtension("native_profiler");
        $__internal_82887765daf4346353e9739baceddbb49a6b2a8d57d4d3d15b507a5668729895->enter($__internal_82887765daf4346353e9739baceddbb49a6b2a8d57d4d3d15b507a5668729895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_82887765daf4346353e9739baceddbb49a6b2a8d57d4d3d15b507a5668729895->leave($__internal_82887765daf4346353e9739baceddbb49a6b2a8d57d4d3d15b507a5668729895_prof);

    }

    // line 16
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_bf34f1c8f47dcc9672b97fa708efad79f754ccf1715eb016af3b5fcbe45a2cba = $this->env->getExtension("native_profiler");
        $__internal_bf34f1c8f47dcc9672b97fa708efad79f754ccf1715eb016af3b5fcbe45a2cba->enter($__internal_bf34f1c8f47dcc9672b97fa708efad79f754ccf1715eb016af3b5fcbe45a2cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_bf34f1c8f47dcc9672b97fa708efad79f754ccf1715eb016af3b5fcbe45a2cba->leave($__internal_bf34f1c8f47dcc9672b97fa708efad79f754ccf1715eb016af3b5fcbe45a2cba_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
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