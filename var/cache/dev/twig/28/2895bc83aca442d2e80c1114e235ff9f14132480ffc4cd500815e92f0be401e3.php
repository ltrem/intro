<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6e7abf4b009e1b2eb85316f8e6b9e50d2a7964bf73e5c416db1fec3724be1d50 extends Twig_Template
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
        $__internal_0d52be68f9c60fa906c3ea67238dec15331abc1239742d48e500923da0eaa183 = $this->env->getExtension("native_profiler");
        $__internal_0d52be68f9c60fa906c3ea67238dec15331abc1239742d48e500923da0eaa183->enter($__internal_0d52be68f9c60fa906c3ea67238dec15331abc1239742d48e500923da0eaa183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0d52be68f9c60fa906c3ea67238dec15331abc1239742d48e500923da0eaa183->leave($__internal_0d52be68f9c60fa906c3ea67238dec15331abc1239742d48e500923da0eaa183_prof);

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
