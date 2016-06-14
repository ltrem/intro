<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7d5e7792586abec943b5dab34563160c5f6cd90e6e098928a7c6bce6ffc27684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_86e36c9fa2a7a67dd6f23947116a960ec5e2fe78104ba0333d9dfd55504c997a = $this->env->getExtension("native_profiler");
        $__internal_86e36c9fa2a7a67dd6f23947116a960ec5e2fe78104ba0333d9dfd55504c997a->enter($__internal_86e36c9fa2a7a67dd6f23947116a960ec5e2fe78104ba0333d9dfd55504c997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e36c9fa2a7a67dd6f23947116a960ec5e2fe78104ba0333d9dfd55504c997a->leave($__internal_86e36c9fa2a7a67dd6f23947116a960ec5e2fe78104ba0333d9dfd55504c997a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f54e8be2d54afc5c8b56670197810a53b9ae27a30b11baf12092dcb93993b0c0 = $this->env->getExtension("native_profiler");
        $__internal_f54e8be2d54afc5c8b56670197810a53b9ae27a30b11baf12092dcb93993b0c0->enter($__internal_f54e8be2d54afc5c8b56670197810a53b9ae27a30b11baf12092dcb93993b0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f54e8be2d54afc5c8b56670197810a53b9ae27a30b11baf12092dcb93993b0c0->leave($__internal_f54e8be2d54afc5c8b56670197810a53b9ae27a30b11baf12092dcb93993b0c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
