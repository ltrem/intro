<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c6ff94c04621bc396c46653f6cf789783833dc3f89282effb937ad553daf74a5 extends Twig_Template
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
        $__internal_d50eb602e665b0b60fb8136811d1e949a21eabfdd758e60ea70154e58590419b = $this->env->getExtension("native_profiler");
        $__internal_d50eb602e665b0b60fb8136811d1e949a21eabfdd758e60ea70154e58590419b->enter($__internal_d50eb602e665b0b60fb8136811d1e949a21eabfdd758e60ea70154e58590419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d50eb602e665b0b60fb8136811d1e949a21eabfdd758e60ea70154e58590419b->leave($__internal_d50eb602e665b0b60fb8136811d1e949a21eabfdd758e60ea70154e58590419b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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