<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ae30f2afe7d938991223f9706452ea6f9884c200cf0cb90501e0bc2d694c40ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_86319ccc26d25408b60112eeb0f9399938f270d11c52867f6e437382c2b0a7d7 = $this->env->getExtension("native_profiler");
        $__internal_86319ccc26d25408b60112eeb0f9399938f270d11c52867f6e437382c2b0a7d7->enter($__internal_86319ccc26d25408b60112eeb0f9399938f270d11c52867f6e437382c2b0a7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86319ccc26d25408b60112eeb0f9399938f270d11c52867f6e437382c2b0a7d7->leave($__internal_86319ccc26d25408b60112eeb0f9399938f270d11c52867f6e437382c2b0a7d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d398edd2626e00551d113ef481fc3a152947dd11f179eac01e6d52b9fe3ff2e8 = $this->env->getExtension("native_profiler");
        $__internal_d398edd2626e00551d113ef481fc3a152947dd11f179eac01e6d52b9fe3ff2e8->enter($__internal_d398edd2626e00551d113ef481fc3a152947dd11f179eac01e6d52b9fe3ff2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d398edd2626e00551d113ef481fc3a152947dd11f179eac01e6d52b9fe3ff2e8->leave($__internal_d398edd2626e00551d113ef481fc3a152947dd11f179eac01e6d52b9fe3ff2e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
