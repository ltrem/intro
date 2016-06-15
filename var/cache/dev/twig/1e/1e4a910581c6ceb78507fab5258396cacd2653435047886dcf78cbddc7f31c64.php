<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fbd64f6880828b44beffc7acef275390828d1e09bd1f3108d59620dfd36c44fe extends Twig_Template
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
        $__internal_aa9729c44bd43178acbbf32de6f0e7984c3559393430bdb6eecc7f7af1ba867b = $this->env->getExtension("native_profiler");
        $__internal_aa9729c44bd43178acbbf32de6f0e7984c3559393430bdb6eecc7f7af1ba867b->enter($__internal_aa9729c44bd43178acbbf32de6f0e7984c3559393430bdb6eecc7f7af1ba867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa9729c44bd43178acbbf32de6f0e7984c3559393430bdb6eecc7f7af1ba867b->leave($__internal_aa9729c44bd43178acbbf32de6f0e7984c3559393430bdb6eecc7f7af1ba867b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
