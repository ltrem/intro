<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ad0e4f115c71231d8ddc65bb3ebc8ad464088c283394f9a209d7a6ccd64f5595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f104b6c169d3a748719c57c251d0a825838e0cd63e7d6d2808ecc91de4d1d248 = $this->env->getExtension("native_profiler");
        $__internal_f104b6c169d3a748719c57c251d0a825838e0cd63e7d6d2808ecc91de4d1d248->enter($__internal_f104b6c169d3a748719c57c251d0a825838e0cd63e7d6d2808ecc91de4d1d248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f104b6c169d3a748719c57c251d0a825838e0cd63e7d6d2808ecc91de4d1d248->leave($__internal_f104b6c169d3a748719c57c251d0a825838e0cd63e7d6d2808ecc91de4d1d248_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b21b33dc82bf1953655bb40b7d78bcf4b4c834b626a5f4c6915714fec605a21d = $this->env->getExtension("native_profiler");
        $__internal_b21b33dc82bf1953655bb40b7d78bcf4b4c834b626a5f4c6915714fec605a21d->enter($__internal_b21b33dc82bf1953655bb40b7d78bcf4b4c834b626a5f4c6915714fec605a21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b21b33dc82bf1953655bb40b7d78bcf4b4c834b626a5f4c6915714fec605a21d->leave($__internal_b21b33dc82bf1953655bb40b7d78bcf4b4c834b626a5f4c6915714fec605a21d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
