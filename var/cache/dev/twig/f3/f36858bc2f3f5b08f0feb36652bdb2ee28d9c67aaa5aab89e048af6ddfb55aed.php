<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_441db07baacd9b04526a607826de8a1a3e741505d64f0b20e66c201d92ad0426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1533ecf75683cf4286de0bf33db6bb9935cd2a032e478833e702a886e94f7a88 = $this->env->getExtension("native_profiler");
        $__internal_1533ecf75683cf4286de0bf33db6bb9935cd2a032e478833e702a886e94f7a88->enter($__internal_1533ecf75683cf4286de0bf33db6bb9935cd2a032e478833e702a886e94f7a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1533ecf75683cf4286de0bf33db6bb9935cd2a032e478833e702a886e94f7a88->leave($__internal_1533ecf75683cf4286de0bf33db6bb9935cd2a032e478833e702a886e94f7a88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7325143c7fc7f13dd8fd8d2de7d7ca3d725118b2339a3a09d10f92aad9b72932 = $this->env->getExtension("native_profiler");
        $__internal_7325143c7fc7f13dd8fd8d2de7d7ca3d725118b2339a3a09d10f92aad9b72932->enter($__internal_7325143c7fc7f13dd8fd8d2de7d7ca3d725118b2339a3a09d10f92aad9b72932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7325143c7fc7f13dd8fd8d2de7d7ca3d725118b2339a3a09d10f92aad9b72932->leave($__internal_7325143c7fc7f13dd8fd8d2de7d7ca3d725118b2339a3a09d10f92aad9b72932_prof);

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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
