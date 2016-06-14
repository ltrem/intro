<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_68845166fbc2032e498fe4cdc750515e1d1a316ebbeee8a1c3fab153007d06f0 extends Twig_Template
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
        $__internal_4c9133b36f58e64596f2adae85cfbf4ae48c4eb4f569c2cab10e5179543d7915 = $this->env->getExtension("native_profiler");
        $__internal_4c9133b36f58e64596f2adae85cfbf4ae48c4eb4f569c2cab10e5179543d7915->enter($__internal_4c9133b36f58e64596f2adae85cfbf4ae48c4eb4f569c2cab10e5179543d7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4c9133b36f58e64596f2adae85cfbf4ae48c4eb4f569c2cab10e5179543d7915->leave($__internal_4c9133b36f58e64596f2adae85cfbf4ae48c4eb4f569c2cab10e5179543d7915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
