<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a7f98b3bc10801b791753136bfa24870c28b3b2168ad1e56aa85dd54e5e5f211 extends Twig_Template
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
        $__internal_993319d3178591a5aca83a9aa4dfb31a8a4887faa9421dcbe78b58812548d6c8 = $this->env->getExtension("native_profiler");
        $__internal_993319d3178591a5aca83a9aa4dfb31a8a4887faa9421dcbe78b58812548d6c8->enter($__internal_993319d3178591a5aca83a9aa4dfb31a8a4887faa9421dcbe78b58812548d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_993319d3178591a5aca83a9aa4dfb31a8a4887faa9421dcbe78b58812548d6c8->leave($__internal_993319d3178591a5aca83a9aa4dfb31a8a4887faa9421dcbe78b58812548d6c8_prof);

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
