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
        $__internal_76c4ee0820e1648f09d25e9672b0f3355133e172f9bf58de960f5349a449cafa = $this->env->getExtension("native_profiler");
        $__internal_76c4ee0820e1648f09d25e9672b0f3355133e172f9bf58de960f5349a449cafa->enter($__internal_76c4ee0820e1648f09d25e9672b0f3355133e172f9bf58de960f5349a449cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_76c4ee0820e1648f09d25e9672b0f3355133e172f9bf58de960f5349a449cafa->leave($__internal_76c4ee0820e1648f09d25e9672b0f3355133e172f9bf58de960f5349a449cafa_prof);

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
