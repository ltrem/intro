<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_de396ecc0b2308814bd260b13a61d1adc2e24de2e593140b4cb23dd0ae4813a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65092e557b5d1707b444a2d38a7094ccb12c902164f0bd9f418959f879be6857 = $this->env->getExtension("native_profiler");
        $__internal_65092e557b5d1707b444a2d38a7094ccb12c902164f0bd9f418959f879be6857->enter($__internal_65092e557b5d1707b444a2d38a7094ccb12c902164f0bd9f418959f879be6857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65092e557b5d1707b444a2d38a7094ccb12c902164f0bd9f418959f879be6857->leave($__internal_65092e557b5d1707b444a2d38a7094ccb12c902164f0bd9f418959f879be6857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_622311adf93eca7cd76d2529a6510dcc78eec907d2b8cc1c25a8f5509f5598dd = $this->env->getExtension("native_profiler");
        $__internal_622311adf93eca7cd76d2529a6510dcc78eec907d2b8cc1c25a8f5509f5598dd->enter($__internal_622311adf93eca7cd76d2529a6510dcc78eec907d2b8cc1c25a8f5509f5598dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_622311adf93eca7cd76d2529a6510dcc78eec907d2b8cc1c25a8f5509f5598dd->leave($__internal_622311adf93eca7cd76d2529a6510dcc78eec907d2b8cc1c25a8f5509f5598dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock body %}*/
/* */
