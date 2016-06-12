<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_99a36b422a6781d26e121a22bc29e679569518e23d796cd0f0b841c8a0329540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_157e58077420665937ab4812ec41474dfce084749c5bd3b20892b64c668b8596 = $this->env->getExtension("native_profiler");
        $__internal_157e58077420665937ab4812ec41474dfce084749c5bd3b20892b64c668b8596->enter($__internal_157e58077420665937ab4812ec41474dfce084749c5bd3b20892b64c668b8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_157e58077420665937ab4812ec41474dfce084749c5bd3b20892b64c668b8596->leave($__internal_157e58077420665937ab4812ec41474dfce084749c5bd3b20892b64c668b8596_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb8f839a92bef8a0455497affd4e1bf8dea6da3de7389fee6d892ffed1d53c5d = $this->env->getExtension("native_profiler");
        $__internal_eb8f839a92bef8a0455497affd4e1bf8dea6da3de7389fee6d892ffed1d53c5d->enter($__internal_eb8f839a92bef8a0455497affd4e1bf8dea6da3de7389fee6d892ffed1d53c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_eb8f839a92bef8a0455497affd4e1bf8dea6da3de7389fee6d892ffed1d53c5d->leave($__internal_eb8f839a92bef8a0455497affd4e1bf8dea6da3de7389fee6d892ffed1d53c5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11146579530a683a1608efdff6b33c7c56024b26736ee2bffa061711010591fa = $this->env->getExtension("native_profiler");
        $__internal_11146579530a683a1608efdff6b33c7c56024b26736ee2bffa061711010591fa->enter($__internal_11146579530a683a1608efdff6b33c7c56024b26736ee2bffa061711010591fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"login-page bk-img\">
        <div class=\"form-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-3\">
                        <h1 class=\"text-center text-bold text-light mt-4x\">Sign in</h1>
                        <div class=\"well row pt-2x pb-3x bk-light\">
                            <div class=\"col-md-8 col-md-offset-2\">

                                ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 18
        echo "
                                <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"mt\" method=\"post\">

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                    <label for=\"username\" class=\"text-uppercase text-sm\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"text\"  id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\" class=\"form-control mb\">

                                    <label for=\"password\" class=\"text-uppercase text-sm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control mb\">

                                    <div class=\"checkbox checkbox-circle checkbox-info\">
                                        <input type=\"checkbox\" checked id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                        <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    </div>

                                    <!--button class=\"btn btn-primary btn-block\" type=\"submit\">LOGIN</button-->
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                                </form>
                            </div>
                        </div>
                        <div class=\"text-center text-light\">
                            <a href=\"#\" class=\"text-light\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_11146579530a683a1608efdff6b33c7c56024b26736ee2bffa061711010591fa->leave($__internal_11146579530a683a1608efdff6b33c7c56024b26736ee2bffa061711010591fa_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_448e9308698fac87385ac0df0e93af91147ecff34b521f2423d25f8d0c0bacef = $this->env->getExtension("native_profiler");
        $__internal_448e9308698fac87385ac0df0e93af91147ecff34b521f2423d25f8d0c0bacef->enter($__internal_448e9308698fac87385ac0df0e93af91147ecff34b521f2423d25f8d0c0bacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_448e9308698fac87385ac0df0e93af91147ecff34b521f2423d25f8d0c0bacef->leave($__internal_448e9308698fac87385ac0df0e93af91147ecff34b521f2423d25f8d0c0bacef_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f110be0f4253c95f257746d461d4bb51866b4c1f65223d8f298924887a73adf7 = $this->env->getExtension("native_profiler");
        $__internal_f110be0f4253c95f257746d461d4bb51866b4c1f65223d8f298924887a73adf7->enter($__internal_f110be0f4253c95f257746d461d4bb51866b4c1f65223d8f298924887a73adf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f110be0f4253c95f257746d461d4bb51866b4c1f65223d8f298924887a73adf7->leave($__internal_f110be0f4253c95f257746d461d4bb51866b4c1f65223d8f298924887a73adf7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 57,  150 => 56,  140 => 53,  134 => 52,  111 => 35,  104 => 31,  96 => 26,  91 => 24,  87 => 23,  82 => 21,  77 => 19,  74 => 18,  68 => 16,  66 => 15,  55 => 6,  49 => 5,  37 => 3,  11 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="login-page bk-img">*/
/*         <div class="form-content">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-md-offset-3">*/
/*                         <h1 class="text-center text-bold text-light mt-4x">Sign in</h1>*/
/*                         <div class="well row pt-2x pb-3x bk-light">*/
/*                             <div class="col-md-8 col-md-offset-2">*/
/* */
/*                                 {% if error %}*/
/*                                     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                                 {% endif %}*/
/* */
/*                                 <form action="{{ path("fos_user_security_check") }}" class="mt" method="post">*/
/* */
/*                                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                                     <label for="username" class="text-uppercase text-sm">{{ 'security.login.username'|trans }}</label>*/
/*                                     <input type="text"  id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Username" class="form-control mb">*/
/* */
/*                                     <label for="password" class="text-uppercase text-sm">{{ 'security.login.password'|trans }}</label>*/
/*                                     <input type="password" id="password" name="_password" required="required" placeholder="Password" class="form-control mb">*/
/* */
/*                                     <div class="checkbox checkbox-circle checkbox-info">*/
/*                                         <input type="checkbox" checked id="remember_me" name="_remember_me" value="on">*/
/*                                         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                                     </div>*/
/* */
/*                                     <!--button class="btn btn-primary btn-block" type="submit">LOGIN</button-->*/
/*                                     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* */
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="text-center text-light">*/
/*                             <a href="#" class="text-light">Forgot password?</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
