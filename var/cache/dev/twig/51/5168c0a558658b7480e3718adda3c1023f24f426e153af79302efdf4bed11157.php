<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_56b59399a21dc1bcb53fb62a6fd962152cef55ee88ff80ac37d668c87574e5e5 extends Twig_Template
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
        $__internal_8b02643e97ab81f09ce85d547f7e6b4db5d96f6d62a26e2fd7501d5dcf57798d = $this->env->getExtension("native_profiler");
        $__internal_8b02643e97ab81f09ce85d547f7e6b4db5d96f6d62a26e2fd7501d5dcf57798d->enter($__internal_8b02643e97ab81f09ce85d547f7e6b4db5d96f6d62a26e2fd7501d5dcf57798d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8b02643e97ab81f09ce85d547f7e6b4db5d96f6d62a26e2fd7501d5dcf57798d->leave($__internal_8b02643e97ab81f09ce85d547f7e6b4db5d96f6d62a26e2fd7501d5dcf57798d_prof);

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
