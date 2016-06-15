<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_957c387c4ea036c849625ca3fe87223c47827045d49da351a1d24b65079c403b extends Twig_Template
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
        $__internal_1959f8f552215a6e5787d82f7813a2687868b8794cad7403390d005c55a0332d = $this->env->getExtension("native_profiler");
        $__internal_1959f8f552215a6e5787d82f7813a2687868b8794cad7403390d005c55a0332d->enter($__internal_1959f8f552215a6e5787d82f7813a2687868b8794cad7403390d005c55a0332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_1959f8f552215a6e5787d82f7813a2687868b8794cad7403390d005c55a0332d->leave($__internal_1959f8f552215a6e5787d82f7813a2687868b8794cad7403390d005c55a0332d_prof);

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
