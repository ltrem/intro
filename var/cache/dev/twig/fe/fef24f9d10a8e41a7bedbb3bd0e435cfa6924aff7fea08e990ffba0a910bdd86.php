<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2297a4caa37643e8ab5a19becf364ac911e614c2e5b1e5dc3b5c0818e081dac3 extends Twig_Template
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
        $__internal_fe9e335ab9d2879785e98faab10c112de7c5a3307bff5baf1b91ff41eeb0654f = $this->env->getExtension("native_profiler");
        $__internal_fe9e335ab9d2879785e98faab10c112de7c5a3307bff5baf1b91ff41eeb0654f->enter($__internal_fe9e335ab9d2879785e98faab10c112de7c5a3307bff5baf1b91ff41eeb0654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe9e335ab9d2879785e98faab10c112de7c5a3307bff5baf1b91ff41eeb0654f->leave($__internal_fe9e335ab9d2879785e98faab10c112de7c5a3307bff5baf1b91ff41eeb0654f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
