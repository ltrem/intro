<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c9461fc6d3de910d228d599422d3109f0f7e61e77ee02e7bb36d63c377e9c0f4 extends Twig_Template
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
        $__internal_fe62e5b90b084c3895777d687cddce4f98228baa86a5ad628572a87933e9a61f = $this->env->getExtension("native_profiler");
        $__internal_fe62e5b90b084c3895777d687cddce4f98228baa86a5ad628572a87933e9a61f->enter($__internal_fe62e5b90b084c3895777d687cddce4f98228baa86a5ad628572a87933e9a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fe62e5b90b084c3895777d687cddce4f98228baa86a5ad628572a87933e9a61f->leave($__internal_fe62e5b90b084c3895777d687cddce4f98228baa86a5ad628572a87933e9a61f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
