<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7b9161c16891f559ca293c3ef2dea3704d05191c9869d0e1941ee2efa8d2f22c extends Twig_Template
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
        $__internal_1e9a417a298c4c969e79b13683a4332c7b5044186b42d85698027186ad6e020b = $this->env->getExtension("native_profiler");
        $__internal_1e9a417a298c4c969e79b13683a4332c7b5044186b42d85698027186ad6e020b->enter($__internal_1e9a417a298c4c969e79b13683a4332c7b5044186b42d85698027186ad6e020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1e9a417a298c4c969e79b13683a4332c7b5044186b42d85698027186ad6e020b->leave($__internal_1e9a417a298c4c969e79b13683a4332c7b5044186b42d85698027186ad6e020b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
