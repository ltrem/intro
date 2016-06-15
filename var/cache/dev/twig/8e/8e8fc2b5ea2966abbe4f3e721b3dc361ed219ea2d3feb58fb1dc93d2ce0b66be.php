<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4fb8a2a669d4fe746acfc389dc40f2ce70c8bca0a8996f8ac00451ece5d7b341 extends Twig_Template
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
        $__internal_c88196a43d99fde5ab35241cdd73cb0e3aa5b22c2e6d072ba71013f3719b428f = $this->env->getExtension("native_profiler");
        $__internal_c88196a43d99fde5ab35241cdd73cb0e3aa5b22c2e6d072ba71013f3719b428f->enter($__internal_c88196a43d99fde5ab35241cdd73cb0e3aa5b22c2e6d072ba71013f3719b428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88196a43d99fde5ab35241cdd73cb0e3aa5b22c2e6d072ba71013f3719b428f->leave($__internal_c88196a43d99fde5ab35241cdd73cb0e3aa5b22c2e6d072ba71013f3719b428f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_196809bfce199e112f056be98d36f7deb8446b608b9d25a79318b2a2d47c0bac = $this->env->getExtension("native_profiler");
        $__internal_196809bfce199e112f056be98d36f7deb8446b608b9d25a79318b2a2d47c0bac->enter($__internal_196809bfce199e112f056be98d36f7deb8446b608b9d25a79318b2a2d47c0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_196809bfce199e112f056be98d36f7deb8446b608b9d25a79318b2a2d47c0bac->leave($__internal_196809bfce199e112f056be98d36f7deb8446b608b9d25a79318b2a2d47c0bac_prof);

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
