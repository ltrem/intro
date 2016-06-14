<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_75229c3873081458b5f212342bb0d397874e7201ec1084347073700b16d21760 extends Twig_Template
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
        $__internal_76446dff7c7c2cc6f8894a38c4f84a296445b4e3de16269da01fc578b53eca04 = $this->env->getExtension("native_profiler");
        $__internal_76446dff7c7c2cc6f8894a38c4f84a296445b4e3de16269da01fc578b53eca04->enter($__internal_76446dff7c7c2cc6f8894a38c4f84a296445b4e3de16269da01fc578b53eca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_76446dff7c7c2cc6f8894a38c4f84a296445b4e3de16269da01fc578b53eca04->leave($__internal_76446dff7c7c2cc6f8894a38c4f84a296445b4e3de16269da01fc578b53eca04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
