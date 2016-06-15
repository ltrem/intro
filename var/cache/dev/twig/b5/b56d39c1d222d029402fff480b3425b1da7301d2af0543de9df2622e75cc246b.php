<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9556966c3a1f16d350255be9ebb763a763ac36087a18ecc84d0a2850b84616d6 extends Twig_Template
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
        $__internal_5a3596d5460ab1bbe1fbdb5b75730019f1295dc5e94af69f1e71e246fbbb492b = $this->env->getExtension("native_profiler");
        $__internal_5a3596d5460ab1bbe1fbdb5b75730019f1295dc5e94af69f1e71e246fbbb492b->enter($__internal_5a3596d5460ab1bbe1fbdb5b75730019f1295dc5e94af69f1e71e246fbbb492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5a3596d5460ab1bbe1fbdb5b75730019f1295dc5e94af69f1e71e246fbbb492b->leave($__internal_5a3596d5460ab1bbe1fbdb5b75730019f1295dc5e94af69f1e71e246fbbb492b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
