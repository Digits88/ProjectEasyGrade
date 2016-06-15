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
        $__internal_c03e797535563dafc115150bdfaeb4ff395671a7710636f0b1de947a2f2bb0ed = $this->env->getExtension("native_profiler");
        $__internal_c03e797535563dafc115150bdfaeb4ff395671a7710636f0b1de947a2f2bb0ed->enter($__internal_c03e797535563dafc115150bdfaeb4ff395671a7710636f0b1de947a2f2bb0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c03e797535563dafc115150bdfaeb4ff395671a7710636f0b1de947a2f2bb0ed->leave($__internal_c03e797535563dafc115150bdfaeb4ff395671a7710636f0b1de947a2f2bb0ed_prof);

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
