<?php

/* submission/show.html.twig */
class __TwigTemplate_3569b9deeebceb1f2241a0989558109862d090d29d740008a646afa64c7004c2 extends Twig_Template
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
        $__internal_9199540ebb293acc8ddd71f4ec0cd5b5e5ae6dd25370a128abc24480aa560d63 = $this->env->getExtension("native_profiler");
        $__internal_9199540ebb293acc8ddd71f4ec0cd5b5e5ae6dd25370a128abc24480aa560d63->enter($__internal_9199540ebb293acc8ddd71f4ec0cd5b5e5ae6dd25370a128abc24480aa560d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9199540ebb293acc8ddd71f4ec0cd5b5e5ae6dd25370a128abc24480aa560d63->leave($__internal_9199540ebb293acc8ddd71f4ec0cd5b5e5ae6dd25370a128abc24480aa560d63_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_d1c5e5f93df7bb4b4bfd7e620625f63e15abdd11d4b20227ab7fc2d1d1460240 = $this->env->getExtension("native_profiler");
        $__internal_d1c5e5f93df7bb4b4bfd7e620625f63e15abdd11d4b20227ab7fc2d1d1460240->enter($__internal_d1c5e5f93df7bb4b4bfd7e620625f63e15abdd11d4b20227ab7fc2d1d1460240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_d1c5e5f93df7bb4b4bfd7e620625f63e15abdd11d4b20227ab7fc2d1d1460240->leave($__internal_d1c5e5f93df7bb4b4bfd7e620625f63e15abdd11d4b20227ab7fc2d1d1460240_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_1963b886a025d3329fa221978d954d1944dbdc1d566edb86a26ae9ab7d0e127b = $this->env->getExtension("native_profiler");
        $__internal_1963b886a025d3329fa221978d954d1944dbdc1d566edb86a26ae9ab7d0e127b->enter($__internal_1963b886a025d3329fa221978d954d1944dbdc1d566edb86a26ae9ab7d0e127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("submission_new");
        echo "\">New</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1963b886a025d3329fa221978d954d1944dbdc1d566edb86a26ae9ab7d0e127b->leave($__internal_1963b886a025d3329fa221978d954d1944dbdc1d566edb86a26ae9ab7d0e127b_prof);

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
        return array (  110 => 37,  105 => 35,  99 => 32,  93 => 29,  87 => 26,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
/*             <a href="{{ path('submission_new') }}">New</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail%}*/
/* */
