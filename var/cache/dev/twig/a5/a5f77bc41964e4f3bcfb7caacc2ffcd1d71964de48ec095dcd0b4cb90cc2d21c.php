<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_4e0fb8e4b95c75e1a37a5d39606afa31f70902b73eb1e0d566add18587c5cdac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c4502c32a23b7b05eb97b99ff3cbef6fd0757f157b5e53beaeb3dff675727df8 = $this->env->getExtension("native_profiler");
        $__internal_c4502c32a23b7b05eb97b99ff3cbef6fd0757f157b5e53beaeb3dff675727df8->enter($__internal_c4502c32a23b7b05eb97b99ff3cbef6fd0757f157b5e53beaeb3dff675727df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4502c32a23b7b05eb97b99ff3cbef6fd0757f157b5e53beaeb3dff675727df8->leave($__internal_c4502c32a23b7b05eb97b99ff3cbef6fd0757f157b5e53beaeb3dff675727df8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_278f927a2d031b8a8359c8ade0de654c8b2e47446122d2b52ad845df6bb72da2 = $this->env->getExtension("native_profiler");
        $__internal_278f927a2d031b8a8359c8ade0de654c8b2e47446122d2b52ad845df6bb72da2->enter($__internal_278f927a2d031b8a8359c8ade0de654c8b2e47446122d2b52ad845df6bb72da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_278f927a2d031b8a8359c8ade0de654c8b2e47446122d2b52ad845df6bb72da2->leave($__internal_278f927a2d031b8a8359c8ade0de654c8b2e47446122d2b52ad845df6bb72da2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
