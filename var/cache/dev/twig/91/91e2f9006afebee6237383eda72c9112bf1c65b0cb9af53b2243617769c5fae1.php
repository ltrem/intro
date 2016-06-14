<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_93d34bcdd74a1368363fd12c2e7675699c8a489230cd9b64e3282b3e4ffe4fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e3afc07c6a8c76bf5aa81a8d8d5c3b7b5370bfa0491c97094c8ead8aa67e1c55 = $this->env->getExtension("native_profiler");
        $__internal_e3afc07c6a8c76bf5aa81a8d8d5c3b7b5370bfa0491c97094c8ead8aa67e1c55->enter($__internal_e3afc07c6a8c76bf5aa81a8d8d5c3b7b5370bfa0491c97094c8ead8aa67e1c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3afc07c6a8c76bf5aa81a8d8d5c3b7b5370bfa0491c97094c8ead8aa67e1c55->leave($__internal_e3afc07c6a8c76bf5aa81a8d8d5c3b7b5370bfa0491c97094c8ead8aa67e1c55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1356da32f2d71e53f8663d34db774e848b0fb397496b3b6abfbf2ccc2d7402e0 = $this->env->getExtension("native_profiler");
        $__internal_1356da32f2d71e53f8663d34db774e848b0fb397496b3b6abfbf2ccc2d7402e0->enter($__internal_1356da32f2d71e53f8663d34db774e848b0fb397496b3b6abfbf2ccc2d7402e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1356da32f2d71e53f8663d34db774e848b0fb397496b3b6abfbf2ccc2d7402e0->leave($__internal_1356da32f2d71e53f8663d34db774e848b0fb397496b3b6abfbf2ccc2d7402e0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
