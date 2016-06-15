<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0b8ae234b21833c79105652cf828a08b56af0c0b072b35d61d6d6b0f4717c843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1d9e20f698efda9b621b75ccc9a291bf771baac2d7dd0864a5429d1014ecefd5 = $this->env->getExtension("native_profiler");
        $__internal_1d9e20f698efda9b621b75ccc9a291bf771baac2d7dd0864a5429d1014ecefd5->enter($__internal_1d9e20f698efda9b621b75ccc9a291bf771baac2d7dd0864a5429d1014ecefd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9e20f698efda9b621b75ccc9a291bf771baac2d7dd0864a5429d1014ecefd5->leave($__internal_1d9e20f698efda9b621b75ccc9a291bf771baac2d7dd0864a5429d1014ecefd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55eac592b89bdf28e50e86b8b50c530d15717a6c0198913dea3660d8bb1bdb74 = $this->env->getExtension("native_profiler");
        $__internal_55eac592b89bdf28e50e86b8b50c530d15717a6c0198913dea3660d8bb1bdb74->enter($__internal_55eac592b89bdf28e50e86b8b50c530d15717a6c0198913dea3660d8bb1bdb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_55eac592b89bdf28e50e86b8b50c530d15717a6c0198913dea3660d8bb1bdb74->leave($__internal_55eac592b89bdf28e50e86b8b50c530d15717a6c0198913dea3660d8bb1bdb74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
