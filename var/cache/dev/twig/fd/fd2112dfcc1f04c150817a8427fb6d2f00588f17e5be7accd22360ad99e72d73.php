<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_a1ad53f705e3214ba7188a34f1daef98a064dd799fda9ba5a8068b161872bda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_58d21bb2da3fcf61a9f516d440c83532a9fccc3e9af98e31021f93bee819a4a2 = $this->env->getExtension("native_profiler");
        $__internal_58d21bb2da3fcf61a9f516d440c83532a9fccc3e9af98e31021f93bee819a4a2->enter($__internal_58d21bb2da3fcf61a9f516d440c83532a9fccc3e9af98e31021f93bee819a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d21bb2da3fcf61a9f516d440c83532a9fccc3e9af98e31021f93bee819a4a2->leave($__internal_58d21bb2da3fcf61a9f516d440c83532a9fccc3e9af98e31021f93bee819a4a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_327116cc79e25ddf8aa31291050e2bad4ae8d16d56cd0ecd1a1a56996d8043ba = $this->env->getExtension("native_profiler");
        $__internal_327116cc79e25ddf8aa31291050e2bad4ae8d16d56cd0ecd1a1a56996d8043ba->enter($__internal_327116cc79e25ddf8aa31291050e2bad4ae8d16d56cd0ecd1a1a56996d8043ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_327116cc79e25ddf8aa31291050e2bad4ae8d16d56cd0ecd1a1a56996d8043ba->leave($__internal_327116cc79e25ddf8aa31291050e2bad4ae8d16d56cd0ecd1a1a56996d8043ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
