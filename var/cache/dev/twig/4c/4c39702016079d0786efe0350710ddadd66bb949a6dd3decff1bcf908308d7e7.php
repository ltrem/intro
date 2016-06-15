<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e02c4c34d6ab9d451f73c2fcd7f794f64fbb01794d964a0e34b8904252ba9308 extends Twig_Template
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
        $__internal_9869e484bde09e71c970c58954b38ad42f49cbdd1aa1d41dfb56b3db4391f98a = $this->env->getExtension("native_profiler");
        $__internal_9869e484bde09e71c970c58954b38ad42f49cbdd1aa1d41dfb56b3db4391f98a->enter($__internal_9869e484bde09e71c970c58954b38ad42f49cbdd1aa1d41dfb56b3db4391f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9869e484bde09e71c970c58954b38ad42f49cbdd1aa1d41dfb56b3db4391f98a->leave($__internal_9869e484bde09e71c970c58954b38ad42f49cbdd1aa1d41dfb56b3db4391f98a_prof);

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
