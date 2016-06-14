<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e8cdc40f52c3417ce9cd888508d46c8f6804cff3191b19c679a6bd08cad836f1 extends Twig_Template
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
        $__internal_5d089a3e6ce2e44ce61b98b5c059d3886cc7ef589dbd4ce9f4b3e9e8ba0f6047 = $this->env->getExtension("native_profiler");
        $__internal_5d089a3e6ce2e44ce61b98b5c059d3886cc7ef589dbd4ce9f4b3e9e8ba0f6047->enter($__internal_5d089a3e6ce2e44ce61b98b5c059d3886cc7ef589dbd4ce9f4b3e9e8ba0f6047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5d089a3e6ce2e44ce61b98b5c059d3886cc7ef589dbd4ce9f4b3e9e8ba0f6047->leave($__internal_5d089a3e6ce2e44ce61b98b5c059d3886cc7ef589dbd4ce9f4b3e9e8ba0f6047_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
