<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c95648cec8244188481ab13bd021db9c95248e834e9e62e9d5cecd5ccd202cd extends Twig_Template
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
        $__internal_1777bad11abd38f55d200ec608f7d41afae80e8ed3816c8b95b4f54e510fc198 = $this->env->getExtension("native_profiler");
        $__internal_1777bad11abd38f55d200ec608f7d41afae80e8ed3816c8b95b4f54e510fc198->enter($__internal_1777bad11abd38f55d200ec608f7d41afae80e8ed3816c8b95b4f54e510fc198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1777bad11abd38f55d200ec608f7d41afae80e8ed3816c8b95b4f54e510fc198->leave($__internal_1777bad11abd38f55d200ec608f7d41afae80e8ed3816c8b95b4f54e510fc198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
