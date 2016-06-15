<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cd22b32cd5d315818f5b531d61ee09e5cc2d42d512f6690816eacd75b97bf4ad extends Twig_Template
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
        $__internal_03b67016f8cf7b8b9955caa84801c2d455a6c4d06675d4acfbbf7d348e5f5c2a = $this->env->getExtension("native_profiler");
        $__internal_03b67016f8cf7b8b9955caa84801c2d455a6c4d06675d4acfbbf7d348e5f5c2a->enter($__internal_03b67016f8cf7b8b9955caa84801c2d455a6c4d06675d4acfbbf7d348e5f5c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_03b67016f8cf7b8b9955caa84801c2d455a6c4d06675d4acfbbf7d348e5f5c2a->leave($__internal_03b67016f8cf7b8b9955caa84801c2d455a6c4d06675d4acfbbf7d348e5f5c2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
