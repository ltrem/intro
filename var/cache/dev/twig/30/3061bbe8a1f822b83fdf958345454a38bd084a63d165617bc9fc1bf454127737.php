<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ef55861fe2717cd8ea00c224fdd278776afcd5d00ccf350cce175344476d7c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a972e605fae56cca40b3445eca3398f85969b285325483e50af455f83bc69bf5 = $this->env->getExtension("native_profiler");
        $__internal_a972e605fae56cca40b3445eca3398f85969b285325483e50af455f83bc69bf5->enter($__internal_a972e605fae56cca40b3445eca3398f85969b285325483e50af455f83bc69bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a972e605fae56cca40b3445eca3398f85969b285325483e50af455f83bc69bf5->leave($__internal_a972e605fae56cca40b3445eca3398f85969b285325483e50af455f83bc69bf5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c75faed24b8d5b31ec55ea1eae1f61232cad7df323058007afaace96fce1f774 = $this->env->getExtension("native_profiler");
        $__internal_c75faed24b8d5b31ec55ea1eae1f61232cad7df323058007afaace96fce1f774->enter($__internal_c75faed24b8d5b31ec55ea1eae1f61232cad7df323058007afaace96fce1f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c75faed24b8d5b31ec55ea1eae1f61232cad7df323058007afaace96fce1f774->leave($__internal_c75faed24b8d5b31ec55ea1eae1f61232cad7df323058007afaace96fce1f774_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
