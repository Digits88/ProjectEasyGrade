<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_20f5b60a7f35a230729bc87631ead86e43398ce570e0fa0af5a9906594f395dc extends Twig_Template
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
        $__internal_94c142ebbf787e4e00006d5d00088dada0a3f894e652b1b646eeca0a44618bf6 = $this->env->getExtension("native_profiler");
        $__internal_94c142ebbf787e4e00006d5d00088dada0a3f894e652b1b646eeca0a44618bf6->enter($__internal_94c142ebbf787e4e00006d5d00088dada0a3f894e652b1b646eeca0a44618bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_94c142ebbf787e4e00006d5d00088dada0a3f894e652b1b646eeca0a44618bf6->leave($__internal_94c142ebbf787e4e00006d5d00088dada0a3f894e652b1b646eeca0a44618bf6_prof);

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
