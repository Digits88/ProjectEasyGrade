<?php

/* assignment/index.html.twig */
class __TwigTemplate_fbc6cac1c36dfea9755f4e7092b55db90f12d12200cb798211ff9bdacb68f3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/index.html.twig", 1);
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
        $__internal_589a9c54b0f00e2efc53a2e0578ff0e39be9e4dc45ed588f2286f7c8b0c5029a = $this->env->getExtension("native_profiler");
        $__internal_589a9c54b0f00e2efc53a2e0578ff0e39be9e4dc45ed588f2286f7c8b0c5029a->enter($__internal_589a9c54b0f00e2efc53a2e0578ff0e39be9e4dc45ed588f2286f7c8b0c5029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589a9c54b0f00e2efc53a2e0578ff0e39be9e4dc45ed588f2286f7c8b0c5029a->leave($__internal_589a9c54b0f00e2efc53a2e0578ff0e39be9e4dc45ed588f2286f7c8b0c5029a_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_ea3120837431e6d0345a5521fadbf706b612ef249584195e1d4689d82c9819ee = $this->env->getExtension("native_profiler");
        $__internal_ea3120837431e6d0345a5521fadbf706b612ef249584195e1d4689d82c9819ee->enter($__internal_ea3120837431e6d0345a5521fadbf706b612ef249584195e1d4689d82c9819ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_ea3120837431e6d0345a5521fadbf706b612ef249584195e1d4689d82c9819ee->leave($__internal_ea3120837431e6d0345a5521fadbf706b612ef249584195e1d4689d82c9819ee_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_52f3bf3564cf391e901ac13697cdbe7e1f8633164c23258e2d4980d74220b3d6 = $this->env->getExtension("native_profiler");
        $__internal_52f3bf3564cf391e901ac13697cdbe7e1f8633164c23258e2d4980d74220b3d6->enter($__internal_52f3bf3564cf391e901ac13697cdbe7e1f8633164c23258e2d4980d74220b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Assignment</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Assignmentid</th>
                    <th>Assignmentname</th>
                    <th>Assignmentdescription</th>
                    <th>Createddate</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 24
            echo "                    <tr>
                        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            if ($this->getAttribute($context["assignment"], "createddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["assignment"], "createddate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("assignment_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_52f3bf3564cf391e901ac13697cdbe7e1f8633164c23258e2d4980d74220b3d6->leave($__internal_52f3bf3564cf391e901ac13697cdbe7e1f8633164c23258e2d4980d74220b3d6_prof);

    }

    public function getTemplateName()
    {
        return "assignment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  127 => 42,  115 => 36,  109 => 33,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  82 => 25,  79 => 24,  75 => 23,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>{{ course.id }}</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Assignment</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Assignmentid</th>*/
/*                     <th>Assignmentname</th>*/
/*                     <th>Assignmentdescription</th>*/
/*                     <th>Createddate</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for assignment in assignments %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('assignment_show', { 'id': assignment.id }) }}">{{ assignment.id }}</a></td>*/
/*                         <td>{{ assignment.assignmentid }}</td>*/
/*                         <td>{{ assignment.assignmentname }}</td>*/
/*                         <td>{{ assignment.assignmentdescription }}</td>*/
/*                         <td>{% if assignment.createddate %}{{ assignment.createddate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_show', { 'id': assignment.id }) }}">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}">edit</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
