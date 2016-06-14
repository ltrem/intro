<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a8f04770c922790fabb35e80c1de11f195e1b9cea2e661cd97e0908b2e4a5bfb extends Twig_Template
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
        $__internal_69fab46731ea7527194902cba432a68b7424c5af3563469ccc4f76f4e7f36177 = $this->env->getExtension("native_profiler");
        $__internal_69fab46731ea7527194902cba432a68b7424c5af3563469ccc4f76f4e7f36177->enter($__internal_69fab46731ea7527194902cba432a68b7424c5af3563469ccc4f76f4e7f36177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_69fab46731ea7527194902cba432a68b7424c5af3563469ccc4f76f4e7f36177->leave($__internal_69fab46731ea7527194902cba432a68b7424c5af3563469ccc4f76f4e7f36177_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
