<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3d84be88e01132ad27aca40dd8a8d72b9f744d613476d89f7c721ac82a780ca1 extends Twig_Template
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
        $__internal_c412fadad463e3cad94d18bfb0245ec030932d065792e735e533bd230c9416e9 = $this->env->getExtension("native_profiler");
        $__internal_c412fadad463e3cad94d18bfb0245ec030932d065792e735e533bd230c9416e9->enter($__internal_c412fadad463e3cad94d18bfb0245ec030932d065792e735e533bd230c9416e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c412fadad463e3cad94d18bfb0245ec030932d065792e735e533bd230c9416e9->leave($__internal_c412fadad463e3cad94d18bfb0245ec030932d065792e735e533bd230c9416e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
