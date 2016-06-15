<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4e320c660d994cec51d6ad13901029aa0f61d5a2648463a4c09250dda4331f6e extends Twig_Template
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
        $__internal_3d40eb1888bf3060ec720931b624dbfb33117ec23a5ea9e13e821418520ea3f4 = $this->env->getExtension("native_profiler");
        $__internal_3d40eb1888bf3060ec720931b624dbfb33117ec23a5ea9e13e821418520ea3f4->enter($__internal_3d40eb1888bf3060ec720931b624dbfb33117ec23a5ea9e13e821418520ea3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3d40eb1888bf3060ec720931b624dbfb33117ec23a5ea9e13e821418520ea3f4->leave($__internal_3d40eb1888bf3060ec720931b624dbfb33117ec23a5ea9e13e821418520ea3f4_prof);

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
