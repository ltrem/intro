<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_39995d92505d2eddfbf45dab2eda9532017a763c2729690391eab4b72823aef6 extends Twig_Template
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
        $__internal_c3ac30fedac006f765a4b48e09bc09fc5c4a65e6667d81cddec956d4352f99b8 = $this->env->getExtension("native_profiler");
        $__internal_c3ac30fedac006f765a4b48e09bc09fc5c4a65e6667d81cddec956d4352f99b8->enter($__internal_c3ac30fedac006f765a4b48e09bc09fc5c4a65e6667d81cddec956d4352f99b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c3ac30fedac006f765a4b48e09bc09fc5c4a65e6667d81cddec956d4352f99b8->leave($__internal_c3ac30fedac006f765a4b48e09bc09fc5c4a65e6667d81cddec956d4352f99b8_prof);

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
