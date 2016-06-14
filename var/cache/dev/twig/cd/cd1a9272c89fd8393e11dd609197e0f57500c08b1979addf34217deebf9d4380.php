<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c40b5bc797e51bac8a59adaf964af37622ebffedf42e1d43038452c6cc2534a2 extends Twig_Template
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
        $__internal_b0ade6e40a09d167dc47e8266675d1f7f54effbad2ce1c80e730b21be4f5498e = $this->env->getExtension("native_profiler");
        $__internal_b0ade6e40a09d167dc47e8266675d1f7f54effbad2ce1c80e730b21be4f5498e->enter($__internal_b0ade6e40a09d167dc47e8266675d1f7f54effbad2ce1c80e730b21be4f5498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b0ade6e40a09d167dc47e8266675d1f7f54effbad2ce1c80e730b21be4f5498e->leave($__internal_b0ade6e40a09d167dc47e8266675d1f7f54effbad2ce1c80e730b21be4f5498e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
