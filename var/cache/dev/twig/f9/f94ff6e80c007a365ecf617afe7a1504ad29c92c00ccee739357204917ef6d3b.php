<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_9ad05d392590562f4fa85dc41d948d469ea959ee7a8c7dcf3f21c49096def4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_08732e87f0e5d22f73c64f2ec23049737ef040fabcabb3dbe264d558b9f7cda5 = $this->env->getExtension("native_profiler");
        $__internal_08732e87f0e5d22f73c64f2ec23049737ef040fabcabb3dbe264d558b9f7cda5->enter($__internal_08732e87f0e5d22f73c64f2ec23049737ef040fabcabb3dbe264d558b9f7cda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08732e87f0e5d22f73c64f2ec23049737ef040fabcabb3dbe264d558b9f7cda5->leave($__internal_08732e87f0e5d22f73c64f2ec23049737ef040fabcabb3dbe264d558b9f7cda5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea52c9ef2dcc266a415b369148cd0186ce7b2aa015e2e5c67425290cec5cf122 = $this->env->getExtension("native_profiler");
        $__internal_ea52c9ef2dcc266a415b369148cd0186ce7b2aa015e2e5c67425290cec5cf122->enter($__internal_ea52c9ef2dcc266a415b369148cd0186ce7b2aa015e2e5c67425290cec5cf122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ea52c9ef2dcc266a415b369148cd0186ce7b2aa015e2e5c67425290cec5cf122->leave($__internal_ea52c9ef2dcc266a415b369148cd0186ce7b2aa015e2e5c67425290cec5cf122_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
