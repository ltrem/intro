<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_59a3eaa682c6c1b37d3a49d74be45a9d605e0831e714eeff56c8cbca81ef3f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0466dc38c6255bd714b609060aa9ca97ab475216604311995760347be45e463d = $this->env->getExtension("native_profiler");
        $__internal_0466dc38c6255bd714b609060aa9ca97ab475216604311995760347be45e463d->enter($__internal_0466dc38c6255bd714b609060aa9ca97ab475216604311995760347be45e463d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0466dc38c6255bd714b609060aa9ca97ab475216604311995760347be45e463d->leave($__internal_0466dc38c6255bd714b609060aa9ca97ab475216604311995760347be45e463d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc7f7ef56f2bad2603c369666409923ce1ae1bdde9da2854ae9cd0fdb8a258f1 = $this->env->getExtension("native_profiler");
        $__internal_fc7f7ef56f2bad2603c369666409923ce1ae1bdde9da2854ae9cd0fdb8a258f1->enter($__internal_fc7f7ef56f2bad2603c369666409923ce1ae1bdde9da2854ae9cd0fdb8a258f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fc7f7ef56f2bad2603c369666409923ce1ae1bdde9da2854ae9cd0fdb8a258f1->leave($__internal_fc7f7ef56f2bad2603c369666409923ce1ae1bdde9da2854ae9cd0fdb8a258f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
