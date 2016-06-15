<?php

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_8823665ba077ce0dfc5b40f1b750c611a1d4bdc1e69c39d0d3e4a1ebea3c1222 extends Twig_Template
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
        $__internal_b9592ce34f0abc85b386afda69494e92f51a96d81b1f6c1f668edfdd2b614d65 = $this->env->getExtension("native_profiler");
        $__internal_b9592ce34f0abc85b386afda69494e92f51a96d81b1f6c1f668edfdd2b614d65->enter($__internal_b9592ce34f0abc85b386afda69494e92f51a96d81b1f6c1f668edfdd2b614d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_options.html.php"));

        // line 1
        echo "<?php use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceGroupView;

\$translatorHelper = \$view['translator']; // outside of the loop for performance reasons! ?>
<?php \$formHelper = \$view['form']; ?>
<?php foreach (\$choices as \$group_label => \$choice): ?>
    <?php if (is_array(\$choice) || \$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\"<?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$group_label, array(), \$choice_translation_domain) : \$group_label) ?>\">
            <?php echo \$formHelper->block(\$form, 'choice_widget_options', array('choices' => \$choice)) ?>
        </optgroup>
    <?php else: ?>
        <option value=\"<?php echo \$view->escape(\$choice->value) ?>\" <?php echo \$view['form']->block(\$form, 'attributes', array('attr' => \$choice->attr)) ?><?php if (\$is_selected(\$choice->value, \$value)): ?> selected=\"selected\"<?php endif?>><?php echo \$view->escape(false !== \$choice_translation_domain ? \$translatorHelper->trans(\$choice->label, array(), \$choice_translation_domain) : \$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b9592ce34f0abc85b386afda69494e92f51a96d81b1f6c1f668edfdd2b614d65->leave($__internal_b9592ce34f0abc85b386afda69494e92f51a96d81b1f6c1f668edfdd2b614d65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php use Symfony\Component\Form\ChoiceList\View\ChoiceGroupView;*/
/* */
/* $translatorHelper = $view['translator']; // outside of the loop for performance reasons! ?>*/
/* <?php $formHelper = $view['form']; ?>*/
/* <?php foreach ($choices as $group_label => $choice): ?>*/
/*     <?php if (is_array($choice) || $choice instanceof ChoiceGroupView): ?>*/
/*         <optgroup label="<?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($group_label, array(), $choice_translation_domain) : $group_label) ?>">*/
/*             <?php echo $formHelper->block($form, 'choice_widget_options', array('choices' => $choice)) ?>*/
/*         </optgroup>*/
/*     <?php else: ?>*/
/*         <option value="<?php echo $view->escape($choice->value) ?>" <?php echo $view['form']->block($form, 'attributes', array('attr' => $choice->attr)) ?><?php if ($is_selected($choice->value, $value)): ?> selected="selected"<?php endif?>><?php echo $view->escape(false !== $choice_translation_domain ? $translatorHelper->trans($choice->label, array(), $choice_translation_domain) : $choice->label) ?></option>*/
/*     <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
