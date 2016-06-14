<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e27cb06e5652948253db65e5ac3eada5d25b15c7b417c23344ddb34080b9caf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_bb6646e85ce829f059c9785f350b3e11e515b79cf0bc1917d2b2e55f36441b92 = $this->env->getExtension("native_profiler");
        $__internal_bb6646e85ce829f059c9785f350b3e11e515b79cf0bc1917d2b2e55f36441b92->enter($__internal_bb6646e85ce829f059c9785f350b3e11e515b79cf0bc1917d2b2e55f36441b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6646e85ce829f059c9785f350b3e11e515b79cf0bc1917d2b2e55f36441b92->leave($__internal_bb6646e85ce829f059c9785f350b3e11e515b79cf0bc1917d2b2e55f36441b92_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa532c71f0b985a58e3835ae72b57a5dfc22472eb57bd2a6d013964a2e0e67e2 = $this->env->getExtension("native_profiler");
        $__internal_aa532c71f0b985a58e3835ae72b57a5dfc22472eb57bd2a6d013964a2e0e67e2->enter($__internal_aa532c71f0b985a58e3835ae72b57a5dfc22472eb57bd2a6d013964a2e0e67e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_aa532c71f0b985a58e3835ae72b57a5dfc22472eb57bd2a6d013964a2e0e67e2->leave($__internal_aa532c71f0b985a58e3835ae72b57a5dfc22472eb57bd2a6d013964a2e0e67e2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
