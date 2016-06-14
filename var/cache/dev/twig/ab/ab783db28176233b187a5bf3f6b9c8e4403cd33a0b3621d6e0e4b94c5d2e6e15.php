<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_a38db438da1a3544f420f35c143f328e62de2a60c1c40a32deb6eaceede69e51 extends Twig_Template
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
        $__internal_c5569fb6792d4be3e737ff277cf323daad98af3d9ca761e859a72fc2bed4208e = $this->env->getExtension("native_profiler");
        $__internal_c5569fb6792d4be3e737ff277cf323daad98af3d9ca761e859a72fc2bed4208e->enter($__internal_c5569fb6792d4be3e737ff277cf323daad98af3d9ca761e859a72fc2bed4208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c5569fb6792d4be3e737ff277cf323daad98af3d9ca761e859a72fc2bed4208e->leave($__internal_c5569fb6792d4be3e737ff277cf323daad98af3d9ca761e859a72fc2bed4208e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0adba72d63033ca794816830d7243edafef640d7bcfd1752333f369a47d4b2b9 = $this->env->getExtension("native_profiler");
        $__internal_0adba72d63033ca794816830d7243edafef640d7bcfd1752333f369a47d4b2b9->enter($__internal_0adba72d63033ca794816830d7243edafef640d7bcfd1752333f369a47d4b2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0adba72d63033ca794816830d7243edafef640d7bcfd1752333f369a47d4b2b9->leave($__internal_0adba72d63033ca794816830d7243edafef640d7bcfd1752333f369a47d4b2b9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0799559d8563a79d6af9ac29c9451336292f072b6ec9d7603727686427e93009 = $this->env->getExtension("native_profiler");
        $__internal_0799559d8563a79d6af9ac29c9451336292f072b6ec9d7603727686427e93009->enter($__internal_0799559d8563a79d6af9ac29c9451336292f072b6ec9d7603727686427e93009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0799559d8563a79d6af9ac29c9451336292f072b6ec9d7603727686427e93009->leave($__internal_0799559d8563a79d6af9ac29c9451336292f072b6ec9d7603727686427e93009_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dc74f0d1851e5d8c784432841826048b5f479b794d6139669f914acb261f6456 = $this->env->getExtension("native_profiler");
        $__internal_dc74f0d1851e5d8c784432841826048b5f479b794d6139669f914acb261f6456->enter($__internal_dc74f0d1851e5d8c784432841826048b5f479b794d6139669f914acb261f6456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc74f0d1851e5d8c784432841826048b5f479b794d6139669f914acb261f6456->leave($__internal_dc74f0d1851e5d8c784432841826048b5f479b794d6139669f914acb261f6456_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
