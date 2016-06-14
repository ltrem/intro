<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fbd81348f244e8946e8c7c76d276ccbb43bda90738af317d972a05cb9f27a4a5 extends Twig_Template
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
        $__internal_c08beda09602e03a8aab8ba19c12f3b5f228db403c061d0c36873e8c5d18999d = $this->env->getExtension("native_profiler");
        $__internal_c08beda09602e03a8aab8ba19c12f3b5f228db403c061d0c36873e8c5d18999d->enter($__internal_c08beda09602e03a8aab8ba19c12f3b5f228db403c061d0c36873e8c5d18999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c08beda09602e03a8aab8ba19c12f3b5f228db403c061d0c36873e8c5d18999d->leave($__internal_c08beda09602e03a8aab8ba19c12f3b5f228db403c061d0c36873e8c5d18999d_prof);

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
