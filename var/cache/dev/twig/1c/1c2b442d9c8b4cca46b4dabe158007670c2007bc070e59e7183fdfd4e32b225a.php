<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e60d227b76026458a25d9c6cd367992c55597ef562e8dabe69d2f412d4b5d14f extends Twig_Template
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
        $__internal_1bee5b46b5e8248ababb09ee2376df5681ea45b0040ca633c8a3483785ce8f23 = $this->env->getExtension("native_profiler");
        $__internal_1bee5b46b5e8248ababb09ee2376df5681ea45b0040ca633c8a3483785ce8f23->enter($__internal_1bee5b46b5e8248ababb09ee2376df5681ea45b0040ca633c8a3483785ce8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bee5b46b5e8248ababb09ee2376df5681ea45b0040ca633c8a3483785ce8f23->leave($__internal_1bee5b46b5e8248ababb09ee2376df5681ea45b0040ca633c8a3483785ce8f23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fee5f20c5e341613a69932c9c09bdc5a8745e8e6088c7fe97bc24a830c335a3a = $this->env->getExtension("native_profiler");
        $__internal_fee5f20c5e341613a69932c9c09bdc5a8745e8e6088c7fe97bc24a830c335a3a->enter($__internal_fee5f20c5e341613a69932c9c09bdc5a8745e8e6088c7fe97bc24a830c335a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fee5f20c5e341613a69932c9c09bdc5a8745e8e6088c7fe97bc24a830c335a3a->leave($__internal_fee5f20c5e341613a69932c9c09bdc5a8745e8e6088c7fe97bc24a830c335a3a_prof);

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
