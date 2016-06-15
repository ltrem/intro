<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e30f370af5ddd9bb77323650975706663b40493ee516d094cb81a0ff734db221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_35ad2f8215f118aff4406bf9f3cafc59d1c2736061e93099bd797f693a45dfc0 = $this->env->getExtension("native_profiler");
        $__internal_35ad2f8215f118aff4406bf9f3cafc59d1c2736061e93099bd797f693a45dfc0->enter($__internal_35ad2f8215f118aff4406bf9f3cafc59d1c2736061e93099bd797f693a45dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ad2f8215f118aff4406bf9f3cafc59d1c2736061e93099bd797f693a45dfc0->leave($__internal_35ad2f8215f118aff4406bf9f3cafc59d1c2736061e93099bd797f693a45dfc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7e8cf0337f6edb7bcb0e52090d24b6db41cfa9b4dcbad16d8200db26a137174 = $this->env->getExtension("native_profiler");
        $__internal_c7e8cf0337f6edb7bcb0e52090d24b6db41cfa9b4dcbad16d8200db26a137174->enter($__internal_c7e8cf0337f6edb7bcb0e52090d24b6db41cfa9b4dcbad16d8200db26a137174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c7e8cf0337f6edb7bcb0e52090d24b6db41cfa9b4dcbad16d8200db26a137174->leave($__internal_c7e8cf0337f6edb7bcb0e52090d24b6db41cfa9b4dcbad16d8200db26a137174_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
