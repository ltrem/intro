<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5b6d1ae88cb55cbdbd6c83d62a3435be997c60a58147a03525d2452eda14e99f extends Twig_Template
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
        $__internal_4d6ffcd02f380083031635d2f025ad56d22ba58a9a2542b4596cb393d88b4408 = $this->env->getExtension("native_profiler");
        $__internal_4d6ffcd02f380083031635d2f025ad56d22ba58a9a2542b4596cb393d88b4408->enter($__internal_4d6ffcd02f380083031635d2f025ad56d22ba58a9a2542b4596cb393d88b4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4d6ffcd02f380083031635d2f025ad56d22ba58a9a2542b4596cb393d88b4408->leave($__internal_4d6ffcd02f380083031635d2f025ad56d22ba58a9a2542b4596cb393d88b4408_prof);

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
