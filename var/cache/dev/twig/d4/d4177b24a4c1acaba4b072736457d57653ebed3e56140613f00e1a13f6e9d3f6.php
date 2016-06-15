<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_48616f2c821d0c33033f4572c3229edfc8cabdae3b4d5df621f6fd8d5dd50b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_2b7a1117053f6ce6c4bee56e97ea88e7648968b2e28a662f16f0b8b29a096698 = $this->env->getExtension("native_profiler");
        $__internal_2b7a1117053f6ce6c4bee56e97ea88e7648968b2e28a662f16f0b8b29a096698->enter($__internal_2b7a1117053f6ce6c4bee56e97ea88e7648968b2e28a662f16f0b8b29a096698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7a1117053f6ce6c4bee56e97ea88e7648968b2e28a662f16f0b8b29a096698->leave($__internal_2b7a1117053f6ce6c4bee56e97ea88e7648968b2e28a662f16f0b8b29a096698_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9225cc5d3c6385e631311e6ac8efdcf8be24000bc604f2e339b626704336af6 = $this->env->getExtension("native_profiler");
        $__internal_f9225cc5d3c6385e631311e6ac8efdcf8be24000bc604f2e339b626704336af6->enter($__internal_f9225cc5d3c6385e631311e6ac8efdcf8be24000bc604f2e339b626704336af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_f9225cc5d3c6385e631311e6ac8efdcf8be24000bc604f2e339b626704336af6->leave($__internal_f9225cc5d3c6385e631311e6ac8efdcf8be24000bc604f2e339b626704336af6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
