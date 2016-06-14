<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_517d7fe3e56834b7679ae2c1919544ed53c221703346952f37a33e1629529b47 extends Twig_Template
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
        $__internal_91cd2e524126c64274b3165cbeeb7498de04a8f94933778e957bec051d03c2f4 = $this->env->getExtension("native_profiler");
        $__internal_91cd2e524126c64274b3165cbeeb7498de04a8f94933778e957bec051d03c2f4->enter($__internal_91cd2e524126c64274b3165cbeeb7498de04a8f94933778e957bec051d03c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cd2e524126c64274b3165cbeeb7498de04a8f94933778e957bec051d03c2f4->leave($__internal_91cd2e524126c64274b3165cbeeb7498de04a8f94933778e957bec051d03c2f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80ae93522ccd877a1ccd86c38577dab326f5e44e6ce4866f3dc5d8b6a6f440d7 = $this->env->getExtension("native_profiler");
        $__internal_80ae93522ccd877a1ccd86c38577dab326f5e44e6ce4866f3dc5d8b6a6f440d7->enter($__internal_80ae93522ccd877a1ccd86c38577dab326f5e44e6ce4866f3dc5d8b6a6f440d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_80ae93522ccd877a1ccd86c38577dab326f5e44e6ce4866f3dc5d8b6a6f440d7->leave($__internal_80ae93522ccd877a1ccd86c38577dab326f5e44e6ce4866f3dc5d8b6a6f440d7_prof);

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
