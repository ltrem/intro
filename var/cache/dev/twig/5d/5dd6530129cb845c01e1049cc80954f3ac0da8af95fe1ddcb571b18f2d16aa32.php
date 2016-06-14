<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_989fb79256b3f5057ad6359a3f4bac07925c32bc65d64f5dfb38ea059b8daa61 extends Twig_Template
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
        $__internal_8c254b332a5b9a459197fc578615de9fba5dcf5579c8946a8cbaba40c7082101 = $this->env->getExtension("native_profiler");
        $__internal_8c254b332a5b9a459197fc578615de9fba5dcf5579c8946a8cbaba40c7082101->enter($__internal_8c254b332a5b9a459197fc578615de9fba5dcf5579c8946a8cbaba40c7082101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8c254b332a5b9a459197fc578615de9fba5dcf5579c8946a8cbaba40c7082101->leave($__internal_8c254b332a5b9a459197fc578615de9fba5dcf5579c8946a8cbaba40c7082101_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
