<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ff7c32c466a465642f5df82515a0bacfaf84b900fff77e660c057efc49e2c442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957e4980d5001fb16ec19fd07276f2585b45d93b89bc79b003f63e5c27632883 = $this->env->getExtension("native_profiler");
        $__internal_957e4980d5001fb16ec19fd07276f2585b45d93b89bc79b003f63e5c27632883->enter($__internal_957e4980d5001fb16ec19fd07276f2585b45d93b89bc79b003f63e5c27632883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957e4980d5001fb16ec19fd07276f2585b45d93b89bc79b003f63e5c27632883->leave($__internal_957e4980d5001fb16ec19fd07276f2585b45d93b89bc79b003f63e5c27632883_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c6d5d568547750de5af7bca8d70b5ca14ea636f1d2e882eeb913df57ee682e8 = $this->env->getExtension("native_profiler");
        $__internal_1c6d5d568547750de5af7bca8d70b5ca14ea636f1d2e882eeb913df57ee682e8->enter($__internal_1c6d5d568547750de5af7bca8d70b5ca14ea636f1d2e882eeb913df57ee682e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c6d5d568547750de5af7bca8d70b5ca14ea636f1d2e882eeb913df57ee682e8->leave($__internal_1c6d5d568547750de5af7bca8d70b5ca14ea636f1d2e882eeb913df57ee682e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_575e80454b7cb555bb17a4b213d849c7156ea44aa3bfd27a4622c33f8d4e92be = $this->env->getExtension("native_profiler");
        $__internal_575e80454b7cb555bb17a4b213d849c7156ea44aa3bfd27a4622c33f8d4e92be->enter($__internal_575e80454b7cb555bb17a4b213d849c7156ea44aa3bfd27a4622c33f8d4e92be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_575e80454b7cb555bb17a4b213d849c7156ea44aa3bfd27a4622c33f8d4e92be->leave($__internal_575e80454b7cb555bb17a4b213d849c7156ea44aa3bfd27a4622c33f8d4e92be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea330863434f0dd0fa220199e7dfe31a8f1b28ca1b8db9f26600b6191c624ec = $this->env->getExtension("native_profiler");
        $__internal_5ea330863434f0dd0fa220199e7dfe31a8f1b28ca1b8db9f26600b6191c624ec->enter($__internal_5ea330863434f0dd0fa220199e7dfe31a8f1b28ca1b8db9f26600b6191c624ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5ea330863434f0dd0fa220199e7dfe31a8f1b28ca1b8db9f26600b6191c624ec->leave($__internal_5ea330863434f0dd0fa220199e7dfe31a8f1b28ca1b8db9f26600b6191c624ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
