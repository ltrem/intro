<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_93b1034101e953dd7d62b622f3522f43adb0b2f2632ed7e8c0a098cb711c378f extends Twig_Template
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
        $__internal_5663bf70a986d00474c8aa3f291d2bbe119fdf6ff421aae7dca5f993a1e10aca = $this->env->getExtension("native_profiler");
        $__internal_5663bf70a986d00474c8aa3f291d2bbe119fdf6ff421aae7dca5f993a1e10aca->enter($__internal_5663bf70a986d00474c8aa3f291d2bbe119fdf6ff421aae7dca5f993a1e10aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5663bf70a986d00474c8aa3f291d2bbe119fdf6ff421aae7dca5f993a1e10aca->leave($__internal_5663bf70a986d00474c8aa3f291d2bbe119fdf6ff421aae7dca5f993a1e10aca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e388f795950551c17e17298bfb5332312364e47ad5af5581351c0b5df150381 = $this->env->getExtension("native_profiler");
        $__internal_2e388f795950551c17e17298bfb5332312364e47ad5af5581351c0b5df150381->enter($__internal_2e388f795950551c17e17298bfb5332312364e47ad5af5581351c0b5df150381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2e388f795950551c17e17298bfb5332312364e47ad5af5581351c0b5df150381->leave($__internal_2e388f795950551c17e17298bfb5332312364e47ad5af5581351c0b5df150381_prof);

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
