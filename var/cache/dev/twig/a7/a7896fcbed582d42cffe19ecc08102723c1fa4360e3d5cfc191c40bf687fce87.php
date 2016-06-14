<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4dbe3709baa02a77bc1528c55ee17f689d70fb71899bbb1b5be60936e1045225 extends Twig_Template
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
        $__internal_bb9d9510cc7b0477a7f7290f27963ddc6fa7a50a69b917dbd1f6982b3295ce9a = $this->env->getExtension("native_profiler");
        $__internal_bb9d9510cc7b0477a7f7290f27963ddc6fa7a50a69b917dbd1f6982b3295ce9a->enter($__internal_bb9d9510cc7b0477a7f7290f27963ddc6fa7a50a69b917dbd1f6982b3295ce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bb9d9510cc7b0477a7f7290f27963ddc6fa7a50a69b917dbd1f6982b3295ce9a->leave($__internal_bb9d9510cc7b0477a7f7290f27963ddc6fa7a50a69b917dbd1f6982b3295ce9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
