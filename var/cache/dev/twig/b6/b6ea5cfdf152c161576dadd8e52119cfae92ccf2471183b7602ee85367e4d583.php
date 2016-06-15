<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1ba60ffe6037346ce7bb3e211e5d3b2d8cb05ad359938e2374a8c0f570f175d9 extends Twig_Template
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
        $__internal_db8deb025cd59d1a4ab4c5855ded352b7f1ed7c5d414e303d6744164539bdb15 = $this->env->getExtension("native_profiler");
        $__internal_db8deb025cd59d1a4ab4c5855ded352b7f1ed7c5d414e303d6744164539bdb15->enter($__internal_db8deb025cd59d1a4ab4c5855ded352b7f1ed7c5d414e303d6744164539bdb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_db8deb025cd59d1a4ab4c5855ded352b7f1ed7c5d414e303d6744164539bdb15->leave($__internal_db8deb025cd59d1a4ab4c5855ded352b7f1ed7c5d414e303d6744164539bdb15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05465825c0088575ddb91ba98791ad0c85a15f22c6d7b79104f4123b86f14ff1 = $this->env->getExtension("native_profiler");
        $__internal_05465825c0088575ddb91ba98791ad0c85a15f22c6d7b79104f4123b86f14ff1->enter($__internal_05465825c0088575ddb91ba98791ad0c85a15f22c6d7b79104f4123b86f14ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_05465825c0088575ddb91ba98791ad0c85a15f22c6d7b79104f4123b86f14ff1->leave($__internal_05465825c0088575ddb91ba98791ad0c85a15f22c6d7b79104f4123b86f14ff1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aa38827bf71fc0d01384f387c1116c10d1b8503e3a05a28f210c0e29dfd435e7 = $this->env->getExtension("native_profiler");
        $__internal_aa38827bf71fc0d01384f387c1116c10d1b8503e3a05a28f210c0e29dfd435e7->enter($__internal_aa38827bf71fc0d01384f387c1116c10d1b8503e3a05a28f210c0e29dfd435e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa38827bf71fc0d01384f387c1116c10d1b8503e3a05a28f210c0e29dfd435e7->leave($__internal_aa38827bf71fc0d01384f387c1116c10d1b8503e3a05a28f210c0e29dfd435e7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7716191eeb0f49a013b22cf5c3e91436c7867797ff71c8e87041bb8d94c73a5f = $this->env->getExtension("native_profiler");
        $__internal_7716191eeb0f49a013b22cf5c3e91436c7867797ff71c8e87041bb8d94c73a5f->enter($__internal_7716191eeb0f49a013b22cf5c3e91436c7867797ff71c8e87041bb8d94c73a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7716191eeb0f49a013b22cf5c3e91436c7867797ff71c8e87041bb8d94c73a5f->leave($__internal_7716191eeb0f49a013b22cf5c3e91436c7867797ff71c8e87041bb8d94c73a5f_prof);

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
