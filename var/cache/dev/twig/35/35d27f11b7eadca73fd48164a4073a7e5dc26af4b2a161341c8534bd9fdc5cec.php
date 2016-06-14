<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_4707fd0b1640977ec1bbed30c3cbc944dcec6d0025881ff06801aca034191e4f extends Twig_Template
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
        $__internal_eb832a539d8e5d4eb75a00898e139aa47f0412fc9c540353c7acc8b3106b2cfe = $this->env->getExtension("native_profiler");
        $__internal_eb832a539d8e5d4eb75a00898e139aa47f0412fc9c540353c7acc8b3106b2cfe->enter($__internal_eb832a539d8e5d4eb75a00898e139aa47f0412fc9c540353c7acc8b3106b2cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_eb832a539d8e5d4eb75a00898e139aa47f0412fc9c540353c7acc8b3106b2cfe->leave($__internal_eb832a539d8e5d4eb75a00898e139aa47f0412fc9c540353c7acc8b3106b2cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
