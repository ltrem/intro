<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_25dd9b056274697166281df3049c91a1efe3126ea7dd2c53ac866c5bf7bda5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_f851d52252320dca93bc5e5f0016f343fbfdc60443c3e371e63bbb76fb63aa8a = $this->env->getExtension("native_profiler");
        $__internal_f851d52252320dca93bc5e5f0016f343fbfdc60443c3e371e63bbb76fb63aa8a->enter($__internal_f851d52252320dca93bc5e5f0016f343fbfdc60443c3e371e63bbb76fb63aa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f851d52252320dca93bc5e5f0016f343fbfdc60443c3e371e63bbb76fb63aa8a->leave($__internal_f851d52252320dca93bc5e5f0016f343fbfdc60443c3e371e63bbb76fb63aa8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb056537448da5422b2740d923af96cd1ecd09b655a664701947b2d640d52303 = $this->env->getExtension("native_profiler");
        $__internal_cb056537448da5422b2740d923af96cd1ecd09b655a664701947b2d640d52303->enter($__internal_cb056537448da5422b2740d923af96cd1ecd09b655a664701947b2d640d52303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_cb056537448da5422b2740d923af96cd1ecd09b655a664701947b2d640d52303->leave($__internal_cb056537448da5422b2740d923af96cd1ecd09b655a664701947b2d640d52303_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
