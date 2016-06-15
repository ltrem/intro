<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_efa4e12010267c17f512bdf18f467a59203e6631461ef3b76b69250053ae5b29 extends Twig_Template
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
        $__internal_2b0acdff71e1d4719d463e32c904dc52226d357148de1dd65d7827dafc074dd0 = $this->env->getExtension("native_profiler");
        $__internal_2b0acdff71e1d4719d463e32c904dc52226d357148de1dd65d7827dafc074dd0->enter($__internal_2b0acdff71e1d4719d463e32c904dc52226d357148de1dd65d7827dafc074dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2b0acdff71e1d4719d463e32c904dc52226d357148de1dd65d7827dafc074dd0->leave($__internal_2b0acdff71e1d4719d463e32c904dc52226d357148de1dd65d7827dafc074dd0_prof);

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
