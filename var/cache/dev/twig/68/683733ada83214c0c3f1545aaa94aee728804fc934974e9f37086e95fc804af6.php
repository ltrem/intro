<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a326456976628dbe44b83cd21a74195de0c4c17e27bb4f48452f765ee9ee1e0 extends Twig_Template
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
        $__internal_a0620f07f4ae851317b815a469f3fcb25471ab52873ebbe6d57df45143084708 = $this->env->getExtension("native_profiler");
        $__internal_a0620f07f4ae851317b815a469f3fcb25471ab52873ebbe6d57df45143084708->enter($__internal_a0620f07f4ae851317b815a469f3fcb25471ab52873ebbe6d57df45143084708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a0620f07f4ae851317b815a469f3fcb25471ab52873ebbe6d57df45143084708->leave($__internal_a0620f07f4ae851317b815a469f3fcb25471ab52873ebbe6d57df45143084708_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
