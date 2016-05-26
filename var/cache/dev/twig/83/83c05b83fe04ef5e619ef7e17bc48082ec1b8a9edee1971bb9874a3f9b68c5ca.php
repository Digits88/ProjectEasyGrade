<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_02490ced82d80ab7f6415cce3d4434db2c40f174acdb8e48e8ad0c91c616b408 extends Twig_Template
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
        $__internal_aa771f008e2202f9e080162a6cac9f04de04effabed855dfb4cf6e390db555ed = $this->env->getExtension("native_profiler");
        $__internal_aa771f008e2202f9e080162a6cac9f04de04effabed855dfb4cf6e390db555ed->enter($__internal_aa771f008e2202f9e080162a6cac9f04de04effabed855dfb4cf6e390db555ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_aa771f008e2202f9e080162a6cac9f04de04effabed855dfb4cf6e390db555ed->leave($__internal_aa771f008e2202f9e080162a6cac9f04de04effabed855dfb4cf6e390db555ed_prof);

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
