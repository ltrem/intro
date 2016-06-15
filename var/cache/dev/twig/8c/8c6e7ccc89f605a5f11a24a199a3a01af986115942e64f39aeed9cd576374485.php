<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_767ff59e4040c367ec0dc78bdb3c781b883f19c1a9fee9a37ba9afc5da252f0c extends Twig_Template
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
        $__internal_1861d4dd149d5b94aa1db7b89831f992efb35cee715af45815e9435b9a55870d = $this->env->getExtension("native_profiler");
        $__internal_1861d4dd149d5b94aa1db7b89831f992efb35cee715af45815e9435b9a55870d->enter($__internal_1861d4dd149d5b94aa1db7b89831f992efb35cee715af45815e9435b9a55870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1861d4dd149d5b94aa1db7b89831f992efb35cee715af45815e9435b9a55870d->leave($__internal_1861d4dd149d5b94aa1db7b89831f992efb35cee715af45815e9435b9a55870d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
