<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b8c9d537ad8d280cd366506d82da701d1ff9c9c8bb8a78c2797155850b33a9c9 extends Twig_Template
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
        $__internal_7286cb9a532e00ec0a6e37001a3ba0495bbfc01c98fd81580bd954b635f76b5f = $this->env->getExtension("native_profiler");
        $__internal_7286cb9a532e00ec0a6e37001a3ba0495bbfc01c98fd81580bd954b635f76b5f->enter($__internal_7286cb9a532e00ec0a6e37001a3ba0495bbfc01c98fd81580bd954b635f76b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7286cb9a532e00ec0a6e37001a3ba0495bbfc01c98fd81580bd954b635f76b5f->leave($__internal_7286cb9a532e00ec0a6e37001a3ba0495bbfc01c98fd81580bd954b635f76b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
