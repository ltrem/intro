<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ecb2ab14223d309a5a8f7cf3f56bc845d70821eb602decca189354be60892126 extends Twig_Template
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
        $__internal_fdb5ddd4b55fc61c68a2c29d6dc8c617627077f4cdbf01b633975d37d031a449 = $this->env->getExtension("native_profiler");
        $__internal_fdb5ddd4b55fc61c68a2c29d6dc8c617627077f4cdbf01b633975d37d031a449->enter($__internal_fdb5ddd4b55fc61c68a2c29d6dc8c617627077f4cdbf01b633975d37d031a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fdb5ddd4b55fc61c68a2c29d6dc8c617627077f4cdbf01b633975d37d031a449->leave($__internal_fdb5ddd4b55fc61c68a2c29d6dc8c617627077f4cdbf01b633975d37d031a449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
