<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_52c56bf2063d1da3e612ffb40db5329f710fd23667f4429407fff138ae22602e extends Twig_Template
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
        $__internal_6b1103c7424dc20e9f40869035d696db266456293059008162419bb91a6eb088 = $this->env->getExtension("native_profiler");
        $__internal_6b1103c7424dc20e9f40869035d696db266456293059008162419bb91a6eb088->enter($__internal_6b1103c7424dc20e9f40869035d696db266456293059008162419bb91a6eb088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_6b1103c7424dc20e9f40869035d696db266456293059008162419bb91a6eb088->leave($__internal_6b1103c7424dc20e9f40869035d696db266456293059008162419bb91a6eb088_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
