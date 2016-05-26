<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_225a3b887bef1bddfd94e1e552bf1b883122f9107e8bd919cfefb5cebb0c482b extends Twig_Template
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
        $__internal_f462405985f279da26acff915db5d791a74841b41caf4a154acb16800e370124 = $this->env->getExtension("native_profiler");
        $__internal_f462405985f279da26acff915db5d791a74841b41caf4a154acb16800e370124->enter($__internal_f462405985f279da26acff915db5d791a74841b41caf4a154acb16800e370124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f462405985f279da26acff915db5d791a74841b41caf4a154acb16800e370124->leave($__internal_f462405985f279da26acff915db5d791a74841b41caf4a154acb16800e370124_prof);

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
