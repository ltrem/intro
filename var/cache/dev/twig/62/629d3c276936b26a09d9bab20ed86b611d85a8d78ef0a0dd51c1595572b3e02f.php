<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_43ed8d4a829c66f9b8eddace3ea6ee8768aecbea95238dc0f8e3a065e94f587f extends Twig_Template
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
        $__internal_133fc48ac83056e4ef2cf16685a4a5290e01e6506756a61ccd7b2f275e0f7009 = $this->env->getExtension("native_profiler");
        $__internal_133fc48ac83056e4ef2cf16685a4a5290e01e6506756a61ccd7b2f275e0f7009->enter($__internal_133fc48ac83056e4ef2cf16685a4a5290e01e6506756a61ccd7b2f275e0f7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133fc48ac83056e4ef2cf16685a4a5290e01e6506756a61ccd7b2f275e0f7009->leave($__internal_133fc48ac83056e4ef2cf16685a4a5290e01e6506756a61ccd7b2f275e0f7009_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ea6f6497b60257cbfd39a9bb3980609cc14cd157cfddbc0c75d73052a4b4406 = $this->env->getExtension("native_profiler");
        $__internal_9ea6f6497b60257cbfd39a9bb3980609cc14cd157cfddbc0c75d73052a4b4406->enter($__internal_9ea6f6497b60257cbfd39a9bb3980609cc14cd157cfddbc0c75d73052a4b4406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ea6f6497b60257cbfd39a9bb3980609cc14cd157cfddbc0c75d73052a4b4406->leave($__internal_9ea6f6497b60257cbfd39a9bb3980609cc14cd157cfddbc0c75d73052a4b4406_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41e78e9410c09e7ac5c64df586dcffb405025e7ec6c28b9b7b1bf028714a994a = $this->env->getExtension("native_profiler");
        $__internal_41e78e9410c09e7ac5c64df586dcffb405025e7ec6c28b9b7b1bf028714a994a->enter($__internal_41e78e9410c09e7ac5c64df586dcffb405025e7ec6c28b9b7b1bf028714a994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41e78e9410c09e7ac5c64df586dcffb405025e7ec6c28b9b7b1bf028714a994a->leave($__internal_41e78e9410c09e7ac5c64df586dcffb405025e7ec6c28b9b7b1bf028714a994a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b48ffc5bc5ee1ed6f36edae366a23342683501796a8d460557d7f16d4697ab0 = $this->env->getExtension("native_profiler");
        $__internal_1b48ffc5bc5ee1ed6f36edae366a23342683501796a8d460557d7f16d4697ab0->enter($__internal_1b48ffc5bc5ee1ed6f36edae366a23342683501796a8d460557d7f16d4697ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1b48ffc5bc5ee1ed6f36edae366a23342683501796a8d460557d7f16d4697ab0->leave($__internal_1b48ffc5bc5ee1ed6f36edae366a23342683501796a8d460557d7f16d4697ab0_prof);

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
