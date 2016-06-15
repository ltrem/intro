<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_45fc398332a88bce1d107d070c1b432a99145df98ffb70dfbed81ca7d5c9f3c9 extends Twig_Template
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
        $__internal_f96085aafd4f07c223a9da5975c36d908e4bda4960580c38c8045c99a31c9844 = $this->env->getExtension("native_profiler");
        $__internal_f96085aafd4f07c223a9da5975c36d908e4bda4960580c38c8045c99a31c9844->enter($__internal_f96085aafd4f07c223a9da5975c36d908e4bda4960580c38c8045c99a31c9844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f96085aafd4f07c223a9da5975c36d908e4bda4960580c38c8045c99a31c9844->leave($__internal_f96085aafd4f07c223a9da5975c36d908e4bda4960580c38c8045c99a31c9844_prof);

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
