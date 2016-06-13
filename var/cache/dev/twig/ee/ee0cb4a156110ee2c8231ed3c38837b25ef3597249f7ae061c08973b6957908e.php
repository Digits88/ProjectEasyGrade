<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8a2c967aa1f9a8dc4023427a611507530afc492cf67329716829febddfadb251 extends Twig_Template
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
        $__internal_ada91c19e994ce7cc1488b7f5a7f4de338e704edf9d7ebd56eac10614c462607 = $this->env->getExtension("native_profiler");
        $__internal_ada91c19e994ce7cc1488b7f5a7f4de338e704edf9d7ebd56eac10614c462607->enter($__internal_ada91c19e994ce7cc1488b7f5a7f4de338e704edf9d7ebd56eac10614c462607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ada91c19e994ce7cc1488b7f5a7f4de338e704edf9d7ebd56eac10614c462607->leave($__internal_ada91c19e994ce7cc1488b7f5a7f4de338e704edf9d7ebd56eac10614c462607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
