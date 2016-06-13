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
        $__internal_4a1c22917640ac6092be4a5e31c8c5a265193bbbff5937f7ebcf6a670b0dec5b = $this->env->getExtension("native_profiler");
        $__internal_4a1c22917640ac6092be4a5e31c8c5a265193bbbff5937f7ebcf6a670b0dec5b->enter($__internal_4a1c22917640ac6092be4a5e31c8c5a265193bbbff5937f7ebcf6a670b0dec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4a1c22917640ac6092be4a5e31c8c5a265193bbbff5937f7ebcf6a670b0dec5b->leave($__internal_4a1c22917640ac6092be4a5e31c8c5a265193bbbff5937f7ebcf6a670b0dec5b_prof);

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
