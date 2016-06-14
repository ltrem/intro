<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_668a3fba2a5c5988ada2b05a9a3d6b609660c1343c7e9a0d91a07b942e1cf017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8def496d715b51999a82e30d9227b77d3c9a70d631f3b0cf1025144669eaa570 = $this->env->getExtension("native_profiler");
        $__internal_8def496d715b51999a82e30d9227b77d3c9a70d631f3b0cf1025144669eaa570->enter($__internal_8def496d715b51999a82e30d9227b77d3c9a70d631f3b0cf1025144669eaa570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8def496d715b51999a82e30d9227b77d3c9a70d631f3b0cf1025144669eaa570->leave($__internal_8def496d715b51999a82e30d9227b77d3c9a70d631f3b0cf1025144669eaa570_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33b8b4d2cf2894ef8ed8cea1781435ba5e22484e82f7feb70239009677b5880a = $this->env->getExtension("native_profiler");
        $__internal_33b8b4d2cf2894ef8ed8cea1781435ba5e22484e82f7feb70239009677b5880a->enter($__internal_33b8b4d2cf2894ef8ed8cea1781435ba5e22484e82f7feb70239009677b5880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_33b8b4d2cf2894ef8ed8cea1781435ba5e22484e82f7feb70239009677b5880a->leave($__internal_33b8b4d2cf2894ef8ed8cea1781435ba5e22484e82f7feb70239009677b5880a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
