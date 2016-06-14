<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cf4936065e6a98b27ed3aac6ddb2e5bc7e848feacf55d18255603f41add6f269 extends Twig_Template
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
        $__internal_16e2504b7000f31715a7209e87626a6258254b9c6f9e757afed0d0338ed967a5 = $this->env->getExtension("native_profiler");
        $__internal_16e2504b7000f31715a7209e87626a6258254b9c6f9e757afed0d0338ed967a5->enter($__internal_16e2504b7000f31715a7209e87626a6258254b9c6f9e757afed0d0338ed967a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_16e2504b7000f31715a7209e87626a6258254b9c6f9e757afed0d0338ed967a5->leave($__internal_16e2504b7000f31715a7209e87626a6258254b9c6f9e757afed0d0338ed967a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
