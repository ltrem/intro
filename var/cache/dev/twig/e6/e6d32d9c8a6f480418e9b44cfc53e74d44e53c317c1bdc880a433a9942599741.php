<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_2f0a1837e5fc43392b3b6c71abe434dce95017288d9197ac7d45a85a0a51818c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8de352355972fbd75f9228755801b0f704cc01d0345f7775b92f26be18528fa8 = $this->env->getExtension("native_profiler");
        $__internal_8de352355972fbd75f9228755801b0f704cc01d0345f7775b92f26be18528fa8->enter($__internal_8de352355972fbd75f9228755801b0f704cc01d0345f7775b92f26be18528fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de352355972fbd75f9228755801b0f704cc01d0345f7775b92f26be18528fa8->leave($__internal_8de352355972fbd75f9228755801b0f704cc01d0345f7775b92f26be18528fa8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7335cf8dc16f77c963124e7e100b6ca469b446ed39b88381950352db5c7ff74d = $this->env->getExtension("native_profiler");
        $__internal_7335cf8dc16f77c963124e7e100b6ca469b446ed39b88381950352db5c7ff74d->enter($__internal_7335cf8dc16f77c963124e7e100b6ca469b446ed39b88381950352db5c7ff74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7335cf8dc16f77c963124e7e100b6ca469b446ed39b88381950352db5c7ff74d->leave($__internal_7335cf8dc16f77c963124e7e100b6ca469b446ed39b88381950352db5c7ff74d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
