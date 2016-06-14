<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d61ad6a6290f66045ddb6d24ff41b95eaf6e1c98a2fbfe250e86ecd70eedd51a extends Twig_Template
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
        $__internal_e3e36f07ed9d83353691554f0b55fa7b083605f75ae892e1352e5d1c32c657b9 = $this->env->getExtension("native_profiler");
        $__internal_e3e36f07ed9d83353691554f0b55fa7b083605f75ae892e1352e5d1c32c657b9->enter($__internal_e3e36f07ed9d83353691554f0b55fa7b083605f75ae892e1352e5d1c32c657b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e3e36f07ed9d83353691554f0b55fa7b083605f75ae892e1352e5d1c32c657b9->leave($__internal_e3e36f07ed9d83353691554f0b55fa7b083605f75ae892e1352e5d1c32c657b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
