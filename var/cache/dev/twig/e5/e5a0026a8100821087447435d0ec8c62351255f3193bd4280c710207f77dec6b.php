<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_c20d39515ea46147c6ba9ae5b3e7e8c90577b8fb0b485b441261ef57db6336c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_6fcc99f84e74afc60dafa8bfc539ae5dbc2f3430292b1b081ff6cc2f69a38684 = $this->env->getExtension("native_profiler");
        $__internal_6fcc99f84e74afc60dafa8bfc539ae5dbc2f3430292b1b081ff6cc2f69a38684->enter($__internal_6fcc99f84e74afc60dafa8bfc539ae5dbc2f3430292b1b081ff6cc2f69a38684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcc99f84e74afc60dafa8bfc539ae5dbc2f3430292b1b081ff6cc2f69a38684->leave($__internal_6fcc99f84e74afc60dafa8bfc539ae5dbc2f3430292b1b081ff6cc2f69a38684_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d322a979d476a899bda7e8f7b1dc5c7c10b1cd5bb523b13ed0142fb9f116b96f = $this->env->getExtension("native_profiler");
        $__internal_d322a979d476a899bda7e8f7b1dc5c7c10b1cd5bb523b13ed0142fb9f116b96f->enter($__internal_d322a979d476a899bda7e8f7b1dc5c7c10b1cd5bb523b13ed0142fb9f116b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d322a979d476a899bda7e8f7b1dc5c7c10b1cd5bb523b13ed0142fb9f116b96f->leave($__internal_d322a979d476a899bda7e8f7b1dc5c7c10b1cd5bb523b13ed0142fb9f116b96f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
