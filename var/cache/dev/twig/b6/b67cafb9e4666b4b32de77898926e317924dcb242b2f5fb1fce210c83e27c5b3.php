<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_8966edb96914ee3a20c620da3c8464a56ac1703475150c74a981d1ed900109cb extends Twig_Template
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
        $__internal_4114e7815f64dcaf75b78d96eb59548eb34853749091bc90b1981a31b58a1354 = $this->env->getExtension("native_profiler");
        $__internal_4114e7815f64dcaf75b78d96eb59548eb34853749091bc90b1981a31b58a1354->enter($__internal_4114e7815f64dcaf75b78d96eb59548eb34853749091bc90b1981a31b58a1354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4114e7815f64dcaf75b78d96eb59548eb34853749091bc90b1981a31b58a1354->leave($__internal_4114e7815f64dcaf75b78d96eb59548eb34853749091bc90b1981a31b58a1354_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd8f2edbf0a187b8c2771b520bd6ee5884242b6e854f4d077e04ed34d687482d = $this->env->getExtension("native_profiler");
        $__internal_cd8f2edbf0a187b8c2771b520bd6ee5884242b6e854f4d077e04ed34d687482d->enter($__internal_cd8f2edbf0a187b8c2771b520bd6ee5884242b6e854f4d077e04ed34d687482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_cd8f2edbf0a187b8c2771b520bd6ee5884242b6e854f4d077e04ed34d687482d->leave($__internal_cd8f2edbf0a187b8c2771b520bd6ee5884242b6e854f4d077e04ed34d687482d_prof);

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
