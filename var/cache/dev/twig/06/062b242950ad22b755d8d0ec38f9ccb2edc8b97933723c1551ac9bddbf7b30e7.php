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
        $__internal_024961597285642fdd8da8a75c1b6df886a68197026a6e5302a0210d7b8f10aa = $this->env->getExtension("native_profiler");
        $__internal_024961597285642fdd8da8a75c1b6df886a68197026a6e5302a0210d7b8f10aa->enter($__internal_024961597285642fdd8da8a75c1b6df886a68197026a6e5302a0210d7b8f10aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_024961597285642fdd8da8a75c1b6df886a68197026a6e5302a0210d7b8f10aa->leave($__internal_024961597285642fdd8da8a75c1b6df886a68197026a6e5302a0210d7b8f10aa_prof);

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
