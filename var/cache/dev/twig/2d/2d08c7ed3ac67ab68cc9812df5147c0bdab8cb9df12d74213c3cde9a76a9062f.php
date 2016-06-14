<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ba0db1565d8e1dd1ea67c9e46d85a5d82ff431b2f3cab888a67d61deccab827d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8ba953640cafe011d92811f1ffa716a267866f717875ef92a96d599b3e812fe4 = $this->env->getExtension("native_profiler");
        $__internal_8ba953640cafe011d92811f1ffa716a267866f717875ef92a96d599b3e812fe4->enter($__internal_8ba953640cafe011d92811f1ffa716a267866f717875ef92a96d599b3e812fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba953640cafe011d92811f1ffa716a267866f717875ef92a96d599b3e812fe4->leave($__internal_8ba953640cafe011d92811f1ffa716a267866f717875ef92a96d599b3e812fe4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0425e29a1e244c30c6c19a17dff18d3fd1aaca3bd9209354ea3675a32e58c65 = $this->env->getExtension("native_profiler");
        $__internal_e0425e29a1e244c30c6c19a17dff18d3fd1aaca3bd9209354ea3675a32e58c65->enter($__internal_e0425e29a1e244c30c6c19a17dff18d3fd1aaca3bd9209354ea3675a32e58c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e0425e29a1e244c30c6c19a17dff18d3fd1aaca3bd9209354ea3675a32e58c65->leave($__internal_e0425e29a1e244c30c6c19a17dff18d3fd1aaca3bd9209354ea3675a32e58c65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
