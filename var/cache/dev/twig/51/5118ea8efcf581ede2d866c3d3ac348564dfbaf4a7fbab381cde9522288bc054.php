<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c6757f369f8996f0bfa1c8213ce79c5187880b10bcf7ba396ba2a4953f4ca90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_14ac52e191e2b9f042dcf7cdf811c7fd3dad07daf043aab484acf6740588d5ef = $this->env->getExtension("native_profiler");
        $__internal_14ac52e191e2b9f042dcf7cdf811c7fd3dad07daf043aab484acf6740588d5ef->enter($__internal_14ac52e191e2b9f042dcf7cdf811c7fd3dad07daf043aab484acf6740588d5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14ac52e191e2b9f042dcf7cdf811c7fd3dad07daf043aab484acf6740588d5ef->leave($__internal_14ac52e191e2b9f042dcf7cdf811c7fd3dad07daf043aab484acf6740588d5ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adfc4bae103eb721bf9031e95bba58c931a1d83ba7805a240cdacc4d380f85ef = $this->env->getExtension("native_profiler");
        $__internal_adfc4bae103eb721bf9031e95bba58c931a1d83ba7805a240cdacc4d380f85ef->enter($__internal_adfc4bae103eb721bf9031e95bba58c931a1d83ba7805a240cdacc4d380f85ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_adfc4bae103eb721bf9031e95bba58c931a1d83ba7805a240cdacc4d380f85ef->leave($__internal_adfc4bae103eb721bf9031e95bba58c931a1d83ba7805a240cdacc4d380f85ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
