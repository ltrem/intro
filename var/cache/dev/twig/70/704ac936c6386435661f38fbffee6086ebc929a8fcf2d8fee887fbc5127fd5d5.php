<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d5057ac9d8a2c458dd013f10a5b1c36cb787980112cb59ff5a625cd77e38e400 extends Twig_Template
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
        $__internal_595be36fe2cfa3c6d36f6816038ede3cdc7bf98566bff646577763f12777bc48 = $this->env->getExtension("native_profiler");
        $__internal_595be36fe2cfa3c6d36f6816038ede3cdc7bf98566bff646577763f12777bc48->enter($__internal_595be36fe2cfa3c6d36f6816038ede3cdc7bf98566bff646577763f12777bc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_595be36fe2cfa3c6d36f6816038ede3cdc7bf98566bff646577763f12777bc48->leave($__internal_595be36fe2cfa3c6d36f6816038ede3cdc7bf98566bff646577763f12777bc48_prof);

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
