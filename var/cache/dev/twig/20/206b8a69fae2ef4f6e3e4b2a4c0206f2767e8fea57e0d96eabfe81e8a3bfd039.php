<?php

/* course/index.html.twig */
class __TwigTemplate_1b1883fc279a9173053a5357363da2f8a8f8a065c476bfbc020adbc9021305bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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
        $__internal_699a3ba5ccd29f1bd55ffe873e12524f3b2be1129b1563d707398937ed0b9605 = $this->env->getExtension("native_profiler");
        $__internal_699a3ba5ccd29f1bd55ffe873e12524f3b2be1129b1563d707398937ed0b9605->enter($__internal_699a3ba5ccd29f1bd55ffe873e12524f3b2be1129b1563d707398937ed0b9605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699a3ba5ccd29f1bd55ffe873e12524f3b2be1129b1563d707398937ed0b9605->leave($__internal_699a3ba5ccd29f1bd55ffe873e12524f3b2be1129b1563d707398937ed0b9605_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7241eac20524480729dde8c707f38a1a4cda0a33eaab645fcb0b93ca60edb972 = $this->env->getExtension("native_profiler");
        $__internal_7241eac20524480729dde8c707f38a1a4cda0a33eaab645fcb0b93ca60edb972->enter($__internal_7241eac20524480729dde8c707f38a1a4cda0a33eaab645fcb0b93ca60edb972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Courseid</th>
                <th>Coursename</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coursename", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("course_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7241eac20524480729dde8c707f38a1a4cda0a33eaab645fcb0b93ca60edb972->leave($__internal_7241eac20524480729dde8c707f38a1a4cda0a33eaab645fcb0b93ca60edb972_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Course list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Courseid</th>*/
/*                 <th>Coursename</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for course in courses %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('course_show', { 'id': course.id }) }}">{{ course.id }}</a></td>*/
/*                 <td>{{ course.courseid }}</td>*/
/*                 <td>{{ course.coursename }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('course_show', { 'id': course.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('course_edit', { 'id': course.id }) }}">edit</a>*/
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
/*             <a href="{{ path('course_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
