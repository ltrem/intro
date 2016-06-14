<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_30e2bae64c603d0392e375bfa4d8515c40cf78c72f11c93aaa895cd718ad26f8 extends Twig_Template
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
        $__internal_9bdd1323c473b0822ee0494400eeafb3a9cac14032831901081c6a0064f0f1a3 = $this->env->getExtension("native_profiler");
        $__internal_9bdd1323c473b0822ee0494400eeafb3a9cac14032831901081c6a0064f0f1a3->enter($__internal_9bdd1323c473b0822ee0494400eeafb3a9cac14032831901081c6a0064f0f1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_9bdd1323c473b0822ee0494400eeafb3a9cac14032831901081c6a0064f0f1a3->leave($__internal_9bdd1323c473b0822ee0494400eeafb3a9cac14032831901081c6a0064f0f1a3_prof);

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
