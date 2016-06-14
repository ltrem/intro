<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3283bcadacbee3e2cdb43d18ff63360fe6860b8dc23af7237a46730c4bb7556e extends Twig_Template
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
        $__internal_88476c8ccfe08b34265cb256eec804dc0b70f87ebdd34dfb37699e3f5c7a03bc = $this->env->getExtension("native_profiler");
        $__internal_88476c8ccfe08b34265cb256eec804dc0b70f87ebdd34dfb37699e3f5c7a03bc->enter($__internal_88476c8ccfe08b34265cb256eec804dc0b70f87ebdd34dfb37699e3f5c7a03bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_88476c8ccfe08b34265cb256eec804dc0b70f87ebdd34dfb37699e3f5c7a03bc->leave($__internal_88476c8ccfe08b34265cb256eec804dc0b70f87ebdd34dfb37699e3f5c7a03bc_prof);

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
