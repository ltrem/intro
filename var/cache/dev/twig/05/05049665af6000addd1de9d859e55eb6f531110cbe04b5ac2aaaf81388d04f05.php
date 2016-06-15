<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_666af76e940a90fdcec450ee9c7f33eac790e514ad66f1dfb60922bf602d60ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_021992f0de19d78f90b7c8623d6e02b3275d8a08fcadbec964706ed2a9e815f4 = $this->env->getExtension("native_profiler");
        $__internal_021992f0de19d78f90b7c8623d6e02b3275d8a08fcadbec964706ed2a9e815f4->enter($__internal_021992f0de19d78f90b7c8623d6e02b3275d8a08fcadbec964706ed2a9e815f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_021992f0de19d78f90b7c8623d6e02b3275d8a08fcadbec964706ed2a9e815f4->leave($__internal_021992f0de19d78f90b7c8623d6e02b3275d8a08fcadbec964706ed2a9e815f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0838690a27b8fcd440c63d5ba846097135d2ad370ba0af822a59a6c48faad634 = $this->env->getExtension("native_profiler");
        $__internal_0838690a27b8fcd440c63d5ba846097135d2ad370ba0af822a59a6c48faad634->enter($__internal_0838690a27b8fcd440c63d5ba846097135d2ad370ba0af822a59a6c48faad634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0838690a27b8fcd440c63d5ba846097135d2ad370ba0af822a59a6c48faad634->leave($__internal_0838690a27b8fcd440c63d5ba846097135d2ad370ba0af822a59a6c48faad634_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_45437210bc5cd46ff470d073bf8cb599f593f7dfdc56b591f3dc6dae2e260e34 = $this->env->getExtension("native_profiler");
        $__internal_45437210bc5cd46ff470d073bf8cb599f593f7dfdc56b591f3dc6dae2e260e34->enter($__internal_45437210bc5cd46ff470d073bf8cb599f593f7dfdc56b591f3dc6dae2e260e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_45437210bc5cd46ff470d073bf8cb599f593f7dfdc56b591f3dc6dae2e260e34->leave($__internal_45437210bc5cd46ff470d073bf8cb599f593f7dfdc56b591f3dc6dae2e260e34_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_77c65f41abcc28682be219ea09fce22924f075d82e2c9c96644e5364e2469412 = $this->env->getExtension("native_profiler");
        $__internal_77c65f41abcc28682be219ea09fce22924f075d82e2c9c96644e5364e2469412->enter($__internal_77c65f41abcc28682be219ea09fce22924f075d82e2c9c96644e5364e2469412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77c65f41abcc28682be219ea09fce22924f075d82e2c9c96644e5364e2469412->leave($__internal_77c65f41abcc28682be219ea09fce22924f075d82e2c9c96644e5364e2469412_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
