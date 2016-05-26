<?php

/* submission/index.html.twig */
class __TwigTemplate_d555d86742044ffe6c9949b7f97701478d6a0bbe2d2e51c46f27a43f5c59ffdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/index.html.twig", 1);
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
        $__internal_ec3839007736638a8e2d638ff855631933bf2ef7db193869b0f58437ab8c4195 = $this->env->getExtension("native_profiler");
        $__internal_ec3839007736638a8e2d638ff855631933bf2ef7db193869b0f58437ab8c4195->enter($__internal_ec3839007736638a8e2d638ff855631933bf2ef7db193869b0f58437ab8c4195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3839007736638a8e2d638ff855631933bf2ef7db193869b0f58437ab8c4195->leave($__internal_ec3839007736638a8e2d638ff855631933bf2ef7db193869b0f58437ab8c4195_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_34705cb2656e19c918d2c71db292c546a7213ad83c488f165f4951e5bf451470 = $this->env->getExtension("native_profiler");
        $__internal_34705cb2656e19c918d2c71db292c546a7213ad83c488f165f4951e5bf451470->enter($__internal_34705cb2656e19c918d2c71db292c546a7213ad83c488f165f4951e5bf451470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_34705cb2656e19c918d2c71db292c546a7213ad83c488f165f4951e5bf451470->leave($__internal_34705cb2656e19c918d2c71db292c546a7213ad83c488f165f4951e5bf451470_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_e79caed0716abc527bd5948033b3c8b37e8d04bedccf79bde0e3d3bad84e15b0 = $this->env->getExtension("native_profiler");
        $__internal_e79caed0716abc527bd5948033b3c8b37e8d04bedccf79bde0e3d3bad84e15b0->enter($__internal_e79caed0716abc527bd5948033b3c8b37e8d04bedccf79bde0e3d3bad84e15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagename</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) ? $context["submissions"] : $this->getContext($context, "submissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "imageName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["submission"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["submission"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("submission_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e79caed0716abc527bd5948033b3c8b37e8d04bedccf79bde0e3d3bad84e15b0->leave($__internal_e79caed0716abc527bd5948033b3c8b37e8d04bedccf79bde0e3d3bad84e15b0_prof);

    }

    public function getTemplateName()
    {
        return "submission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  111 => 34,  99 => 28,  93 => 25,  84 => 21,  80 => 20,  74 => 19,  71 => 18,  67 => 17,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Imagename</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for submission in submissions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('submission_show', { 'id': submission.id }) }}">{{ submission.id }}</a></td>*/
/*                 <td>{{ submission.imageName }}</td>*/
/*                 <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('submission_show', { 'id': submission.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('submission_edit', { 'id': submission.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
