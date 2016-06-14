<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6242e2a7490373fd2f9dc14a5ca860f6b5ebe48c6e917df6174ac309855509c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f9febd5d939219618cb6861c4d2a6619bf6bdda421a572c92600fe7813562e00 = $this->env->getExtension("native_profiler");
        $__internal_f9febd5d939219618cb6861c4d2a6619bf6bdda421a572c92600fe7813562e00->enter($__internal_f9febd5d939219618cb6861c4d2a6619bf6bdda421a572c92600fe7813562e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9febd5d939219618cb6861c4d2a6619bf6bdda421a572c92600fe7813562e00->leave($__internal_f9febd5d939219618cb6861c4d2a6619bf6bdda421a572c92600fe7813562e00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77e88fac3ffca90ebb0ef6e28a741da0c62bbc24797cdf186ba53739be65e9dd = $this->env->getExtension("native_profiler");
        $__internal_77e88fac3ffca90ebb0ef6e28a741da0c62bbc24797cdf186ba53739be65e9dd->enter($__internal_77e88fac3ffca90ebb0ef6e28a741da0c62bbc24797cdf186ba53739be65e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_77e88fac3ffca90ebb0ef6e28a741da0c62bbc24797cdf186ba53739be65e9dd->leave($__internal_77e88fac3ffca90ebb0ef6e28a741da0c62bbc24797cdf186ba53739be65e9dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
