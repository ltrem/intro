<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_47bd68d9e487f3d6d4afa6afad976c0919f3b2314ece0f679342eb5a6cfd4871 extends Twig_Template
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
        $__internal_44de2b3b627e11b639f1216b1a63c9e47fd49da2309fd32ba0635127175204eb = $this->env->getExtension("native_profiler");
        $__internal_44de2b3b627e11b639f1216b1a63c9e47fd49da2309fd32ba0635127175204eb->enter($__internal_44de2b3b627e11b639f1216b1a63c9e47fd49da2309fd32ba0635127175204eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_44de2b3b627e11b639f1216b1a63c9e47fd49da2309fd32ba0635127175204eb->leave($__internal_44de2b3b627e11b639f1216b1a63c9e47fd49da2309fd32ba0635127175204eb_prof);

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
