<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5cc24bc3718767a44436c3abf071243ef978eaad28092b8b2c02df49190f947c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ede5f6ca5f2afd236f7027c73465249652f0328226e1d74386eba15b6a7fac51 = $this->env->getExtension("native_profiler");
        $__internal_ede5f6ca5f2afd236f7027c73465249652f0328226e1d74386eba15b6a7fac51->enter($__internal_ede5f6ca5f2afd236f7027c73465249652f0328226e1d74386eba15b6a7fac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede5f6ca5f2afd236f7027c73465249652f0328226e1d74386eba15b6a7fac51->leave($__internal_ede5f6ca5f2afd236f7027c73465249652f0328226e1d74386eba15b6a7fac51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_344d06e0ed8d18e2e4012f5d5170d680ebaf45b6bb1bf680463571c91dba437f = $this->env->getExtension("native_profiler");
        $__internal_344d06e0ed8d18e2e4012f5d5170d680ebaf45b6bb1bf680463571c91dba437f->enter($__internal_344d06e0ed8d18e2e4012f5d5170d680ebaf45b6bb1bf680463571c91dba437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_344d06e0ed8d18e2e4012f5d5170d680ebaf45b6bb1bf680463571c91dba437f->leave($__internal_344d06e0ed8d18e2e4012f5d5170d680ebaf45b6bb1bf680463571c91dba437f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
