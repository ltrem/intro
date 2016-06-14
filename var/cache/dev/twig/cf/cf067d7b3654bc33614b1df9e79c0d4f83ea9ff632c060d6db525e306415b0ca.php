<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cfac533f6d5cdc464c5b37b02289639301a43b886c150fe9fe81323dc74e90fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_51d36b8296e4eb50ae05ed6ba73a46f7045df59c5f7f3fe48c5e96e933e2573a = $this->env->getExtension("native_profiler");
        $__internal_51d36b8296e4eb50ae05ed6ba73a46f7045df59c5f7f3fe48c5e96e933e2573a->enter($__internal_51d36b8296e4eb50ae05ed6ba73a46f7045df59c5f7f3fe48c5e96e933e2573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d36b8296e4eb50ae05ed6ba73a46f7045df59c5f7f3fe48c5e96e933e2573a->leave($__internal_51d36b8296e4eb50ae05ed6ba73a46f7045df59c5f7f3fe48c5e96e933e2573a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49871edac10249fb1fc18c21b3e99f71b19036fcb4eb2374b07d1a191e53bac3 = $this->env->getExtension("native_profiler");
        $__internal_49871edac10249fb1fc18c21b3e99f71b19036fcb4eb2374b07d1a191e53bac3->enter($__internal_49871edac10249fb1fc18c21b3e99f71b19036fcb4eb2374b07d1a191e53bac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_49871edac10249fb1fc18c21b3e99f71b19036fcb4eb2374b07d1a191e53bac3->leave($__internal_49871edac10249fb1fc18c21b3e99f71b19036fcb4eb2374b07d1a191e53bac3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
