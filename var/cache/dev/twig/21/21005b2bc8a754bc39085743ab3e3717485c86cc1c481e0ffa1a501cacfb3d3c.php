<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_e700540e727a036e0771ff9661c0f22193252dfae267ae98d4949258a931ecc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_6111543339b340eba401092b02162a3cc812d59c7fcaa2cc8eb8773873e3a191 = $this->env->getExtension("native_profiler");
        $__internal_6111543339b340eba401092b02162a3cc812d59c7fcaa2cc8eb8773873e3a191->enter($__internal_6111543339b340eba401092b02162a3cc812d59c7fcaa2cc8eb8773873e3a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6111543339b340eba401092b02162a3cc812d59c7fcaa2cc8eb8773873e3a191->leave($__internal_6111543339b340eba401092b02162a3cc812d59c7fcaa2cc8eb8773873e3a191_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71565d7aa833dabf247ed168e2ba9d6b15eadb1cfcf6b6dc7e4a1b83863ef364 = $this->env->getExtension("native_profiler");
        $__internal_71565d7aa833dabf247ed168e2ba9d6b15eadb1cfcf6b6dc7e4a1b83863ef364->enter($__internal_71565d7aa833dabf247ed168e2ba9d6b15eadb1cfcf6b6dc7e4a1b83863ef364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_71565d7aa833dabf247ed168e2ba9d6b15eadb1cfcf6b6dc7e4a1b83863ef364->leave($__internal_71565d7aa833dabf247ed168e2ba9d6b15eadb1cfcf6b6dc7e4a1b83863ef364_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
