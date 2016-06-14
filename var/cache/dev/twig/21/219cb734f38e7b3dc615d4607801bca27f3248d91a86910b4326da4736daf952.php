<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_306ffc0aa584fe1c959f0e2d9cffaee2c7dbf226a97424ea0d97f6ed12b769e5 extends Twig_Template
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
        $__internal_fa3d7318c5f65276a1eea196b8751f1593846c156e81d8ed712de79d24504532 = $this->env->getExtension("native_profiler");
        $__internal_fa3d7318c5f65276a1eea196b8751f1593846c156e81d8ed712de79d24504532->enter($__internal_fa3d7318c5f65276a1eea196b8751f1593846c156e81d8ed712de79d24504532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fa3d7318c5f65276a1eea196b8751f1593846c156e81d8ed712de79d24504532->leave($__internal_fa3d7318c5f65276a1eea196b8751f1593846c156e81d8ed712de79d24504532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
