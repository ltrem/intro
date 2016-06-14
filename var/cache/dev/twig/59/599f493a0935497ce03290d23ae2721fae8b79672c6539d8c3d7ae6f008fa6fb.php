<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a01036efd55385a4dfc65c797987f74f4c24f227739e8341071717eaf3e5f9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f441ab1ea1fcd5ce915ca9b8a3da018de9d6f645fa0723babf73187981b64584 = $this->env->getExtension("native_profiler");
        $__internal_f441ab1ea1fcd5ce915ca9b8a3da018de9d6f645fa0723babf73187981b64584->enter($__internal_f441ab1ea1fcd5ce915ca9b8a3da018de9d6f645fa0723babf73187981b64584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f441ab1ea1fcd5ce915ca9b8a3da018de9d6f645fa0723babf73187981b64584->leave($__internal_f441ab1ea1fcd5ce915ca9b8a3da018de9d6f645fa0723babf73187981b64584_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f862c16c211c43c8e4308758f26ad9b164b62762f559c082d2810450eb547bfb = $this->env->getExtension("native_profiler");
        $__internal_f862c16c211c43c8e4308758f26ad9b164b62762f559c082d2810450eb547bfb->enter($__internal_f862c16c211c43c8e4308758f26ad9b164b62762f559c082d2810450eb547bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f862c16c211c43c8e4308758f26ad9b164b62762f559c082d2810450eb547bfb->leave($__internal_f862c16c211c43c8e4308758f26ad9b164b62762f559c082d2810450eb547bfb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
