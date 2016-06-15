<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dfb052b572dc96b9a521c4a4c6ca5576263423f9329b0371a5144cdc495928a5 extends Twig_Template
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
        $__internal_41428f383f1cacc210d17fd005e8f0aa0f53cb038ecb5a95a270eb9b5cddf6de = $this->env->getExtension("native_profiler");
        $__internal_41428f383f1cacc210d17fd005e8f0aa0f53cb038ecb5a95a270eb9b5cddf6de->enter($__internal_41428f383f1cacc210d17fd005e8f0aa0f53cb038ecb5a95a270eb9b5cddf6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_41428f383f1cacc210d17fd005e8f0aa0f53cb038ecb5a95a270eb9b5cddf6de->leave($__internal_41428f383f1cacc210d17fd005e8f0aa0f53cb038ecb5a95a270eb9b5cddf6de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
