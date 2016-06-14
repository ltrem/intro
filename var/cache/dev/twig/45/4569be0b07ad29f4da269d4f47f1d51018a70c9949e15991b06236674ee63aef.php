<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8d35221edba81ae8dc509c7b8794f70dd7e2ea698448a4459e017899ce853bd2 extends Twig_Template
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
        $__internal_9f3c8f0d916991330d62a56ae445c4848d63223706894caf3afcaa6263904d0c = $this->env->getExtension("native_profiler");
        $__internal_9f3c8f0d916991330d62a56ae445c4848d63223706894caf3afcaa6263904d0c->enter($__internal_9f3c8f0d916991330d62a56ae445c4848d63223706894caf3afcaa6263904d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9f3c8f0d916991330d62a56ae445c4848d63223706894caf3afcaa6263904d0c->leave($__internal_9f3c8f0d916991330d62a56ae445c4848d63223706894caf3afcaa6263904d0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
