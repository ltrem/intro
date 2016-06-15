<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_65c1d4700bc28abfee4825b60f24eb6f7bb446fc88c902ddb9e3c8c957776b6c extends Twig_Template
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
        $__internal_89aaf173b565dd0ff03b29aa89011521b6ae74aad91087248a5eba42fd38e289 = $this->env->getExtension("native_profiler");
        $__internal_89aaf173b565dd0ff03b29aa89011521b6ae74aad91087248a5eba42fd38e289->enter($__internal_89aaf173b565dd0ff03b29aa89011521b6ae74aad91087248a5eba42fd38e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_89aaf173b565dd0ff03b29aa89011521b6ae74aad91087248a5eba42fd38e289->leave($__internal_89aaf173b565dd0ff03b29aa89011521b6ae74aad91087248a5eba42fd38e289_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
