<?php

/* :user:index.html.twig */
class __TwigTemplate_a70da4588b69f1e6c701a60bc408b0da060927aa2e33d35ab61a577cb4b01016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_7eedd9ded2cf109d8b1f2ed57fa06d84cfcf4e41f4ce2fb356c04521adf77290 = $this->env->getExtension("native_profiler");
        $__internal_7eedd9ded2cf109d8b1f2ed57fa06d84cfcf4e41f4ce2fb356c04521adf77290->enter($__internal_7eedd9ded2cf109d8b1f2ed57fa06d84cfcf4e41f4ce2fb356c04521adf77290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eedd9ded2cf109d8b1f2ed57fa06d84cfcf4e41f4ce2fb356c04521adf77290->leave($__internal_7eedd9ded2cf109d8b1f2ed57fa06d84cfcf4e41f4ce2fb356c04521adf77290_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_cfab60f45898c0ea7d51c1f47c3ce0b469a9618b88dfd50e1b21c2e888dd65d9 = $this->env->getExtension("native_profiler");
        $__internal_cfab60f45898c0ea7d51c1f47c3ce0b469a9618b88dfd50e1b21c2e888dd65d9->enter($__internal_cfab60f45898c0ea7d51c1f47c3ce0b469a9618b88dfd50e1b21c2e888dd65d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_cfab60f45898c0ea7d51c1f47c3ce0b469a9618b88dfd50e1b21c2e888dd65d9->leave($__internal_cfab60f45898c0ea7d51c1f47c3ce0b469a9618b88dfd50e1b21c2e888dd65d9_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_6684f29c08432e0ef7ce72a772e458b0bc36c0b626fdfd580e717da8914b608b = $this->env->getExtension("native_profiler");
        $__internal_6684f29c08432e0ef7ce72a772e458b0bc36c0b626fdfd580e717da8914b608b->enter($__internal_6684f29c08432e0ef7ce72a772e458b0bc36c0b626fdfd580e717da8914b608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_6684f29c08432e0ef7ce72a772e458b0bc36c0b626fdfd580e717da8914b608b->leave($__internal_6684f29c08432e0ef7ce72a772e458b0bc36c0b626fdfd580e717da8914b608b_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
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
