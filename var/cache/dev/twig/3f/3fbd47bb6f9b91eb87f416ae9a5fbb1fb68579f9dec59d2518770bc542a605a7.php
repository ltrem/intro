<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ce7c88fab0195c89585788f3920ae295232d6dcfcc95254f5e21fb003a3c81df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f58dae6ae251ef36ac756b364a73fca20d3baf287cff20f05e2adcb009cba2b1 = $this->env->getExtension("native_profiler");
        $__internal_f58dae6ae251ef36ac756b364a73fca20d3baf287cff20f05e2adcb009cba2b1->enter($__internal_f58dae6ae251ef36ac756b364a73fca20d3baf287cff20f05e2adcb009cba2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58dae6ae251ef36ac756b364a73fca20d3baf287cff20f05e2adcb009cba2b1->leave($__internal_f58dae6ae251ef36ac756b364a73fca20d3baf287cff20f05e2adcb009cba2b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df00e545da08725c581ecfd6998ca57a547386a1074a7e941ca14338c8622872 = $this->env->getExtension("native_profiler");
        $__internal_df00e545da08725c581ecfd6998ca57a547386a1074a7e941ca14338c8622872->enter($__internal_df00e545da08725c581ecfd6998ca57a547386a1074a7e941ca14338c8622872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_df00e545da08725c581ecfd6998ca57a547386a1074a7e941ca14338c8622872->leave($__internal_df00e545da08725c581ecfd6998ca57a547386a1074a7e941ca14338c8622872_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
