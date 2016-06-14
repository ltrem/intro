<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4f31910b985831d784149ae5d81e2ccf6bf06f51de90122134bde05c8c9cb54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9a953991a2f303c9971f0a0970334a68ff6533526148b27763561a835e8a033c = $this->env->getExtension("native_profiler");
        $__internal_9a953991a2f303c9971f0a0970334a68ff6533526148b27763561a835e8a033c->enter($__internal_9a953991a2f303c9971f0a0970334a68ff6533526148b27763561a835e8a033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a953991a2f303c9971f0a0970334a68ff6533526148b27763561a835e8a033c->leave($__internal_9a953991a2f303c9971f0a0970334a68ff6533526148b27763561a835e8a033c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cf3015e17ffcc4a53e42ed7770ae3df5c25a01213d46efb2a8eba08c5a37f31 = $this->env->getExtension("native_profiler");
        $__internal_5cf3015e17ffcc4a53e42ed7770ae3df5c25a01213d46efb2a8eba08c5a37f31->enter($__internal_5cf3015e17ffcc4a53e42ed7770ae3df5c25a01213d46efb2a8eba08c5a37f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5cf3015e17ffcc4a53e42ed7770ae3df5c25a01213d46efb2a8eba08c5a37f31->leave($__internal_5cf3015e17ffcc4a53e42ed7770ae3df5c25a01213d46efb2a8eba08c5a37f31_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
