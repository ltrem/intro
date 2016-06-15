<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_480ec5dada7170ac94d950c571360df6ff1631b2b8dfb3dcaa1de1e82e619ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6998fe2924c7fbe67fbf844a9b9ee674416adffd3e2fe79479f7427d3faf66fb = $this->env->getExtension("native_profiler");
        $__internal_6998fe2924c7fbe67fbf844a9b9ee674416adffd3e2fe79479f7427d3faf66fb->enter($__internal_6998fe2924c7fbe67fbf844a9b9ee674416adffd3e2fe79479f7427d3faf66fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6998fe2924c7fbe67fbf844a9b9ee674416adffd3e2fe79479f7427d3faf66fb->leave($__internal_6998fe2924c7fbe67fbf844a9b9ee674416adffd3e2fe79479f7427d3faf66fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26e3b819a2658367538864e5d74b6f07fff870a7fcbf56ec20d137d29478431b = $this->env->getExtension("native_profiler");
        $__internal_26e3b819a2658367538864e5d74b6f07fff870a7fcbf56ec20d137d29478431b->enter($__internal_26e3b819a2658367538864e5d74b6f07fff870a7fcbf56ec20d137d29478431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_26e3b819a2658367538864e5d74b6f07fff870a7fcbf56ec20d137d29478431b->leave($__internal_26e3b819a2658367538864e5d74b6f07fff870a7fcbf56ec20d137d29478431b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
