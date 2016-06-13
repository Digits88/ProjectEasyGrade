<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7524fef86b40bbafc38bfac06b61390dd91cf731c6498f9afb3b2e9d5fa026fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7babca786898678f65a176ffaa55c0f9f5f27ce5638eab96ef177fb6dc26e1d9 = $this->env->getExtension("native_profiler");
        $__internal_7babca786898678f65a176ffaa55c0f9f5f27ce5638eab96ef177fb6dc26e1d9->enter($__internal_7babca786898678f65a176ffaa55c0f9f5f27ce5638eab96ef177fb6dc26e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7babca786898678f65a176ffaa55c0f9f5f27ce5638eab96ef177fb6dc26e1d9->leave($__internal_7babca786898678f65a176ffaa55c0f9f5f27ce5638eab96ef177fb6dc26e1d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
