<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_91c8d4754847ba972e1162c471e68c6c4486d89c3a77aaa2da79887ed8f21889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_218c2311b80d008e7b609535b7963e353fcb44673b768a001be45a7c0fe8f264 = $this->env->getExtension("native_profiler");
        $__internal_218c2311b80d008e7b609535b7963e353fcb44673b768a001be45a7c0fe8f264->enter($__internal_218c2311b80d008e7b609535b7963e353fcb44673b768a001be45a7c0fe8f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218c2311b80d008e7b609535b7963e353fcb44673b768a001be45a7c0fe8f264->leave($__internal_218c2311b80d008e7b609535b7963e353fcb44673b768a001be45a7c0fe8f264_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd14662cee19a4e6e0f33e11a105c4811bebb3c0a81ab1cfcd591e314d0c7dc4 = $this->env->getExtension("native_profiler");
        $__internal_bd14662cee19a4e6e0f33e11a105c4811bebb3c0a81ab1cfcd591e314d0c7dc4->enter($__internal_bd14662cee19a4e6e0f33e11a105c4811bebb3c0a81ab1cfcd591e314d0c7dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bd14662cee19a4e6e0f33e11a105c4811bebb3c0a81ab1cfcd591e314d0c7dc4->leave($__internal_bd14662cee19a4e6e0f33e11a105c4811bebb3c0a81ab1cfcd591e314d0c7dc4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
