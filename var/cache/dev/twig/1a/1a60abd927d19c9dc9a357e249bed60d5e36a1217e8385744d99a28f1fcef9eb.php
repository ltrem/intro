<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3fc070092062a8beeba04586e5f3aabcd06520525c0014243d1b747b49942606 extends Twig_Template
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
        $__internal_1e014cdb2dcd71783c61364a2a30c288f1cd717fb44f6c06b2cb1161fb693f39 = $this->env->getExtension("native_profiler");
        $__internal_1e014cdb2dcd71783c61364a2a30c288f1cd717fb44f6c06b2cb1161fb693f39->enter($__internal_1e014cdb2dcd71783c61364a2a30c288f1cd717fb44f6c06b2cb1161fb693f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1e014cdb2dcd71783c61364a2a30c288f1cd717fb44f6c06b2cb1161fb693f39->leave($__internal_1e014cdb2dcd71783c61364a2a30c288f1cd717fb44f6c06b2cb1161fb693f39_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a6a3c9e84484cbbacfce3ef72615a770fc4468f34985c1545528cc16f4be3f85 = $this->env->getExtension("native_profiler");
        $__internal_a6a3c9e84484cbbacfce3ef72615a770fc4468f34985c1545528cc16f4be3f85->enter($__internal_a6a3c9e84484cbbacfce3ef72615a770fc4468f34985c1545528cc16f4be3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a6a3c9e84484cbbacfce3ef72615a770fc4468f34985c1545528cc16f4be3f85->leave($__internal_a6a3c9e84484cbbacfce3ef72615a770fc4468f34985c1545528cc16f4be3f85_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0622f1121997620ea0e64c1656ea95295608c52b86887089e6613d034dd65cf = $this->env->getExtension("native_profiler");
        $__internal_a0622f1121997620ea0e64c1656ea95295608c52b86887089e6613d034dd65cf->enter($__internal_a0622f1121997620ea0e64c1656ea95295608c52b86887089e6613d034dd65cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0622f1121997620ea0e64c1656ea95295608c52b86887089e6613d034dd65cf->leave($__internal_a0622f1121997620ea0e64c1656ea95295608c52b86887089e6613d034dd65cf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_25b01d47d931cfa92b5ee6b7531710f320f491e8adae576170215c992b762ce9 = $this->env->getExtension("native_profiler");
        $__internal_25b01d47d931cfa92b5ee6b7531710f320f491e8adae576170215c992b762ce9->enter($__internal_25b01d47d931cfa92b5ee6b7531710f320f491e8adae576170215c992b762ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_25b01d47d931cfa92b5ee6b7531710f320f491e8adae576170215c992b762ce9->leave($__internal_25b01d47d931cfa92b5ee6b7531710f320f491e8adae576170215c992b762ce9_prof);

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
