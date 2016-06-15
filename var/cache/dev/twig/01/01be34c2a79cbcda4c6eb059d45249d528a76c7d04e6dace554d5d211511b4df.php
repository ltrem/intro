<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fe52762477d44593708b1c2fc87b60feaee62c24300f9e3326aa146b0876df7f extends Twig_Template
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
        $__internal_52dd10e813a7da18ab2537a28e3469f8c6d6e7c5400a5fd3938ff423ef6337f5 = $this->env->getExtension("native_profiler");
        $__internal_52dd10e813a7da18ab2537a28e3469f8c6d6e7c5400a5fd3938ff423ef6337f5->enter($__internal_52dd10e813a7da18ab2537a28e3469f8c6d6e7c5400a5fd3938ff423ef6337f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_52dd10e813a7da18ab2537a28e3469f8c6d6e7c5400a5fd3938ff423ef6337f5->leave($__internal_52dd10e813a7da18ab2537a28e3469f8c6d6e7c5400a5fd3938ff423ef6337f5_prof);

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
