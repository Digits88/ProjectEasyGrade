<?php

/* user/index.html.twig */
class __TwigTemplate_adeae38471b882f7d94b6cb71320f1d48d2120174d590e496e0ccbf25a7ca574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_a2e8bcbbfe68823279687abf68764e8ae9edb421a770fa5a021492c53b11479c = $this->env->getExtension("native_profiler");
        $__internal_a2e8bcbbfe68823279687abf68764e8ae9edb421a770fa5a021492c53b11479c->enter($__internal_a2e8bcbbfe68823279687abf68764e8ae9edb421a770fa5a021492c53b11479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e8bcbbfe68823279687abf68764e8ae9edb421a770fa5a021492c53b11479c->leave($__internal_a2e8bcbbfe68823279687abf68764e8ae9edb421a770fa5a021492c53b11479c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_5c994c115028ac1a9ff6e3d08c5b26f784e8125fba44b0d1beaa252265030070 = $this->env->getExtension("native_profiler");
        $__internal_5c994c115028ac1a9ff6e3d08c5b26f784e8125fba44b0d1beaa252265030070->enter($__internal_5c994c115028ac1a9ff6e3d08c5b26f784e8125fba44b0d1beaa252265030070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_5c994c115028ac1a9ff6e3d08c5b26f784e8125fba44b0d1beaa252265030070->leave($__internal_5c994c115028ac1a9ff6e3d08c5b26f784e8125fba44b0d1beaa252265030070_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_60469a21431790a96a0838bc091bbec93fa5864e6b8da24db1ebd173ec75af3d = $this->env->getExtension("native_profiler");
        $__internal_60469a21431790a96a0838bc091bbec93fa5864e6b8da24db1ebd173ec75af3d->enter($__internal_60469a21431790a96a0838bc091bbec93fa5864e6b8da24db1ebd173ec75af3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 31
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
        // line 37
        echo "
                </tbody>
            </table>



        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>

";
        
        $__internal_60469a21431790a96a0838bc091bbec93fa5864e6b8da24db1ebd173ec75af3d->leave($__internal_60469a21431790a96a0838bc091bbec93fa5864e6b8da24db1ebd173ec75af3d_prof);

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
        return array (  120 => 48,  107 => 37,  95 => 31,  88 => 27,  84 => 26,  80 => 25,  77 => 24,  73 => 23,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
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
