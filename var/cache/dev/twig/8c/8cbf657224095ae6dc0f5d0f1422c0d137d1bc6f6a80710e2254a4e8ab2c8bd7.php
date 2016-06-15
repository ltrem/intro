<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_94754e33c920512a2ab5f1fe287e98af1ae690b1562120bf75411855f0385e17 extends Twig_Template
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
        $__internal_702aa573761dbeb789acdf2d557e5bc9cf4fe9276a2566e20bacdb574e7312d9 = $this->env->getExtension("native_profiler");
        $__internal_702aa573761dbeb789acdf2d557e5bc9cf4fe9276a2566e20bacdb574e7312d9->enter($__internal_702aa573761dbeb789acdf2d557e5bc9cf4fe9276a2566e20bacdb574e7312d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_702aa573761dbeb789acdf2d557e5bc9cf4fe9276a2566e20bacdb574e7312d9->leave($__internal_702aa573761dbeb789acdf2d557e5bc9cf4fe9276a2566e20bacdb574e7312d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
