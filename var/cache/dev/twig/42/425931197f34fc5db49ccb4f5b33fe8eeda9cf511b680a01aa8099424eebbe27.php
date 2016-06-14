<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ea6cbe8af9be544024599d56527fa7b5365ba5f6ddaf9655f63aa43117e99c98 extends Twig_Template
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
        $__internal_8248333d4bfaf845585c4801d35a1f40b4c2c0e6f54aa1b2682b1e4db45413f8 = $this->env->getExtension("native_profiler");
        $__internal_8248333d4bfaf845585c4801d35a1f40b4c2c0e6f54aa1b2682b1e4db45413f8->enter($__internal_8248333d4bfaf845585c4801d35a1f40b4c2c0e6f54aa1b2682b1e4db45413f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8248333d4bfaf845585c4801d35a1f40b4c2c0e6f54aa1b2682b1e4db45413f8->leave($__internal_8248333d4bfaf845585c4801d35a1f40b4c2c0e6f54aa1b2682b1e4db45413f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
