<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_126fa0fdb5781edff744a93855143111f722ae545323001ae4e15deee06b4884 extends Twig_Template
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
        $__internal_b5465c1e6286d524b18722e478d4ca1798a2a097eee68d1edea81cc9dcf62197 = $this->env->getExtension("native_profiler");
        $__internal_b5465c1e6286d524b18722e478d4ca1798a2a097eee68d1edea81cc9dcf62197->enter($__internal_b5465c1e6286d524b18722e478d4ca1798a2a097eee68d1edea81cc9dcf62197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_b5465c1e6286d524b18722e478d4ca1798a2a097eee68d1edea81cc9dcf62197->leave($__internal_b5465c1e6286d524b18722e478d4ca1798a2a097eee68d1edea81cc9dcf62197_prof);

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
