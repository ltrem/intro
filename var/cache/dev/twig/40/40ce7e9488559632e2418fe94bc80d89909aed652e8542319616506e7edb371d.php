<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e72fbaf9a7589ca460a90bbe4608604d439cb1a2ff08925dbed6406ae29a2865 extends Twig_Template
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
        $__internal_227e8a902360e0323de2213eeb96cff1db1cb4b834c0b7f6a9b5f171fd24d2fc = $this->env->getExtension("native_profiler");
        $__internal_227e8a902360e0323de2213eeb96cff1db1cb4b834c0b7f6a9b5f171fd24d2fc->enter($__internal_227e8a902360e0323de2213eeb96cff1db1cb4b834c0b7f6a9b5f171fd24d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_227e8a902360e0323de2213eeb96cff1db1cb4b834c0b7f6a9b5f171fd24d2fc->leave($__internal_227e8a902360e0323de2213eeb96cff1db1cb4b834c0b7f6a9b5f171fd24d2fc_prof);

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
