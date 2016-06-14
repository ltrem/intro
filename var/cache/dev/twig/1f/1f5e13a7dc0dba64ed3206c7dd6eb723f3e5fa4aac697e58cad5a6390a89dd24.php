<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1f93212ef7e23276f34e481886ae861d25ab74f3d02f8e2af853d33275ccec69 extends Twig_Template
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
        $__internal_2fdea1c5c3a917d2ef3432fa4905f283f580a9eba899af24537df332c0bcc800 = $this->env->getExtension("native_profiler");
        $__internal_2fdea1c5c3a917d2ef3432fa4905f283f580a9eba899af24537df332c0bcc800->enter($__internal_2fdea1c5c3a917d2ef3432fa4905f283f580a9eba899af24537df332c0bcc800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2fdea1c5c3a917d2ef3432fa4905f283f580a9eba899af24537df332c0bcc800->leave($__internal_2fdea1c5c3a917d2ef3432fa4905f283f580a9eba899af24537df332c0bcc800_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c8323353b757039605b5f1afd4c10518bb479b9fb7a91d1a64d67f534efe458 = $this->env->getExtension("native_profiler");
        $__internal_3c8323353b757039605b5f1afd4c10518bb479b9fb7a91d1a64d67f534efe458->enter($__internal_3c8323353b757039605b5f1afd4c10518bb479b9fb7a91d1a64d67f534efe458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c8323353b757039605b5f1afd4c10518bb479b9fb7a91d1a64d67f534efe458->leave($__internal_3c8323353b757039605b5f1afd4c10518bb479b9fb7a91d1a64d67f534efe458_prof);

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
