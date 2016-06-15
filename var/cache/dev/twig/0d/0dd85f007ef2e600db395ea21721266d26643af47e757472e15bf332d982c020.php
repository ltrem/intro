<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_210715ea778f7f3e8ef32a7854418eaf3af6c4977fc54368f8bff3dbb282448f extends Twig_Template
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
        $__internal_00f94137cdb1438403059dc4a217e1eed9e79c9fc0e1c1e78731a6a9ea7b81f3 = $this->env->getExtension("native_profiler");
        $__internal_00f94137cdb1438403059dc4a217e1eed9e79c9fc0e1c1e78731a6a9ea7b81f3->enter($__internal_00f94137cdb1438403059dc4a217e1eed9e79c9fc0e1c1e78731a6a9ea7b81f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f94137cdb1438403059dc4a217e1eed9e79c9fc0e1c1e78731a6a9ea7b81f3->leave($__internal_00f94137cdb1438403059dc4a217e1eed9e79c9fc0e1c1e78731a6a9ea7b81f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c66f6809c2ac1f34a21dce6218610dde799eec07bcb13dbc7838ae00002e91a0 = $this->env->getExtension("native_profiler");
        $__internal_c66f6809c2ac1f34a21dce6218610dde799eec07bcb13dbc7838ae00002e91a0->enter($__internal_c66f6809c2ac1f34a21dce6218610dde799eec07bcb13dbc7838ae00002e91a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c66f6809c2ac1f34a21dce6218610dde799eec07bcb13dbc7838ae00002e91a0->leave($__internal_c66f6809c2ac1f34a21dce6218610dde799eec07bcb13dbc7838ae00002e91a0_prof);

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
