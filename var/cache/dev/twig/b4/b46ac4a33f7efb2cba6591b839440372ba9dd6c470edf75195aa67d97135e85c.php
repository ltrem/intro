<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a9c687e8ef8088e54aedc2022fbd351da0f4be4087b6b8c995f7f1188587275 extends Twig_Template
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
        $__internal_5ccdb655d5187eb02734870c3f63c51f515db6c3096285b22f9ac324c999e3f3 = $this->env->getExtension("native_profiler");
        $__internal_5ccdb655d5187eb02734870c3f63c51f515db6c3096285b22f9ac324c999e3f3->enter($__internal_5ccdb655d5187eb02734870c3f63c51f515db6c3096285b22f9ac324c999e3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5ccdb655d5187eb02734870c3f63c51f515db6c3096285b22f9ac324c999e3f3->leave($__internal_5ccdb655d5187eb02734870c3f63c51f515db6c3096285b22f9ac324c999e3f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
