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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00f35b407a3c356fce8e22a8815e59211f4e4322ba76eda59d50ac4c9693a983 = $this->env->getExtension("native_profiler");
        $__internal_00f35b407a3c356fce8e22a8815e59211f4e4322ba76eda59d50ac4c9693a983->enter($__internal_00f35b407a3c356fce8e22a8815e59211f4e4322ba76eda59d50ac4c9693a983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f35b407a3c356fce8e22a8815e59211f4e4322ba76eda59d50ac4c9693a983->leave($__internal_00f35b407a3c356fce8e22a8815e59211f4e4322ba76eda59d50ac4c9693a983_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_890c986b6c0834036a44eb9afe8acf2ed16d1634bf87d7d057a197b2c973843e = $this->env->getExtension("native_profiler");
        $__internal_890c986b6c0834036a44eb9afe8acf2ed16d1634bf87d7d057a197b2c973843e->enter($__internal_890c986b6c0834036a44eb9afe8acf2ed16d1634bf87d7d057a197b2c973843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Submission</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 18
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_890c986b6c0834036a44eb9afe8acf2ed16d1634bf87d7d057a197b2c973843e->leave($__internal_890c986b6c0834036a44eb9afe8acf2ed16d1634bf87d7d057a197b2c973843e_prof);

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
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/* {% endblock %}*/
/* */
