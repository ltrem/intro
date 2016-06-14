<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8de749713e9468162c664dd30625e7067ae2c8f05607e9498d458bbba86dda7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_855ba49fc435e7c05970450fef6f8c0c40b33928e5a7525872b4d031435fd8d2 = $this->env->getExtension("native_profiler");
        $__internal_855ba49fc435e7c05970450fef6f8c0c40b33928e5a7525872b4d031435fd8d2->enter($__internal_855ba49fc435e7c05970450fef6f8c0c40b33928e5a7525872b4d031435fd8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855ba49fc435e7c05970450fef6f8c0c40b33928e5a7525872b4d031435fd8d2->leave($__internal_855ba49fc435e7c05970450fef6f8c0c40b33928e5a7525872b4d031435fd8d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d433c47ca2b7a39b99339a11779c98867a50e851e3dedc65d484f9ff775681e = $this->env->getExtension("native_profiler");
        $__internal_6d433c47ca2b7a39b99339a11779c98867a50e851e3dedc65d484f9ff775681e->enter($__internal_6d433c47ca2b7a39b99339a11779c98867a50e851e3dedc65d484f9ff775681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_6d433c47ca2b7a39b99339a11779c98867a50e851e3dedc65d484f9ff775681e->leave($__internal_6d433c47ca2b7a39b99339a11779c98867a50e851e3dedc65d484f9ff775681e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
