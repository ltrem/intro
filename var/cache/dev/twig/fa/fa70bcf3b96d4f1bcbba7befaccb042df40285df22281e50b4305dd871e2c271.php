<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f14306bf70e85b6cca089360ffdde50ac75f9f1fae34904492212967b46f9f29 extends Twig_Template
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
        $__internal_9ddbf60366dd3430b7876924f98358a9b89f80d720615a96e85379193918afe6 = $this->env->getExtension("native_profiler");
        $__internal_9ddbf60366dd3430b7876924f98358a9b89f80d720615a96e85379193918afe6->enter($__internal_9ddbf60366dd3430b7876924f98358a9b89f80d720615a96e85379193918afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9ddbf60366dd3430b7876924f98358a9b89f80d720615a96e85379193918afe6->leave($__internal_9ddbf60366dd3430b7876924f98358a9b89f80d720615a96e85379193918afe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
