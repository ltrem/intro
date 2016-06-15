<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_218591b7faf8bbedb14750e8dd303340ed3e4da242b4bd04af06974d77014730 extends Twig_Template
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
        $__internal_0fc457602170688a75d0969bc2f145db1d92c406e49800cc2ee2ac39ceda0f7d = $this->env->getExtension("native_profiler");
        $__internal_0fc457602170688a75d0969bc2f145db1d92c406e49800cc2ee2ac39ceda0f7d->enter($__internal_0fc457602170688a75d0969bc2f145db1d92c406e49800cc2ee2ac39ceda0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0fc457602170688a75d0969bc2f145db1d92c406e49800cc2ee2ac39ceda0f7d->leave($__internal_0fc457602170688a75d0969bc2f145db1d92c406e49800cc2ee2ac39ceda0f7d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba11aec4af196bed615187d086651b2dbcec091ce7131f5b2b177e31bb508714 = $this->env->getExtension("native_profiler");
        $__internal_ba11aec4af196bed615187d086651b2dbcec091ce7131f5b2b177e31bb508714->enter($__internal_ba11aec4af196bed615187d086651b2dbcec091ce7131f5b2b177e31bb508714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ba11aec4af196bed615187d086651b2dbcec091ce7131f5b2b177e31bb508714->leave($__internal_ba11aec4af196bed615187d086651b2dbcec091ce7131f5b2b177e31bb508714_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
