<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_365fd55563ab96a96129d827344aba38785bf5ef123d19f9cbcec85a08a9b7fb extends Twig_Template
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
        $__internal_0061c865cabcf824f4c2e768d720348515bf47edaf4934687fb0278ada042bd6 = $this->env->getExtension("native_profiler");
        $__internal_0061c865cabcf824f4c2e768d720348515bf47edaf4934687fb0278ada042bd6->enter($__internal_0061c865cabcf824f4c2e768d720348515bf47edaf4934687fb0278ada042bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0061c865cabcf824f4c2e768d720348515bf47edaf4934687fb0278ada042bd6->leave($__internal_0061c865cabcf824f4c2e768d720348515bf47edaf4934687fb0278ada042bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
