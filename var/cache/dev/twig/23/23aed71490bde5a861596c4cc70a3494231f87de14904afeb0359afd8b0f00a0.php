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
        $__internal_5c6caa4d062423891819efeb68d562047eb1d989597fa91f929a547b09c109ff = $this->env->getExtension("native_profiler");
        $__internal_5c6caa4d062423891819efeb68d562047eb1d989597fa91f929a547b09c109ff->enter($__internal_5c6caa4d062423891819efeb68d562047eb1d989597fa91f929a547b09c109ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6caa4d062423891819efeb68d562047eb1d989597fa91f929a547b09c109ff->leave($__internal_5c6caa4d062423891819efeb68d562047eb1d989597fa91f929a547b09c109ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e1073e609bb0d527056a3319bb2c5e155be4a0e099b60983f5d234d01fcfec4 = $this->env->getExtension("native_profiler");
        $__internal_9e1073e609bb0d527056a3319bb2c5e155be4a0e099b60983f5d234d01fcfec4->enter($__internal_9e1073e609bb0d527056a3319bb2c5e155be4a0e099b60983f5d234d01fcfec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_9e1073e609bb0d527056a3319bb2c5e155be4a0e099b60983f5d234d01fcfec4->leave($__internal_9e1073e609bb0d527056a3319bb2c5e155be4a0e099b60983f5d234d01fcfec4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c514f00c4a7a39b0233584d473bbff51872f63ba60a430922662b6be225c2ffb = $this->env->getExtension("native_profiler");
        $__internal_c514f00c4a7a39b0233584d473bbff51872f63ba60a430922662b6be225c2ffb->enter($__internal_c514f00c4a7a39b0233584d473bbff51872f63ba60a430922662b6be225c2ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c514f00c4a7a39b0233584d473bbff51872f63ba60a430922662b6be225c2ffb->leave($__internal_c514f00c4a7a39b0233584d473bbff51872f63ba60a430922662b6be225c2ffb_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91e1727e74d25b9409ebb9fa225fc5912e7f2cf974cfb37317a45d3e53416b1a = $this->env->getExtension("native_profiler");
        $__internal_91e1727e74d25b9409ebb9fa225fc5912e7f2cf974cfb37317a45d3e53416b1a->enter($__internal_91e1727e74d25b9409ebb9fa225fc5912e7f2cf974cfb37317a45d3e53416b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_91e1727e74d25b9409ebb9fa225fc5912e7f2cf974cfb37317a45d3e53416b1a->leave($__internal_91e1727e74d25b9409ebb9fa225fc5912e7f2cf974cfb37317a45d3e53416b1a_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_548737bfa3a86337da13f61dc8aee0d3ef708c58f3c0e1c70d8128159c5cb059 = $this->env->getExtension("native_profiler");
        $__internal_548737bfa3a86337da13f61dc8aee0d3ef708c58f3c0e1c70d8128159c5cb059->enter($__internal_548737bfa3a86337da13f61dc8aee0d3ef708c58f3c0e1c70d8128159c5cb059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_548737bfa3a86337da13f61dc8aee0d3ef708c58f3c0e1c70d8128159c5cb059->leave($__internal_548737bfa3a86337da13f61dc8aee0d3ef708c58f3c0e1c70d8128159c5cb059_prof);

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
