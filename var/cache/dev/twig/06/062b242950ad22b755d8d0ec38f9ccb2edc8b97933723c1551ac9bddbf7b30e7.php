<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_30528c70fb721ffb51f4d12189087dc9f6c656d7dfe44874357997e59a5e4de8 extends Twig_Template
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
        $__internal_45a97db43e65dd8ba35f6b3c26b496bf877eaa85aef9a7998dcbb150cc48833b = $this->env->getExtension("native_profiler");
        $__internal_45a97db43e65dd8ba35f6b3c26b496bf877eaa85aef9a7998dcbb150cc48833b->enter($__internal_45a97db43e65dd8ba35f6b3c26b496bf877eaa85aef9a7998dcbb150cc48833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_45a97db43e65dd8ba35f6b3c26b496bf877eaa85aef9a7998dcbb150cc48833b->leave($__internal_45a97db43e65dd8ba35f6b3c26b496bf877eaa85aef9a7998dcbb150cc48833b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
