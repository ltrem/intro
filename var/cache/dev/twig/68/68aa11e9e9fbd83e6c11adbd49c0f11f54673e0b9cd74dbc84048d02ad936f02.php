<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_21d404672eac543fb618d7ec657cd1b5715999574d105d7ddcaec99b55844d98 extends Twig_Template
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
        $__internal_54f2b594f5121e40fa92b06ef2fc192a63d32d32613a7a027acf602ee9cb18fc = $this->env->getExtension("native_profiler");
        $__internal_54f2b594f5121e40fa92b06ef2fc192a63d32d32613a7a027acf602ee9cb18fc->enter($__internal_54f2b594f5121e40fa92b06ef2fc192a63d32d32613a7a027acf602ee9cb18fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_54f2b594f5121e40fa92b06ef2fc192a63d32d32613a7a027acf602ee9cb18fc->leave($__internal_54f2b594f5121e40fa92b06ef2fc192a63d32d32613a7a027acf602ee9cb18fc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0937b47c2d9ac87f5291e23051a7098be1715a248dc775c59664412f7e23ecec = $this->env->getExtension("native_profiler");
        $__internal_0937b47c2d9ac87f5291e23051a7098be1715a248dc775c59664412f7e23ecec->enter($__internal_0937b47c2d9ac87f5291e23051a7098be1715a248dc775c59664412f7e23ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0937b47c2d9ac87f5291e23051a7098be1715a248dc775c59664412f7e23ecec->leave($__internal_0937b47c2d9ac87f5291e23051a7098be1715a248dc775c59664412f7e23ecec_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_09a0cdce98be98408072a04af7f74e53a4c171353dc7119af62b7c105be42b90 = $this->env->getExtension("native_profiler");
        $__internal_09a0cdce98be98408072a04af7f74e53a4c171353dc7119af62b7c105be42b90->enter($__internal_09a0cdce98be98408072a04af7f74e53a4c171353dc7119af62b7c105be42b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_09a0cdce98be98408072a04af7f74e53a4c171353dc7119af62b7c105be42b90->leave($__internal_09a0cdce98be98408072a04af7f74e53a4c171353dc7119af62b7c105be42b90_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e4af5bf2983027df860f6129882cf30e94495b95a85afa88f0a7faba86731dee = $this->env->getExtension("native_profiler");
        $__internal_e4af5bf2983027df860f6129882cf30e94495b95a85afa88f0a7faba86731dee->enter($__internal_e4af5bf2983027df860f6129882cf30e94495b95a85afa88f0a7faba86731dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e4af5bf2983027df860f6129882cf30e94495b95a85afa88f0a7faba86731dee->leave($__internal_e4af5bf2983027df860f6129882cf30e94495b95a85afa88f0a7faba86731dee_prof);

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
