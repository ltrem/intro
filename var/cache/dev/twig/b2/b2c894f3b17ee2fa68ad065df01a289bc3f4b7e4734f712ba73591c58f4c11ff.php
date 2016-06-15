<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_be5b83c3b81a0a472fd907af413163263f18029d5ac88506075a25d31699e145 extends Twig_Template
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
        $__internal_07e7ac193b46bbacfe3602a1ff80bdf7e2b5cfc590afeed53298183339eb47d9 = $this->env->getExtension("native_profiler");
        $__internal_07e7ac193b46bbacfe3602a1ff80bdf7e2b5cfc590afeed53298183339eb47d9->enter($__internal_07e7ac193b46bbacfe3602a1ff80bdf7e2b5cfc590afeed53298183339eb47d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_07e7ac193b46bbacfe3602a1ff80bdf7e2b5cfc590afeed53298183339eb47d9->leave($__internal_07e7ac193b46bbacfe3602a1ff80bdf7e2b5cfc590afeed53298183339eb47d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
