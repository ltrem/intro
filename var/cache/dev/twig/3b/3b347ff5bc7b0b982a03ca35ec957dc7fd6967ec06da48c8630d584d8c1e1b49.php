<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_03dd0991393103717f3595d6a7d511c2d1782eebf72f10d7b8527daddccf00b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_92023d386c46de7047fc3bf9f22943093fa61ccfad82856e990f66fc9b317b70 = $this->env->getExtension("native_profiler");
        $__internal_92023d386c46de7047fc3bf9f22943093fa61ccfad82856e990f66fc9b317b70->enter($__internal_92023d386c46de7047fc3bf9f22943093fa61ccfad82856e990f66fc9b317b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92023d386c46de7047fc3bf9f22943093fa61ccfad82856e990f66fc9b317b70->leave($__internal_92023d386c46de7047fc3bf9f22943093fa61ccfad82856e990f66fc9b317b70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b670f706c6314b0afe5b3fad438cad5c650948767780151e43437615ae00b9d = $this->env->getExtension("native_profiler");
        $__internal_9b670f706c6314b0afe5b3fad438cad5c650948767780151e43437615ae00b9d->enter($__internal_9b670f706c6314b0afe5b3fad438cad5c650948767780151e43437615ae00b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9b670f706c6314b0afe5b3fad438cad5c650948767780151e43437615ae00b9d->leave($__internal_9b670f706c6314b0afe5b3fad438cad5c650948767780151e43437615ae00b9d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
