<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6399db4717f35d802cdaaf3b56abbfb155b994b28bdde30b70d6d8161000f6ce extends Twig_Template
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
        $__internal_5c3ae0f3503f82d4787e3a368e426c051b7aaee635e335c32be2294c167043f9 = $this->env->getExtension("native_profiler");
        $__internal_5c3ae0f3503f82d4787e3a368e426c051b7aaee635e335c32be2294c167043f9->enter($__internal_5c3ae0f3503f82d4787e3a368e426c051b7aaee635e335c32be2294c167043f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_5c3ae0f3503f82d4787e3a368e426c051b7aaee635e335c32be2294c167043f9->leave($__internal_5c3ae0f3503f82d4787e3a368e426c051b7aaee635e335c32be2294c167043f9_prof);

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
