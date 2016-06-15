<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8b550286ee205021c4fe03772bed041c44a62f7fe8b0af07484094d6aa10988f extends Twig_Template
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
        $__internal_21190c953f90820429576492aabfb56af9f3d8756f4e7c658db3837dea180025 = $this->env->getExtension("native_profiler");
        $__internal_21190c953f90820429576492aabfb56af9f3d8756f4e7c658db3837dea180025->enter($__internal_21190c953f90820429576492aabfb56af9f3d8756f4e7c658db3837dea180025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21190c953f90820429576492aabfb56af9f3d8756f4e7c658db3837dea180025->leave($__internal_21190c953f90820429576492aabfb56af9f3d8756f4e7c658db3837dea180025_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
