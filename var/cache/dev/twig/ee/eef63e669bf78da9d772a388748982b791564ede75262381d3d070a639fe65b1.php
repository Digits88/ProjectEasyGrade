<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e12cc7f60ed9620cba5445be60cb55ada3e98647c83a2eee1375fad9ebc01224 extends Twig_Template
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
        $__internal_10c1c0c8bfa47422f903a66989c1a3013939a8d79448dc386e007703c164ca6f = $this->env->getExtension("native_profiler");
        $__internal_10c1c0c8bfa47422f903a66989c1a3013939a8d79448dc386e007703c164ca6f->enter($__internal_10c1c0c8bfa47422f903a66989c1a3013939a8d79448dc386e007703c164ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_10c1c0c8bfa47422f903a66989c1a3013939a8d79448dc386e007703c164ca6f->leave($__internal_10c1c0c8bfa47422f903a66989c1a3013939a8d79448dc386e007703c164ca6f_prof);

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
