<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_252ecccde9f7fbd940a2c7338625c1b2503a229add6bacd5fa036d338cedd5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_85cc6d9e7e32d519fbef35dcab41ba95e9fe763a44ac7ca54b2076c91b35523b = $this->env->getExtension("native_profiler");
        $__internal_85cc6d9e7e32d519fbef35dcab41ba95e9fe763a44ac7ca54b2076c91b35523b->enter($__internal_85cc6d9e7e32d519fbef35dcab41ba95e9fe763a44ac7ca54b2076c91b35523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cc6d9e7e32d519fbef35dcab41ba95e9fe763a44ac7ca54b2076c91b35523b->leave($__internal_85cc6d9e7e32d519fbef35dcab41ba95e9fe763a44ac7ca54b2076c91b35523b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a39c640aba23b9b9b3382307f485145533ea37203ae79878a9a15f24970daf2 = $this->env->getExtension("native_profiler");
        $__internal_0a39c640aba23b9b9b3382307f485145533ea37203ae79878a9a15f24970daf2->enter($__internal_0a39c640aba23b9b9b3382307f485145533ea37203ae79878a9a15f24970daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0a39c640aba23b9b9b3382307f485145533ea37203ae79878a9a15f24970daf2->leave($__internal_0a39c640aba23b9b9b3382307f485145533ea37203ae79878a9a15f24970daf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
