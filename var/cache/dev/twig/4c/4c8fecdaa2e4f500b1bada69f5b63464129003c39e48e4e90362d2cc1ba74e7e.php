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
        $__internal_46abf35e340b76fb1b332e327804bd721768aeb742c0452f577fd45a1b92e8ba = $this->env->getExtension("native_profiler");
        $__internal_46abf35e340b76fb1b332e327804bd721768aeb742c0452f577fd45a1b92e8ba->enter($__internal_46abf35e340b76fb1b332e327804bd721768aeb742c0452f577fd45a1b92e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_46abf35e340b76fb1b332e327804bd721768aeb742c0452f577fd45a1b92e8ba->leave($__internal_46abf35e340b76fb1b332e327804bd721768aeb742c0452f577fd45a1b92e8ba_prof);

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
