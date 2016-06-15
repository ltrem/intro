<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3a6f38d70ac4ba03ed29ea0be750466498da88d7a449e088203f3032b6789542 extends Twig_Template
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
        $__internal_a171feac49cf5df25730b15278d488b353374a44342492eff24ac7441b291036 = $this->env->getExtension("native_profiler");
        $__internal_a171feac49cf5df25730b15278d488b353374a44342492eff24ac7441b291036->enter($__internal_a171feac49cf5df25730b15278d488b353374a44342492eff24ac7441b291036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a171feac49cf5df25730b15278d488b353374a44342492eff24ac7441b291036->leave($__internal_a171feac49cf5df25730b15278d488b353374a44342492eff24ac7441b291036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
