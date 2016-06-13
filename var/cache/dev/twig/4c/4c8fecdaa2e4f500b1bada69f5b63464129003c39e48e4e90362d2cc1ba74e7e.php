<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_907f163a0f213780a94d172b0e98bae8212b7789032b5e9878510771d6779a1b extends Twig_Template
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
        $__internal_30b27de024a6c8acc1121542f715b61799b3595f51ecc1bad3ca4dd973604d50 = $this->env->getExtension("native_profiler");
        $__internal_30b27de024a6c8acc1121542f715b61799b3595f51ecc1bad3ca4dd973604d50->enter($__internal_30b27de024a6c8acc1121542f715b61799b3595f51ecc1bad3ca4dd973604d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_30b27de024a6c8acc1121542f715b61799b3595f51ecc1bad3ca4dd973604d50->leave($__internal_30b27de024a6c8acc1121542f715b61799b3595f51ecc1bad3ca4dd973604d50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
