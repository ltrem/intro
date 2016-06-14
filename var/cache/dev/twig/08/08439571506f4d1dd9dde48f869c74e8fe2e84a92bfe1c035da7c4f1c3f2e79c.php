<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2c6617f1b022aab3fd87b36c54a590d59fe23550f9372908cc28db8717316788 extends Twig_Template
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
        $__internal_47c69cae52f830631927ecfba81707e716702d401ae719aab31f7e70f41c0637 = $this->env->getExtension("native_profiler");
        $__internal_47c69cae52f830631927ecfba81707e716702d401ae719aab31f7e70f41c0637->enter($__internal_47c69cae52f830631927ecfba81707e716702d401ae719aab31f7e70f41c0637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_47c69cae52f830631927ecfba81707e716702d401ae719aab31f7e70f41c0637->leave($__internal_47c69cae52f830631927ecfba81707e716702d401ae719aab31f7e70f41c0637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
