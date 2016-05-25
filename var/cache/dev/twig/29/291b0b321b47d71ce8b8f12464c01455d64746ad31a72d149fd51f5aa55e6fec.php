<?php

/* user/index.html.twig */
class __TwigTemplate_a8c4ebb36bf4183f37558775c458c5482579e3c9710e9516e820b16c9875ef21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d76b31ac655c9b95bd81ca5fd2067d07b421db22cacf3da48d3e94f4cce8d00 = $this->env->getExtension("native_profiler");
        $__internal_2d76b31ac655c9b95bd81ca5fd2067d07b421db22cacf3da48d3e94f4cce8d00->enter($__internal_2d76b31ac655c9b95bd81ca5fd2067d07b421db22cacf3da48d3e94f4cce8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d76b31ac655c9b95bd81ca5fd2067d07b421db22cacf3da48d3e94f4cce8d00->leave($__internal_2d76b31ac655c9b95bd81ca5fd2067d07b421db22cacf3da48d3e94f4cce8d00_prof);

    }

    // line 3
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_eb7a0fbbd981c5a7caa0cb73eac1f1dd663a11794d34caa23a33445ed7a15da6 = $this->env->getExtension("native_profiler");
        $__internal_eb7a0fbbd981c5a7caa0cb73eac1f1dd663a11794d34caa23a33445ed7a15da6->enter($__internal_eb7a0fbbd981c5a7caa0cb73eac1f1dd663a11794d34caa23a33445ed7a15da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 4
        echo "

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Existing Users</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Manage Account</th>

                </tr>
                </thead>
                <tbody>

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Edit or Delete</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                </tbody>
            </table>



        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>

";
        
        $__internal_eb7a0fbbd981c5a7caa0cb73eac1f1dd663a11794d34caa23a33445ed7a15da6->leave($__internal_eb7a0fbbd981c5a7caa0cb73eac1f1dd663a11794d34caa23a33445ed7a15da6_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  94 => 36,  82 => 30,  75 => 26,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contentdetail %}*/
/* */
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Existing Users</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>User ID</th>*/
/*                     <th>Username</th>*/
/*                     <th>Email</th>*/
/*                     <th>Manage Account</th>*/
/* */
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td>{{ user.id }}</td>*/
/*                         <td>{{ user.username }}</td>*/
/*                         <td>{{ user.email }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit or Delete</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
