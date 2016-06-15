<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f7df1a043236cc30994bc07d07a16faa34910cfa5602701fa71c41c3fc3f1b3f extends Twig_Template
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
        $__internal_cc66620f0abeda258c9a7e1aa9bb7a27ad51b2f4f60fde77899b68fb4a691e0a = $this->env->getExtension("native_profiler");
        $__internal_cc66620f0abeda258c9a7e1aa9bb7a27ad51b2f4f60fde77899b68fb4a691e0a->enter($__internal_cc66620f0abeda258c9a7e1aa9bb7a27ad51b2f4f60fde77899b68fb4a691e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cc66620f0abeda258c9a7e1aa9bb7a27ad51b2f4f60fde77899b68fb4a691e0a->leave($__internal_cc66620f0abeda258c9a7e1aa9bb7a27ad51b2f4f60fde77899b68fb4a691e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
