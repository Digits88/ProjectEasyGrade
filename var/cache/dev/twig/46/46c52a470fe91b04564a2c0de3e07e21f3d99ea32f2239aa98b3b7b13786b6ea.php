<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1376cb60fca99238f7808dec4ff02d11b52b513e151195128025863f5a53eee6 extends Twig_Template
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
        $__internal_a5f57fc0076f6b9c68acd1809d17608f120f1d9b55be2cfa7b6166ea7f17cc4e = $this->env->getExtension("native_profiler");
        $__internal_a5f57fc0076f6b9c68acd1809d17608f120f1d9b55be2cfa7b6166ea7f17cc4e->enter($__internal_a5f57fc0076f6b9c68acd1809d17608f120f1d9b55be2cfa7b6166ea7f17cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a5f57fc0076f6b9c68acd1809d17608f120f1d9b55be2cfa7b6166ea7f17cc4e->leave($__internal_a5f57fc0076f6b9c68acd1809d17608f120f1d9b55be2cfa7b6166ea7f17cc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
