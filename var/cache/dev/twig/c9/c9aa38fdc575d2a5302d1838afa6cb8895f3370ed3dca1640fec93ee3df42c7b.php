<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_774ab11d1cdb502cc7f31dca0cd63042d3d011f44ee7fb3882704626e9126c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ac0db65ec39312b5518aa922205f9131711c3b45216b28dd414dc60c01a4902 = $this->env->getExtension("native_profiler");
        $__internal_7ac0db65ec39312b5518aa922205f9131711c3b45216b28dd414dc60c01a4902->enter($__internal_7ac0db65ec39312b5518aa922205f9131711c3b45216b28dd414dc60c01a4902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7ac0db65ec39312b5518aa922205f9131711c3b45216b28dd414dc60c01a4902->leave($__internal_7ac0db65ec39312b5518aa922205f9131711c3b45216b28dd414dc60c01a4902_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
