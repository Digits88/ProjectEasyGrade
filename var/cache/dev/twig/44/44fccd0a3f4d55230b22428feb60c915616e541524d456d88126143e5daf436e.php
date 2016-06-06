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
        $__internal_4df94f2f5d1fdc96a7e0b64a8fafbb957b5cdbb0e5f19f67914f655a3673e6ff = $this->env->getExtension("native_profiler");
        $__internal_4df94f2f5d1fdc96a7e0b64a8fafbb957b5cdbb0e5f19f67914f655a3673e6ff->enter($__internal_4df94f2f5d1fdc96a7e0b64a8fafbb957b5cdbb0e5f19f67914f655a3673e6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df94f2f5d1fdc96a7e0b64a8fafbb957b5cdbb0e5f19f67914f655a3673e6ff->leave($__internal_4df94f2f5d1fdc96a7e0b64a8fafbb957b5cdbb0e5f19f67914f655a3673e6ff_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_dbca8afae40fac4f1ac507d69b9049cbaf568809b6beb6466aa991a6877bd512 = $this->env->getExtension("native_profiler");
        $__internal_dbca8afae40fac4f1ac507d69b9049cbaf568809b6beb6466aa991a6877bd512->enter($__internal_dbca8afae40fac4f1ac507d69b9049cbaf568809b6beb6466aa991a6877bd512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_dbca8afae40fac4f1ac507d69b9049cbaf568809b6beb6466aa991a6877bd512->leave($__internal_dbca8afae40fac4f1ac507d69b9049cbaf568809b6beb6466aa991a6877bd512_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_933399df19aef2b2703141c9f0a719ddd39a046825360e62383577d6a7e6c90c = $this->env->getExtension("native_profiler");
        $__internal_933399df19aef2b2703141c9f0a719ddd39a046825360e62383577d6a7e6c90c->enter($__internal_933399df19aef2b2703141c9f0a719ddd39a046825360e62383577d6a7e6c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "
    <h1>User Accounts</h1>

    <ul>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"btn btn-warning\">Create a new user</a>
        </li>
    </ul>

    <br>

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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">View</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                </tbody>
            </table>



        </div>
    </div>



";
        
        $__internal_933399df19aef2b2703141c9f0a719ddd39a046825360e62383577d6a7e6c90c->leave($__internal_933399df19aef2b2703141c9f0a719ddd39a046825360e62383577d6a7e6c90c_prof);

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
        return array (  119 => 46,  107 => 40,  100 => 36,  96 => 35,  92 => 34,  89 => 33,  85 => 32,  60 => 10,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/* */
/*     <h1>User Accounts</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}" class="btn btn-warning">Create a new user</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <br>*/
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
/*                                     <a href="{{ path('user_show', { 'id': user.id }) }}" class="btn btn-primary">View</a>*/
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
/* */
/* */
/* {% endblock %}*/
/* */
