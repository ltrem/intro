<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b30c76e319684e0eb32028a99ac4c6c50ad1fb2f76ab090630f17cd5ab87d084 extends Twig_Template
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
        $__internal_2edb67e165998c344f01164a40752a7bf2b8f2ed64caf4951361816e6efe14f1 = $this->env->getExtension("native_profiler");
        $__internal_2edb67e165998c344f01164a40752a7bf2b8f2ed64caf4951361816e6efe14f1->enter($__internal_2edb67e165998c344f01164a40752a7bf2b8f2ed64caf4951361816e6efe14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2edb67e165998c344f01164a40752a7bf2b8f2ed64caf4951361816e6efe14f1->leave($__internal_2edb67e165998c344f01164a40752a7bf2b8f2ed64caf4951361816e6efe14f1_prof);

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
