<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_467bd46ec6f2a78af781833de3b4ac8291d90fdd9d0d3a7e33bfe6465dcd126a extends Twig_Template
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
        $__internal_eaf0bdbf54d2ddaa2cef5734eb16617338ee38bdb8eb0cafee737cdde542a1bb = $this->env->getExtension("native_profiler");
        $__internal_eaf0bdbf54d2ddaa2cef5734eb16617338ee38bdb8eb0cafee737cdde542a1bb->enter($__internal_eaf0bdbf54d2ddaa2cef5734eb16617338ee38bdb8eb0cafee737cdde542a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf0bdbf54d2ddaa2cef5734eb16617338ee38bdb8eb0cafee737cdde542a1bb->leave($__internal_eaf0bdbf54d2ddaa2cef5734eb16617338ee38bdb8eb0cafee737cdde542a1bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58033338342180ae731d25e5af3a182190bef7be0aa3783d3b83e9692afff211 = $this->env->getExtension("native_profiler");
        $__internal_58033338342180ae731d25e5af3a182190bef7be0aa3783d3b83e9692afff211->enter($__internal_58033338342180ae731d25e5af3a182190bef7be0aa3783d3b83e9692afff211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_58033338342180ae731d25e5af3a182190bef7be0aa3783d3b83e9692afff211->leave($__internal_58033338342180ae731d25e5af3a182190bef7be0aa3783d3b83e9692afff211_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_821779330903fd4fb1ee2bf5f9adbd1bd9c89b2951d74e88450428d776e244c0 = $this->env->getExtension("native_profiler");
        $__internal_821779330903fd4fb1ee2bf5f9adbd1bd9c89b2951d74e88450428d776e244c0->enter($__internal_821779330903fd4fb1ee2bf5f9adbd1bd9c89b2951d74e88450428d776e244c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_821779330903fd4fb1ee2bf5f9adbd1bd9c89b2951d74e88450428d776e244c0->leave($__internal_821779330903fd4fb1ee2bf5f9adbd1bd9c89b2951d74e88450428d776e244c0_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92aed48c7af3d8c208a9bbb4be9f6569ae7ea62c210e6b5aade58a1b769e6f55 = $this->env->getExtension("native_profiler");
        $__internal_92aed48c7af3d8c208a9bbb4be9f6569ae7ea62c210e6b5aade58a1b769e6f55->enter($__internal_92aed48c7af3d8c208a9bbb4be9f6569ae7ea62c210e6b5aade58a1b769e6f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_92aed48c7af3d8c208a9bbb4be9f6569ae7ea62c210e6b5aade58a1b769e6f55->leave($__internal_92aed48c7af3d8c208a9bbb4be9f6569ae7ea62c210e6b5aade58a1b769e6f55_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03a6a43e44551b4bef206625e0094388ff5c9c8932d3588a0bb059ada16b8381 = $this->env->getExtension("native_profiler");
        $__internal_03a6a43e44551b4bef206625e0094388ff5c9c8932d3588a0bb059ada16b8381->enter($__internal_03a6a43e44551b4bef206625e0094388ff5c9c8932d3588a0bb059ada16b8381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_03a6a43e44551b4bef206625e0094388ff5c9c8932d3588a0bb059ada16b8381->leave($__internal_03a6a43e44551b4bef206625e0094388ff5c9c8932d3588a0bb059ada16b8381_prof);

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
