<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e845cc23cfed81d4a459617ce5cd36b3d3ca1bf4f1930fec691d38f8c074b5d0 extends Twig_Template
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
        $__internal_b66286df373151c8b0b9b19eab9efac1369399e36d9e35c9bc4229f2d2b2e0d4 = $this->env->getExtension("native_profiler");
        $__internal_b66286df373151c8b0b9b19eab9efac1369399e36d9e35c9bc4229f2d2b2e0d4->enter($__internal_b66286df373151c8b0b9b19eab9efac1369399e36d9e35c9bc4229f2d2b2e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b66286df373151c8b0b9b19eab9efac1369399e36d9e35c9bc4229f2d2b2e0d4->leave($__internal_b66286df373151c8b0b9b19eab9efac1369399e36d9e35c9bc4229f2d2b2e0d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
