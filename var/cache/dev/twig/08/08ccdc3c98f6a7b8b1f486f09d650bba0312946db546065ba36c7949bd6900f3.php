<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_98406b86b470c6c22db1c09eca68b97c9dec5f0896f3ee52e7d3fc42f7d12a08 extends Twig_Template
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
        $__internal_c1a3fc245ebb1ebbb14cc45212e69c4bceb9bbff1b32832f13fe8348e7283d46 = $this->env->getExtension("native_profiler");
        $__internal_c1a3fc245ebb1ebbb14cc45212e69c4bceb9bbff1b32832f13fe8348e7283d46->enter($__internal_c1a3fc245ebb1ebbb14cc45212e69c4bceb9bbff1b32832f13fe8348e7283d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c1a3fc245ebb1ebbb14cc45212e69c4bceb9bbff1b32832f13fe8348e7283d46->leave($__internal_c1a3fc245ebb1ebbb14cc45212e69c4bceb9bbff1b32832f13fe8348e7283d46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
