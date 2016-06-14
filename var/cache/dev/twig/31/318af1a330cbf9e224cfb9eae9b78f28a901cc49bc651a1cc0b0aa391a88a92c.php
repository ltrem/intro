<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_879117dbfb81902c9509c274b8207316af0359dbf82b4580932811411591c411 extends Twig_Template
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
        $__internal_f1cd6d2da2e34d9f7ef29a695e36cbb11e7812c5fa80927863e746b657ff832b = $this->env->getExtension("native_profiler");
        $__internal_f1cd6d2da2e34d9f7ef29a695e36cbb11e7812c5fa80927863e746b657ff832b->enter($__internal_f1cd6d2da2e34d9f7ef29a695e36cbb11e7812c5fa80927863e746b657ff832b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f1cd6d2da2e34d9f7ef29a695e36cbb11e7812c5fa80927863e746b657ff832b->leave($__internal_f1cd6d2da2e34d9f7ef29a695e36cbb11e7812c5fa80927863e746b657ff832b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c41bb22ecacc78154f2bcf4b25573b24f15c201243e1df5befca19489e875f77 = $this->env->getExtension("native_profiler");
        $__internal_c41bb22ecacc78154f2bcf4b25573b24f15c201243e1df5befca19489e875f77->enter($__internal_c41bb22ecacc78154f2bcf4b25573b24f15c201243e1df5befca19489e875f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c41bb22ecacc78154f2bcf4b25573b24f15c201243e1df5befca19489e875f77->leave($__internal_c41bb22ecacc78154f2bcf4b25573b24f15c201243e1df5befca19489e875f77_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4605fac8b3269ff005a30092ac13311eb225e6b25d5b2e065d0b5660e8fd1607 = $this->env->getExtension("native_profiler");
        $__internal_4605fac8b3269ff005a30092ac13311eb225e6b25d5b2e065d0b5660e8fd1607->enter($__internal_4605fac8b3269ff005a30092ac13311eb225e6b25d5b2e065d0b5660e8fd1607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4605fac8b3269ff005a30092ac13311eb225e6b25d5b2e065d0b5660e8fd1607->leave($__internal_4605fac8b3269ff005a30092ac13311eb225e6b25d5b2e065d0b5660e8fd1607_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_de08c3582c94c41d6cb4825b5a051049ce64e51cae127e6f80a9b364bafb7f55 = $this->env->getExtension("native_profiler");
        $__internal_de08c3582c94c41d6cb4825b5a051049ce64e51cae127e6f80a9b364bafb7f55->enter($__internal_de08c3582c94c41d6cb4825b5a051049ce64e51cae127e6f80a9b364bafb7f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_de08c3582c94c41d6cb4825b5a051049ce64e51cae127e6f80a9b364bafb7f55->leave($__internal_de08c3582c94c41d6cb4825b5a051049ce64e51cae127e6f80a9b364bafb7f55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
