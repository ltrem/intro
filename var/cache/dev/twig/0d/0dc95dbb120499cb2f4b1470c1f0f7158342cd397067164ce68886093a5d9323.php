<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_25222333023d8d53910ebef8a2962a77c33494288612c50f57cd47d6c619a31f extends Twig_Template
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
        $__internal_daa67f88c0a54a81501a69ebce99ddf4a9a39ddd1d83fac793d31a7bd19ca0ea = $this->env->getExtension("native_profiler");
        $__internal_daa67f88c0a54a81501a69ebce99ddf4a9a39ddd1d83fac793d31a7bd19ca0ea->enter($__internal_daa67f88c0a54a81501a69ebce99ddf4a9a39ddd1d83fac793d31a7bd19ca0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_daa67f88c0a54a81501a69ebce99ddf4a9a39ddd1d83fac793d31a7bd19ca0ea->leave($__internal_daa67f88c0a54a81501a69ebce99ddf4a9a39ddd1d83fac793d31a7bd19ca0ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
