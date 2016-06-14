<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9358230ffb22ed5eb8273a3640bd6a4d45faf6163b76bbfc05926717558aa35c extends Twig_Template
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
        $__internal_608a01304c0d2f3562ae3ac9813d7a3b95e6de4ba2282049ab69ab35c33ce97a = $this->env->getExtension("native_profiler");
        $__internal_608a01304c0d2f3562ae3ac9813d7a3b95e6de4ba2282049ab69ab35c33ce97a->enter($__internal_608a01304c0d2f3562ae3ac9813d7a3b95e6de4ba2282049ab69ab35c33ce97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_608a01304c0d2f3562ae3ac9813d7a3b95e6de4ba2282049ab69ab35c33ce97a->leave($__internal_608a01304c0d2f3562ae3ac9813d7a3b95e6de4ba2282049ab69ab35c33ce97a_prof);

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
