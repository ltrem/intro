<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f08f4dd0979d8d5a96c653c4b8205ec1e843a63db698c04d37acb48408c00b39 extends Twig_Template
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
        $__internal_1181cb303298323013cbd5ff1a09851d0d26e21875090231fc342a5988808523 = $this->env->getExtension("native_profiler");
        $__internal_1181cb303298323013cbd5ff1a09851d0d26e21875090231fc342a5988808523->enter($__internal_1181cb303298323013cbd5ff1a09851d0d26e21875090231fc342a5988808523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1181cb303298323013cbd5ff1a09851d0d26e21875090231fc342a5988808523->leave($__internal_1181cb303298323013cbd5ff1a09851d0d26e21875090231fc342a5988808523_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6a4d2f50f57777e366d8ed53ac7ca483c5044be97ad9b9c1f012cd8fa85d72e8 = $this->env->getExtension("native_profiler");
        $__internal_6a4d2f50f57777e366d8ed53ac7ca483c5044be97ad9b9c1f012cd8fa85d72e8->enter($__internal_6a4d2f50f57777e366d8ed53ac7ca483c5044be97ad9b9c1f012cd8fa85d72e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6a4d2f50f57777e366d8ed53ac7ca483c5044be97ad9b9c1f012cd8fa85d72e8->leave($__internal_6a4d2f50f57777e366d8ed53ac7ca483c5044be97ad9b9c1f012cd8fa85d72e8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02ec06c69334644672eb9756666163760f1574923f141be52edf3e773c69832c = $this->env->getExtension("native_profiler");
        $__internal_02ec06c69334644672eb9756666163760f1574923f141be52edf3e773c69832c->enter($__internal_02ec06c69334644672eb9756666163760f1574923f141be52edf3e773c69832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_02ec06c69334644672eb9756666163760f1574923f141be52edf3e773c69832c->leave($__internal_02ec06c69334644672eb9756666163760f1574923f141be52edf3e773c69832c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a93ac239c44d0d8abbdc7fe1154047d6d1a64feb7c323b0f2b1eebdc9572ac0d = $this->env->getExtension("native_profiler");
        $__internal_a93ac239c44d0d8abbdc7fe1154047d6d1a64feb7c323b0f2b1eebdc9572ac0d->enter($__internal_a93ac239c44d0d8abbdc7fe1154047d6d1a64feb7c323b0f2b1eebdc9572ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a93ac239c44d0d8abbdc7fe1154047d6d1a64feb7c323b0f2b1eebdc9572ac0d->leave($__internal_a93ac239c44d0d8abbdc7fe1154047d6d1a64feb7c323b0f2b1eebdc9572ac0d_prof);

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
