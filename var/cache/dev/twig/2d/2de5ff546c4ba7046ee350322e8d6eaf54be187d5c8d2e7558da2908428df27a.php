<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_62ce0a6ba010719431138a48cec19f57049126f86846b600030c4c1cfa7985dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbf1acc97c26608aababfd7c9d53fac5e9407140b96d8cd6926fb488726c45c9 = $this->env->getExtension("native_profiler");
        $__internal_cbf1acc97c26608aababfd7c9d53fac5e9407140b96d8cd6926fb488726c45c9->enter($__internal_cbf1acc97c26608aababfd7c9d53fac5e9407140b96d8cd6926fb488726c45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf1acc97c26608aababfd7c9d53fac5e9407140b96d8cd6926fb488726c45c9->leave($__internal_cbf1acc97c26608aababfd7c9d53fac5e9407140b96d8cd6926fb488726c45c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1888719f47b12a2e5c3c50ccdbdc1d98bb7b52ddd9345d70c687b5d043a3ed06 = $this->env->getExtension("native_profiler");
        $__internal_1888719f47b12a2e5c3c50ccdbdc1d98bb7b52ddd9345d70c687b5d043a3ed06->enter($__internal_1888719f47b12a2e5c3c50ccdbdc1d98bb7b52ddd9345d70c687b5d043a3ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1888719f47b12a2e5c3c50ccdbdc1d98bb7b52ddd9345d70c687b5d043a3ed06->leave($__internal_1888719f47b12a2e5c3c50ccdbdc1d98bb7b52ddd9345d70c687b5d043a3ed06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock body %}*/
/* */
