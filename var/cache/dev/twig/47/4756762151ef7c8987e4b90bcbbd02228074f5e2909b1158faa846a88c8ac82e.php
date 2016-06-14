<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd33bb9e162304d3df521ef2372083fe223b20d68800d5cbe07c274ae9a9abf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_a4111b767a880de50fa39d0f6efb64874a313f12377b9403d7ff9a1cf4bf4347 = $this->env->getExtension("native_profiler");
        $__internal_a4111b767a880de50fa39d0f6efb64874a313f12377b9403d7ff9a1cf4bf4347->enter($__internal_a4111b767a880de50fa39d0f6efb64874a313f12377b9403d7ff9a1cf4bf4347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4111b767a880de50fa39d0f6efb64874a313f12377b9403d7ff9a1cf4bf4347->leave($__internal_a4111b767a880de50fa39d0f6efb64874a313f12377b9403d7ff9a1cf4bf4347_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0adce53962b216b00ed6f1044022f31b5da8dec162694c8d8bb04e4e96d8f19a = $this->env->getExtension("native_profiler");
        $__internal_0adce53962b216b00ed6f1044022f31b5da8dec162694c8d8bb04e4e96d8f19a->enter($__internal_0adce53962b216b00ed6f1044022f31b5da8dec162694c8d8bb04e4e96d8f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0adce53962b216b00ed6f1044022f31b5da8dec162694c8d8bb04e4e96d8f19a->leave($__internal_0adce53962b216b00ed6f1044022f31b5da8dec162694c8d8bb04e4e96d8f19a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9426e65c8c6c47ab5afff4ba2b40fd7848b5c4f225831dc95098cb73e2cb6392 = $this->env->getExtension("native_profiler");
        $__internal_9426e65c8c6c47ab5afff4ba2b40fd7848b5c4f225831dc95098cb73e2cb6392->enter($__internal_9426e65c8c6c47ab5afff4ba2b40fd7848b5c4f225831dc95098cb73e2cb6392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9426e65c8c6c47ab5afff4ba2b40fd7848b5c4f225831dc95098cb73e2cb6392->leave($__internal_9426e65c8c6c47ab5afff4ba2b40fd7848b5c4f225831dc95098cb73e2cb6392_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3138e846bb25cbe0dd578993748a1d9c2e2b73548278cb9e64dc2731cfa9601 = $this->env->getExtension("native_profiler");
        $__internal_b3138e846bb25cbe0dd578993748a1d9c2e2b73548278cb9e64dc2731cfa9601->enter($__internal_b3138e846bb25cbe0dd578993748a1d9c2e2b73548278cb9e64dc2731cfa9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3138e846bb25cbe0dd578993748a1d9c2e2b73548278cb9e64dc2731cfa9601->leave($__internal_b3138e846bb25cbe0dd578993748a1d9c2e2b73548278cb9e64dc2731cfa9601_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
