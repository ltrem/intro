<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_cbce36aaee52e698c07dfc9c88ecc4ecd9a3137a2b459406941bcb98ce87325d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_4b1e8dde7e08ba96d09063be2001432743b7bc852a933a91043e3c8484bad0ba = $this->env->getExtension("native_profiler");
        $__internal_4b1e8dde7e08ba96d09063be2001432743b7bc852a933a91043e3c8484bad0ba->enter($__internal_4b1e8dde7e08ba96d09063be2001432743b7bc852a933a91043e3c8484bad0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1e8dde7e08ba96d09063be2001432743b7bc852a933a91043e3c8484bad0ba->leave($__internal_4b1e8dde7e08ba96d09063be2001432743b7bc852a933a91043e3c8484bad0ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6499eb5c99bdf7716c2d67235eeef48b768abb7759f14a9b4b2c29fb25d6525 = $this->env->getExtension("native_profiler");
        $__internal_a6499eb5c99bdf7716c2d67235eeef48b768abb7759f14a9b4b2c29fb25d6525->enter($__internal_a6499eb5c99bdf7716c2d67235eeef48b768abb7759f14a9b4b2c29fb25d6525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a6499eb5c99bdf7716c2d67235eeef48b768abb7759f14a9b4b2c29fb25d6525->leave($__internal_a6499eb5c99bdf7716c2d67235eeef48b768abb7759f14a9b4b2c29fb25d6525_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
