<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0678bb8d627f1677347d9011f628707e0f959d40604930825009cf4504ce7189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5e08008713c9212ffd316dff40237f01e99b86c6922522b12d0693e758a53f7 = $this->env->getExtension("native_profiler");
        $__internal_b5e08008713c9212ffd316dff40237f01e99b86c6922522b12d0693e758a53f7->enter($__internal_b5e08008713c9212ffd316dff40237f01e99b86c6922522b12d0693e758a53f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b5e08008713c9212ffd316dff40237f01e99b86c6922522b12d0693e758a53f7->leave($__internal_b5e08008713c9212ffd316dff40237f01e99b86c6922522b12d0693e758a53f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f8c8e124e426224e7566a5c98695d2b62da14d07a99107a4fc3c2295ff4e2a3 = $this->env->getExtension("native_profiler");
        $__internal_2f8c8e124e426224e7566a5c98695d2b62da14d07a99107a4fc3c2295ff4e2a3->enter($__internal_2f8c8e124e426224e7566a5c98695d2b62da14d07a99107a4fc3c2295ff4e2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f8c8e124e426224e7566a5c98695d2b62da14d07a99107a4fc3c2295ff4e2a3->leave($__internal_2f8c8e124e426224e7566a5c98695d2b62da14d07a99107a4fc3c2295ff4e2a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
