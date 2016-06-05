<?php

/* submission/show.html.twig */
class __TwigTemplate_740a39ae80f207a0c14b5e4de8495756e0226beb03380abc080ba9059a25fd95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/show.html.twig", 1);
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
        $__internal_bca8c75d2c32fd7ad2e6c087c92e574d05308d206c55da9c456da3e65d5d209e = $this->env->getExtension("native_profiler");
        $__internal_bca8c75d2c32fd7ad2e6c087c92e574d05308d206c55da9c456da3e65d5d209e->enter($__internal_bca8c75d2c32fd7ad2e6c087c92e574d05308d206c55da9c456da3e65d5d209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca8c75d2c32fd7ad2e6c087c92e574d05308d206c55da9c456da3e65d5d209e->leave($__internal_bca8c75d2c32fd7ad2e6c087c92e574d05308d206c55da9c456da3e65d5d209e_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_a25fa5f98eb8d88a44d32050424f3ed8242ef79eca57c6bc4228861349fa0a00 = $this->env->getExtension("native_profiler");
        $__internal_a25fa5f98eb8d88a44d32050424f3ed8242ef79eca57c6bc4228861349fa0a00->enter($__internal_a25fa5f98eb8d88a44d32050424f3ed8242ef79eca57c6bc4228861349fa0a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_a25fa5f98eb8d88a44d32050424f3ed8242ef79eca57c6bc4228861349fa0a00->leave($__internal_a25fa5f98eb8d88a44d32050424f3ed8242ef79eca57c6bc4228861349fa0a00_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_cce2d4a93865f0105b89bc4e8ca6dc1c86452d9dd7a0ff3e74cf3fee2dffa9f4 = $this->env->getExtension("native_profiler");
        $__internal_cce2d4a93865f0105b89bc4e8ca6dc1c86452d9dd7a0ff3e74cf3fee2dffa9f4->enter($__internal_cce2d4a93865f0105b89bc4e8ca6dc1c86452d9dd7a0ff3e74cf3fee2dffa9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 19
        if ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cce2d4a93865f0105b89bc4e8ca6dc1c86452d9dd7a0ff3e74cf3fee2dffa9f4->leave($__internal_cce2d4a93865f0105b89bc4e8ca6dc1c86452d9dd7a0ff3e74cf3fee2dffa9f4_prof);

    }

    public function getTemplateName()
    {
        return "submission/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  99 => 32,  93 => 29,  87 => 26,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ submission.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagename</th>*/
/*                 <td>{{ submission.imageName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('submission_edit', { 'id': submission.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail%}*/
/* */
