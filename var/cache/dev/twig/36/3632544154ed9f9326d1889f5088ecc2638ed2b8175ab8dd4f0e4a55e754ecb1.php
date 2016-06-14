<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_086b5f8d5cfd666edb4117cea0cbc31a774a0a1a62fdb7603264f85f7bc71789 extends Twig_Template
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
        $__internal_5aaebe54eaeee588fd8c98b1a40be70e5a95df1c2ce707f90b224ba471706884 = $this->env->getExtension("native_profiler");
        $__internal_5aaebe54eaeee588fd8c98b1a40be70e5a95df1c2ce707f90b224ba471706884->enter($__internal_5aaebe54eaeee588fd8c98b1a40be70e5a95df1c2ce707f90b224ba471706884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5aaebe54eaeee588fd8c98b1a40be70e5a95df1c2ce707f90b224ba471706884->leave($__internal_5aaebe54eaeee588fd8c98b1a40be70e5a95df1c2ce707f90b224ba471706884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
