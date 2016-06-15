<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_713c199737afc7f91c041fe476b071150d689982133df42ddd81858f9ebbb2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c522ba1a77c76e186324b29b461b525d8589555e3dc4a0324ab684a6c927c444 = $this->env->getExtension("native_profiler");
        $__internal_c522ba1a77c76e186324b29b461b525d8589555e3dc4a0324ab684a6c927c444->enter($__internal_c522ba1a77c76e186324b29b461b525d8589555e3dc4a0324ab684a6c927c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c522ba1a77c76e186324b29b461b525d8589555e3dc4a0324ab684a6c927c444->leave($__internal_c522ba1a77c76e186324b29b461b525d8589555e3dc4a0324ab684a6c927c444_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ec0ae4ed9845854510fa912d4731464e1405aed0d6c4a9093e53de1c1719a61 = $this->env->getExtension("native_profiler");
        $__internal_2ec0ae4ed9845854510fa912d4731464e1405aed0d6c4a9093e53de1c1719a61->enter($__internal_2ec0ae4ed9845854510fa912d4731464e1405aed0d6c4a9093e53de1c1719a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2ec0ae4ed9845854510fa912d4731464e1405aed0d6c4a9093e53de1c1719a61->leave($__internal_2ec0ae4ed9845854510fa912d4731464e1405aed0d6c4a9093e53de1c1719a61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
