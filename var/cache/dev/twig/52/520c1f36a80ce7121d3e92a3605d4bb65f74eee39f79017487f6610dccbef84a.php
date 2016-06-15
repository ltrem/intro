<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7c5031e4aca280269d6bca5b3426ee217252acb7db8b42f71c45b991a01cf0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_bdbc5f0782ce96effe390261d58b7cc7797c2162c63c5840f87382d8f4dd9a87 = $this->env->getExtension("native_profiler");
        $__internal_bdbc5f0782ce96effe390261d58b7cc7797c2162c63c5840f87382d8f4dd9a87->enter($__internal_bdbc5f0782ce96effe390261d58b7cc7797c2162c63c5840f87382d8f4dd9a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdbc5f0782ce96effe390261d58b7cc7797c2162c63c5840f87382d8f4dd9a87->leave($__internal_bdbc5f0782ce96effe390261d58b7cc7797c2162c63c5840f87382d8f4dd9a87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f43c74001b01a067c1a33a8ad9b133ccf63e0f7e1740faed53ba4ac7bae60418 = $this->env->getExtension("native_profiler");
        $__internal_f43c74001b01a067c1a33a8ad9b133ccf63e0f7e1740faed53ba4ac7bae60418->enter($__internal_f43c74001b01a067c1a33a8ad9b133ccf63e0f7e1740faed53ba4ac7bae60418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f43c74001b01a067c1a33a8ad9b133ccf63e0f7e1740faed53ba4ac7bae60418->leave($__internal_f43c74001b01a067c1a33a8ad9b133ccf63e0f7e1740faed53ba4ac7bae60418_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
