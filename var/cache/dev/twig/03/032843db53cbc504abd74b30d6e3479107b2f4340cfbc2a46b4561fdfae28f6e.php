<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_04f95f8213230cf234ac6841afe914b00177c2b75bf155c390de1417af81a1c2 extends Twig_Template
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
        $__internal_363796aa9bbc50870b2a7a91ea6df840f1fc3107eb18c62a1a90ffc1e7709155 = $this->env->getExtension("native_profiler");
        $__internal_363796aa9bbc50870b2a7a91ea6df840f1fc3107eb18c62a1a90ffc1e7709155->enter($__internal_363796aa9bbc50870b2a7a91ea6df840f1fc3107eb18c62a1a90ffc1e7709155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_363796aa9bbc50870b2a7a91ea6df840f1fc3107eb18c62a1a90ffc1e7709155->leave($__internal_363796aa9bbc50870b2a7a91ea6df840f1fc3107eb18c62a1a90ffc1e7709155_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0594f96b792b694102b7e338c1a411b72348ff2db1388ca0c530c6aec2db6d6a = $this->env->getExtension("native_profiler");
        $__internal_0594f96b792b694102b7e338c1a411b72348ff2db1388ca0c530c6aec2db6d6a->enter($__internal_0594f96b792b694102b7e338c1a411b72348ff2db1388ca0c530c6aec2db6d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0594f96b792b694102b7e338c1a411b72348ff2db1388ca0c530c6aec2db6d6a->leave($__internal_0594f96b792b694102b7e338c1a411b72348ff2db1388ca0c530c6aec2db6d6a_prof);

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
