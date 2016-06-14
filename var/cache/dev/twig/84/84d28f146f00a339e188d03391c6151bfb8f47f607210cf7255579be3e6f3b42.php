<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_348113b89847cf8f9d2fc888b6f9fd8550d3e5f0fc9277a9df85c7a431799b7b extends Twig_Template
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
        $__internal_a504f7870211b0656951e8c716fd20bcfe710f9baa2e5e827adae3937d0048a9 = $this->env->getExtension("native_profiler");
        $__internal_a504f7870211b0656951e8c716fd20bcfe710f9baa2e5e827adae3937d0048a9->enter($__internal_a504f7870211b0656951e8c716fd20bcfe710f9baa2e5e827adae3937d0048a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a504f7870211b0656951e8c716fd20bcfe710f9baa2e5e827adae3937d0048a9->leave($__internal_a504f7870211b0656951e8c716fd20bcfe710f9baa2e5e827adae3937d0048a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
