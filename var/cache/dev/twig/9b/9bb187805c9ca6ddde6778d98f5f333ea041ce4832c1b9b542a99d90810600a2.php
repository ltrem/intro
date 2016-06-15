<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ae4dd7bf48fa5e83ccf86e6bd3b7ea708a4af526d9811bc21da744dccfa0075b extends Twig_Template
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
        $__internal_93ba910d371d4c12cb1e5f45f133832e97bb983ed394484a0f04b4cb7f8a4418 = $this->env->getExtension("native_profiler");
        $__internal_93ba910d371d4c12cb1e5f45f133832e97bb983ed394484a0f04b4cb7f8a4418->enter($__internal_93ba910d371d4c12cb1e5f45f133832e97bb983ed394484a0f04b4cb7f8a4418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_93ba910d371d4c12cb1e5f45f133832e97bb983ed394484a0f04b4cb7f8a4418->leave($__internal_93ba910d371d4c12cb1e5f45f133832e97bb983ed394484a0f04b4cb7f8a4418_prof);

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
