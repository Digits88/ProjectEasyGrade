<?php

/* course/index.html.twig */
class __TwigTemplate_318e95a903402ce697127718325f8095919d2f1bf0fe7b4ada28f502c34c3a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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
        $__internal_787e7c82f2784f9d4e1f09f0809c53c289fea328f341eb71e05a02a232ef3082 = $this->env->getExtension("native_profiler");
        $__internal_787e7c82f2784f9d4e1f09f0809c53c289fea328f341eb71e05a02a232ef3082->enter($__internal_787e7c82f2784f9d4e1f09f0809c53c289fea328f341eb71e05a02a232ef3082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_787e7c82f2784f9d4e1f09f0809c53c289fea328f341eb71e05a02a232ef3082->leave($__internal_787e7c82f2784f9d4e1f09f0809c53c289fea328f341eb71e05a02a232ef3082_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1f9e6c805f9fe1eebaa1a5538ee2a1310d15d58a11fa834461ffa8d158e678f2 = $this->env->getExtension("native_profiler");
        $__internal_1f9e6c805f9fe1eebaa1a5538ee2a1310d15d58a11fa834461ffa8d158e678f2->enter($__internal_1f9e6c805f9fe1eebaa1a5538ee2a1310d15d58a11fa834461ffa8d158e678f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1f9e6c805f9fe1eebaa1a5538ee2a1310d15d58a11fa834461ffa8d158e678f2->leave($__internal_1f9e6c805f9fe1eebaa1a5538ee2a1310d15d58a11fa834461ffa8d158e678f2_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_3864427d0133acbb27eeca9ec86d7ea268f07ad61b1e9068aa4e3b199399ee1c = $this->env->getExtension("native_profiler");
        $__internal_3864427d0133acbb27eeca9ec86d7ea268f07ad61b1e9068aa4e3b199399ee1c->enter($__internal_3864427d0133acbb27eeca9ec86d7ea268f07ad61b1e9068aa4e3b199399ee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("course_new");
        echo "\" class=\"btn btn-warning\">Create a new course</a>
        </li>
    </ul>

    <br>
    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Your Courses</div>
    <div class=\"panel-body\">
        <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseid", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_index", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coursename", array()), "html", null, true);
            echo "</a></td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">View</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
    </div>

";
        
        $__internal_3864427d0133acbb27eeca9ec86d7ea268f07ad61b1e9068aa4e3b199399ee1c->leave($__internal_3864427d0133acbb27eeca9ec86d7ea268f07ad61b1e9068aa4e3b199399ee1c_prof);

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
        return array (  117 => 42,  105 => 36,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course list</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_new') }}" class="btn btn-warning">Create a new course</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <br>*/
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*     <div class="panel-heading">Your Courses</div>*/
/*     <div class="panel-body">*/
/*         <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Courseid</th>*/
/*                     <th>Coursename</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for course in courses %}*/
/*                 <tr>*/
/*                     <td>{{ course.id }}</td>*/
/*                     <td>{{ course.courseid }}</td>*/
/*                     <td><a href="{{ path('assignment_index', { 'id': course.id }) }}">{{ course.coursename }}</a></td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('course_show', { 'id': course.id }) }}" class="btn btn-primary">View</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     </div>*/
/* */
/* {% endblock contentdetail %}*/
/* */
