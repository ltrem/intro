<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a071a199c78ef86c3ba567643499d56013816fb60d0dc1bd4c2a692b1d9c99c1 extends Twig_Template
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
        $__internal_81bad646530bdbec40c37a43206b3158f52888d774fa0d850b18938dfcdaef46 = $this->env->getExtension("native_profiler");
        $__internal_81bad646530bdbec40c37a43206b3158f52888d774fa0d850b18938dfcdaef46->enter($__internal_81bad646530bdbec40c37a43206b3158f52888d774fa0d850b18938dfcdaef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_81bad646530bdbec40c37a43206b3158f52888d774fa0d850b18938dfcdaef46->leave($__internal_81bad646530bdbec40c37a43206b3158f52888d774fa0d850b18938dfcdaef46_prof);

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
