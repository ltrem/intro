<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_375a1f85bcdc37433217289ff6f319789e6e6411f5c0163b12f15ef979b3751c extends Twig_Template
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
        $__internal_d1d70b91a49f641f6f0740b9c6c34f8fc8cf18cd897a8989e612112332ea98e9 = $this->env->getExtension("native_profiler");
        $__internal_d1d70b91a49f641f6f0740b9c6c34f8fc8cf18cd897a8989e612112332ea98e9->enter($__internal_d1d70b91a49f641f6f0740b9c6c34f8fc8cf18cd897a8989e612112332ea98e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d1d70b91a49f641f6f0740b9c6c34f8fc8cf18cd897a8989e612112332ea98e9->leave($__internal_d1d70b91a49f641f6f0740b9c6c34f8fc8cf18cd897a8989e612112332ea98e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
