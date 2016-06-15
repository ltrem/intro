<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_cdc6dea8594c57b80d5661ff1fa0ec961da40ac517fcd984c31288582a34aa64 extends Twig_Template
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
        $__internal_37618817b26f97baa2573d1e1939e0a94e162e751f0d3e15dad35723bb150d4e = $this->env->getExtension("native_profiler");
        $__internal_37618817b26f97baa2573d1e1939e0a94e162e751f0d3e15dad35723bb150d4e->enter($__internal_37618817b26f97baa2573d1e1939e0a94e162e751f0d3e15dad35723bb150d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_37618817b26f97baa2573d1e1939e0a94e162e751f0d3e15dad35723bb150d4e->leave($__internal_37618817b26f97baa2573d1e1939e0a94e162e751f0d3e15dad35723bb150d4e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_401d8eb16968069dfe8282184fd59d8962b5debb2cce57a611780760593dc9d7 = $this->env->getExtension("native_profiler");
        $__internal_401d8eb16968069dfe8282184fd59d8962b5debb2cce57a611780760593dc9d7->enter($__internal_401d8eb16968069dfe8282184fd59d8962b5debb2cce57a611780760593dc9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_401d8eb16968069dfe8282184fd59d8962b5debb2cce57a611780760593dc9d7->leave($__internal_401d8eb16968069dfe8282184fd59d8962b5debb2cce57a611780760593dc9d7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_618682ba7eaab067c4410d6692ad0cc6390736f54dbb20e3eb58816f1468e7bc = $this->env->getExtension("native_profiler");
        $__internal_618682ba7eaab067c4410d6692ad0cc6390736f54dbb20e3eb58816f1468e7bc->enter($__internal_618682ba7eaab067c4410d6692ad0cc6390736f54dbb20e3eb58816f1468e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_618682ba7eaab067c4410d6692ad0cc6390736f54dbb20e3eb58816f1468e7bc->leave($__internal_618682ba7eaab067c4410d6692ad0cc6390736f54dbb20e3eb58816f1468e7bc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ebb01971fb5ddfd5aa2ed4fc09811a7989ac191fa5a7b559a1be811aabde3bf = $this->env->getExtension("native_profiler");
        $__internal_2ebb01971fb5ddfd5aa2ed4fc09811a7989ac191fa5a7b559a1be811aabde3bf->enter($__internal_2ebb01971fb5ddfd5aa2ed4fc09811a7989ac191fa5a7b559a1be811aabde3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2ebb01971fb5ddfd5aa2ed4fc09811a7989ac191fa5a7b559a1be811aabde3bf->leave($__internal_2ebb01971fb5ddfd5aa2ed4fc09811a7989ac191fa5a7b559a1be811aabde3bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
