<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_39b9cfcb0fa010312dc3b5a2ac847963a993a45dbac9a3d4bcef461aa9715769 extends Twig_Template
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
        $__internal_1f6d43af34baf8035135046b3928b30e29fa87385b86e1a5fae70b5c25dd3f55 = $this->env->getExtension("native_profiler");
        $__internal_1f6d43af34baf8035135046b3928b30e29fa87385b86e1a5fae70b5c25dd3f55->enter($__internal_1f6d43af34baf8035135046b3928b30e29fa87385b86e1a5fae70b5c25dd3f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1f6d43af34baf8035135046b3928b30e29fa87385b86e1a5fae70b5c25dd3f55->leave($__internal_1f6d43af34baf8035135046b3928b30e29fa87385b86e1a5fae70b5c25dd3f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
