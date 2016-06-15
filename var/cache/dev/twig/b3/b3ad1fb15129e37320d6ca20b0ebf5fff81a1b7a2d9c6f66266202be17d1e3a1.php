<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6d0169e6c4935ae91baca51e9939ce53ca48df4ae2ed51f8a23866440d5ffcb1 extends Twig_Template
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
        $__internal_d51349f24dbb567d7c352deea3ddafc71379e69c9bfa1fd8ce050a256fe33839 = $this->env->getExtension("native_profiler");
        $__internal_d51349f24dbb567d7c352deea3ddafc71379e69c9bfa1fd8ce050a256fe33839->enter($__internal_d51349f24dbb567d7c352deea3ddafc71379e69c9bfa1fd8ce050a256fe33839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d51349f24dbb567d7c352deea3ddafc71379e69c9bfa1fd8ce050a256fe33839->leave($__internal_d51349f24dbb567d7c352deea3ddafc71379e69c9bfa1fd8ce050a256fe33839_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
