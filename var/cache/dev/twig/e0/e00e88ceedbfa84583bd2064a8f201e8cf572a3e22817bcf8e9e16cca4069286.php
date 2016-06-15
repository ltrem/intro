<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5cdeaa65258bf4473e723549db24bf3cd1cde687213d6450c81bfbff7dbcc94f extends Twig_Template
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
        $__internal_a7590f36be3ea8bb17cf05936945f60400ef1a789ff7cc8a7807b36ffbc0bb79 = $this->env->getExtension("native_profiler");
        $__internal_a7590f36be3ea8bb17cf05936945f60400ef1a789ff7cc8a7807b36ffbc0bb79->enter($__internal_a7590f36be3ea8bb17cf05936945f60400ef1a789ff7cc8a7807b36ffbc0bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a7590f36be3ea8bb17cf05936945f60400ef1a789ff7cc8a7807b36ffbc0bb79->leave($__internal_a7590f36be3ea8bb17cf05936945f60400ef1a789ff7cc8a7807b36ffbc0bb79_prof);

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
