<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_31624eb06a67695a66b10ec528d716de0afc9595cc668b9600b34a8f9af39a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_2c5ab15090225d439399121b087b578fbba613bd0adc31a513eae65310fc96e2 = $this->env->getExtension("native_profiler");
        $__internal_2c5ab15090225d439399121b087b578fbba613bd0adc31a513eae65310fc96e2->enter($__internal_2c5ab15090225d439399121b087b578fbba613bd0adc31a513eae65310fc96e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5ab15090225d439399121b087b578fbba613bd0adc31a513eae65310fc96e2->leave($__internal_2c5ab15090225d439399121b087b578fbba613bd0adc31a513eae65310fc96e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6ef9266f3c8002edbd542588d62a7176f231f0e39412d0592860b6f68e14208 = $this->env->getExtension("native_profiler");
        $__internal_e6ef9266f3c8002edbd542588d62a7176f231f0e39412d0592860b6f68e14208->enter($__internal_e6ef9266f3c8002edbd542588d62a7176f231f0e39412d0592860b6f68e14208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e6ef9266f3c8002edbd542588d62a7176f231f0e39412d0592860b6f68e14208->leave($__internal_e6ef9266f3c8002edbd542588d62a7176f231f0e39412d0592860b6f68e14208_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
