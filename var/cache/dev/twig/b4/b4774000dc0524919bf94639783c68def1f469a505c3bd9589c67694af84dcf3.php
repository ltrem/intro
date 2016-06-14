<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_31955df2b9492b8df0cb174aee9d77b22d0d502185c1d9ee575d6e6c593bee80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8f9fb3db13ccbe0d44aac6a2c1113b3b14726a1b23b81b57273f27a9a32c19a5 = $this->env->getExtension("native_profiler");
        $__internal_8f9fb3db13ccbe0d44aac6a2c1113b3b14726a1b23b81b57273f27a9a32c19a5->enter($__internal_8f9fb3db13ccbe0d44aac6a2c1113b3b14726a1b23b81b57273f27a9a32c19a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f9fb3db13ccbe0d44aac6a2c1113b3b14726a1b23b81b57273f27a9a32c19a5->leave($__internal_8f9fb3db13ccbe0d44aac6a2c1113b3b14726a1b23b81b57273f27a9a32c19a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9314c03d8e9096095b33b413ae03e730eafcf38f517d6b9819703fb7fc4f995 = $this->env->getExtension("native_profiler");
        $__internal_e9314c03d8e9096095b33b413ae03e730eafcf38f517d6b9819703fb7fc4f995->enter($__internal_e9314c03d8e9096095b33b413ae03e730eafcf38f517d6b9819703fb7fc4f995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e9314c03d8e9096095b33b413ae03e730eafcf38f517d6b9819703fb7fc4f995->leave($__internal_e9314c03d8e9096095b33b413ae03e730eafcf38f517d6b9819703fb7fc4f995_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
