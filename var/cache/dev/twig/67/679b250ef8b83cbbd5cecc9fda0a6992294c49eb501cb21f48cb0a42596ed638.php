<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_bfb055cbe52d29ac0a35132b3273af1c8c3e2ad8ae72ac6fa3243f8d05cf5a09 extends Twig_Template
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
        $__internal_0200f1064c4986708e934c4e0995dbda96c7d95b1da8569e773fa2ad134aa44a = $this->env->getExtension("native_profiler");
        $__internal_0200f1064c4986708e934c4e0995dbda96c7d95b1da8569e773fa2ad134aa44a->enter($__internal_0200f1064c4986708e934c4e0995dbda96c7d95b1da8569e773fa2ad134aa44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0200f1064c4986708e934c4e0995dbda96c7d95b1da8569e773fa2ad134aa44a->leave($__internal_0200f1064c4986708e934c4e0995dbda96c7d95b1da8569e773fa2ad134aa44a_prof);

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
