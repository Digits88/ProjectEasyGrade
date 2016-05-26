<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_881db56d3397704ab057ca1e53d6820d63c93cca9f92e2c5979a7d73f87eb41f extends Twig_Template
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
        $__internal_a7048641f1626eddc990cc794ccd35cce0dcaea2d21fdb49a9e8c8533ffac861 = $this->env->getExtension("native_profiler");
        $__internal_a7048641f1626eddc990cc794ccd35cce0dcaea2d21fdb49a9e8c8533ffac861->enter($__internal_a7048641f1626eddc990cc794ccd35cce0dcaea2d21fdb49a9e8c8533ffac861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a7048641f1626eddc990cc794ccd35cce0dcaea2d21fdb49a9e8c8533ffac861->leave($__internal_a7048641f1626eddc990cc794ccd35cce0dcaea2d21fdb49a9e8c8533ffac861_prof);

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
