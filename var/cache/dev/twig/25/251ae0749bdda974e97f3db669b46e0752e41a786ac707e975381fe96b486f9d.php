<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e0d87400198745f141c362dec9870873a765b92a2171d8091143dff81595cc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_5510c0b21b927952973caeb4a2ec74f8a40679574eb545c3c79a894714e206b2 = $this->env->getExtension("native_profiler");
        $__internal_5510c0b21b927952973caeb4a2ec74f8a40679574eb545c3c79a894714e206b2->enter($__internal_5510c0b21b927952973caeb4a2ec74f8a40679574eb545c3c79a894714e206b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5510c0b21b927952973caeb4a2ec74f8a40679574eb545c3c79a894714e206b2->leave($__internal_5510c0b21b927952973caeb4a2ec74f8a40679574eb545c3c79a894714e206b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58e5786cf15f7f70cf7ff2ee13ee01f89013a2c964c12a5a3ab44c7fb3e99fc6 = $this->env->getExtension("native_profiler");
        $__internal_58e5786cf15f7f70cf7ff2ee13ee01f89013a2c964c12a5a3ab44c7fb3e99fc6->enter($__internal_58e5786cf15f7f70cf7ff2ee13ee01f89013a2c964c12a5a3ab44c7fb3e99fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_58e5786cf15f7f70cf7ff2ee13ee01f89013a2c964c12a5a3ab44c7fb3e99fc6->leave($__internal_58e5786cf15f7f70cf7ff2ee13ee01f89013a2c964c12a5a3ab44c7fb3e99fc6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
