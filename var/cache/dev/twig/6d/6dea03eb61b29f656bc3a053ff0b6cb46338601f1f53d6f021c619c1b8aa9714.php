<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3aaefd43b2cdb14e9d3f963913ceb4ef3f73661abbc3930e1d6169c22f8f5663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ae34eedf8f2a86e95159a8e6ae6d4b0407ad34ab2873460fcb14613ab80a4927 = $this->env->getExtension("native_profiler");
        $__internal_ae34eedf8f2a86e95159a8e6ae6d4b0407ad34ab2873460fcb14613ab80a4927->enter($__internal_ae34eedf8f2a86e95159a8e6ae6d4b0407ad34ab2873460fcb14613ab80a4927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae34eedf8f2a86e95159a8e6ae6d4b0407ad34ab2873460fcb14613ab80a4927->leave($__internal_ae34eedf8f2a86e95159a8e6ae6d4b0407ad34ab2873460fcb14613ab80a4927_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ded66e3c73b87a02b00f5da7962c9e80ce5351a2690952667a4954da4cc2aae = $this->env->getExtension("native_profiler");
        $__internal_9ded66e3c73b87a02b00f5da7962c9e80ce5351a2690952667a4954da4cc2aae->enter($__internal_9ded66e3c73b87a02b00f5da7962c9e80ce5351a2690952667a4954da4cc2aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9ded66e3c73b87a02b00f5da7962c9e80ce5351a2690952667a4954da4cc2aae->leave($__internal_9ded66e3c73b87a02b00f5da7962c9e80ce5351a2690952667a4954da4cc2aae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
