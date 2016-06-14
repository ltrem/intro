<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9b5cecf90dfb512a47370cc8b03e91ad58411a0862f0f5b4e6f0e808e401063e extends Twig_Template
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
        $__internal_0793ea422e5258e771b117cbe5c314b0418624a8e2b2b85a2c2856930105b5fc = $this->env->getExtension("native_profiler");
        $__internal_0793ea422e5258e771b117cbe5c314b0418624a8e2b2b85a2c2856930105b5fc->enter($__internal_0793ea422e5258e771b117cbe5c314b0418624a8e2b2b85a2c2856930105b5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0793ea422e5258e771b117cbe5c314b0418624a8e2b2b85a2c2856930105b5fc->leave($__internal_0793ea422e5258e771b117cbe5c314b0418624a8e2b2b85a2c2856930105b5fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
