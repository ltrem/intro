<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6bada780ba59925b44806c7d1f44862add69cb5fec92ef1fd0339d6844c985fb extends Twig_Template
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
        $__internal_ccf20e91c97dd6a186f96b220e8afe4a810897d0b1e5d7b4ff52bceefb5fefba = $this->env->getExtension("native_profiler");
        $__internal_ccf20e91c97dd6a186f96b220e8afe4a810897d0b1e5d7b4ff52bceefb5fefba->enter($__internal_ccf20e91c97dd6a186f96b220e8afe4a810897d0b1e5d7b4ff52bceefb5fefba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf20e91c97dd6a186f96b220e8afe4a810897d0b1e5d7b4ff52bceefb5fefba->leave($__internal_ccf20e91c97dd6a186f96b220e8afe4a810897d0b1e5d7b4ff52bceefb5fefba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e37ea955aa3cf150db2db7853bab349f7a6969270df872cd59cee692f4b0b83 = $this->env->getExtension("native_profiler");
        $__internal_8e37ea955aa3cf150db2db7853bab349f7a6969270df872cd59cee692f4b0b83->enter($__internal_8e37ea955aa3cf150db2db7853bab349f7a6969270df872cd59cee692f4b0b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8e37ea955aa3cf150db2db7853bab349f7a6969270df872cd59cee692f4b0b83->leave($__internal_8e37ea955aa3cf150db2db7853bab349f7a6969270df872cd59cee692f4b0b83_prof);

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
