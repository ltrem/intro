<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_93a1c7248e0859fe676c54b0fead90a0c291a15b4ff08cfc2936bf0fd9e48d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_dc9c697c040378eabea89877f0755730e45087b32955c6ee764069f1bb553d84 = $this->env->getExtension("native_profiler");
        $__internal_dc9c697c040378eabea89877f0755730e45087b32955c6ee764069f1bb553d84->enter($__internal_dc9c697c040378eabea89877f0755730e45087b32955c6ee764069f1bb553d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc9c697c040378eabea89877f0755730e45087b32955c6ee764069f1bb553d84->leave($__internal_dc9c697c040378eabea89877f0755730e45087b32955c6ee764069f1bb553d84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a7fe6559a22aae4bdd57ecaf160ad549a44405274881a813d8570ca5c0f4865 = $this->env->getExtension("native_profiler");
        $__internal_8a7fe6559a22aae4bdd57ecaf160ad549a44405274881a813d8570ca5c0f4865->enter($__internal_8a7fe6559a22aae4bdd57ecaf160ad549a44405274881a813d8570ca5c0f4865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8a7fe6559a22aae4bdd57ecaf160ad549a44405274881a813d8570ca5c0f4865->leave($__internal_8a7fe6559a22aae4bdd57ecaf160ad549a44405274881a813d8570ca5c0f4865_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
