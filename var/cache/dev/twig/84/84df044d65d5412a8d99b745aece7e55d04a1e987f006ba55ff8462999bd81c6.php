<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6689e994367c1ec65619d17455c6cad802040ad576d51bbbcb12b83f7482c14c extends Twig_Template
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
        $__internal_4e381fc5f940343148b292299afece8100e42bd6bef065bd253225e905bb7235 = $this->env->getExtension("native_profiler");
        $__internal_4e381fc5f940343148b292299afece8100e42bd6bef065bd253225e905bb7235->enter($__internal_4e381fc5f940343148b292299afece8100e42bd6bef065bd253225e905bb7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e381fc5f940343148b292299afece8100e42bd6bef065bd253225e905bb7235->leave($__internal_4e381fc5f940343148b292299afece8100e42bd6bef065bd253225e905bb7235_prof);

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
