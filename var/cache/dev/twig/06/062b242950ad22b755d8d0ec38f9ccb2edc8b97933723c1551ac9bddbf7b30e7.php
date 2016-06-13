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
        $__internal_a3156e97b95f7a35393595b6977d7253320acbfc95fdb58697c9b41bf02565d3 = $this->env->getExtension("native_profiler");
        $__internal_a3156e97b95f7a35393595b6977d7253320acbfc95fdb58697c9b41bf02565d3->enter($__internal_a3156e97b95f7a35393595b6977d7253320acbfc95fdb58697c9b41bf02565d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a3156e97b95f7a35393595b6977d7253320acbfc95fdb58697c9b41bf02565d3->leave($__internal_a3156e97b95f7a35393595b6977d7253320acbfc95fdb58697c9b41bf02565d3_prof);

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
