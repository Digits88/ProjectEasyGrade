<?php

/* assignment/index.html.twig */
class __TwigTemplate_bdc0f9ced24b9956aa9877d4b26e68d3c58e7d42656128b3a28ade74a7a86f4c extends Twig_Template
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
        $__internal_f3dd911b1999d298cef2d7e3749d727729be2cd9386c61762b9b322f2051c147 = $this->env->getExtension("native_profiler");
        $__internal_f3dd911b1999d298cef2d7e3749d727729be2cd9386c61762b9b322f2051c147->enter($__internal_f3dd911b1999d298cef2d7e3749d727729be2cd9386c61762b9b322f2051c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3dd911b1999d298cef2d7e3749d727729be2cd9386c61762b9b322f2051c147->leave($__internal_f3dd911b1999d298cef2d7e3749d727729be2cd9386c61762b9b322f2051c147_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c31ac85feefa21ba25ce84b2dbc27ef5d592ef0d93eaaf7e1d84e40ab22e19ee = $this->env->getExtension("native_profiler");
        $__internal_c31ac85feefa21ba25ce84b2dbc27ef5d592ef0d93eaaf7e1d84e40ab22e19ee->enter($__internal_c31ac85feefa21ba25ce84b2dbc27ef5d592ef0d93eaaf7e1d84e40ab22e19ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_c31ac85feefa21ba25ce84b2dbc27ef5d592ef0d93eaaf7e1d84e40ab22e19ee->leave($__internal_c31ac85feefa21ba25ce84b2dbc27ef5d592ef0d93eaaf7e1d84e40ab22e19ee_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_86c4b09be1a42f7f6a70ffac354d75ab33ad2288f1e75c3dcd11ba5842fe524a = $this->env->getExtension("native_profiler");
        $__internal_86c4b09be1a42f7f6a70ffac354d75ab33ad2288f1e75c3dcd11ba5842fe524a->enter($__internal_86c4b09be1a42f7f6a70ffac354d75ab33ad2288f1e75c3dcd11ba5842fe524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_new", array("cid" => (isset($context["cid"]) ? $context["cid"] : $this->getContext($context, "cid")))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Create a new Assignment</a>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back</a>
        </li>
    </ul>

    <!-- Zero Configuration Table -->
    <br><div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Assignment</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Assignmentid</th>
                    <th>Assignmentname</th>
                    <th>Assignmentdescription</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : $this->getContext($context, "assignments")));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentid", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submissions_all", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentname", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["assignment"], "assignmentdescription", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_show", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">edit</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_graph", array("id" => $this->getAttribute($context["assignment"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Graph Representation</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_86c4b09be1a42f7f6a70ffac354d75ab33ad2288f1e75c3dcd11ba5842fe524a->leave($__internal_86c4b09be1a42f7f6a70ffac354d75ab33ad2288f1e75c3dcd11ba5842fe524a_prof);

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
        return array (  138 => 51,  126 => 45,  120 => 42,  114 => 39,  107 => 35,  101 => 34,  97 => 33,  93 => 32,  90 => 31,  86 => 30,  63 => 10,  59 => 9,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment list</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_new',{ 'cid' : cid }) }}" class="btn btn-warning">Create a new Assignment</a>*/
/*             <a href="{{ path('user_courses') }}" class="btn btn-primary">Back</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <br><div class="panel panel-default">*/
/*         <div class="panel-heading">Your Assignment</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Assignmentid</th>*/
/*                     <th>Assignmentname</th>*/
/*                     <th>Assignmentdescription</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for assignment in assignments %}*/
/*                     <tr>*/
/*                         <td>{{ assignment.id }}</td>*/
/*                         <td>{{ assignment.assignmentid }}</td>*/
/*                         <td><a href="{{ path('submissions_all', { 'id': assignment.id }) }}">{{ assignment.assignmentname }}</a></td>*/
/*                         <td>{{ assignment.assignmentdescription }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_show', { 'id': assignment.id }) }}" class="btn btn-warning">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}" class="btn btn-success">edit</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('assignment_graph', { 'id': assignment.id }) }}" class="btn btn-primary">Graph Representation</a>*/
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
/* */
/* {% endblock contentdetail %}*/
/* */
