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
        $__internal_d59bd3ecb068f020e7383c5c99c1e62ad3a143567ea92c3b614d88803fcddd60 = $this->env->getExtension("native_profiler");
        $__internal_d59bd3ecb068f020e7383c5c99c1e62ad3a143567ea92c3b614d88803fcddd60->enter($__internal_d59bd3ecb068f020e7383c5c99c1e62ad3a143567ea92c3b614d88803fcddd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d59bd3ecb068f020e7383c5c99c1e62ad3a143567ea92c3b614d88803fcddd60->leave($__internal_d59bd3ecb068f020e7383c5c99c1e62ad3a143567ea92c3b614d88803fcddd60_prof);

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
