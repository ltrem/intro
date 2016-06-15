<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_60b5c6b4cf5d63d637b143357dfada8dd67d66074f6158cd99b8c08d356a85bb extends Twig_Template
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
        $__internal_8a86aed9b5c87dbae7bec8e6597b4215fea9ee2051a5270f68916b9c7de4ef10 = $this->env->getExtension("native_profiler");
        $__internal_8a86aed9b5c87dbae7bec8e6597b4215fea9ee2051a5270f68916b9c7de4ef10->enter($__internal_8a86aed9b5c87dbae7bec8e6597b4215fea9ee2051a5270f68916b9c7de4ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a86aed9b5c87dbae7bec8e6597b4215fea9ee2051a5270f68916b9c7de4ef10->leave($__internal_8a86aed9b5c87dbae7bec8e6597b4215fea9ee2051a5270f68916b9c7de4ef10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c41f22ce328336bad1c4a10835c7f3c89674a5e9daac2981819fa7cf68e95800 = $this->env->getExtension("native_profiler");
        $__internal_c41f22ce328336bad1c4a10835c7f3c89674a5e9daac2981819fa7cf68e95800->enter($__internal_c41f22ce328336bad1c4a10835c7f3c89674a5e9daac2981819fa7cf68e95800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c41f22ce328336bad1c4a10835c7f3c89674a5e9daac2981819fa7cf68e95800->leave($__internal_c41f22ce328336bad1c4a10835c7f3c89674a5e9daac2981819fa7cf68e95800_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c26c85ef091a18064af8b93266c9e5461b3c69ba53c30ae8ef5f5f3bc4be9da6 = $this->env->getExtension("native_profiler");
        $__internal_c26c85ef091a18064af8b93266c9e5461b3c69ba53c30ae8ef5f5f3bc4be9da6->enter($__internal_c26c85ef091a18064af8b93266c9e5461b3c69ba53c30ae8ef5f5f3bc4be9da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c26c85ef091a18064af8b93266c9e5461b3c69ba53c30ae8ef5f5f3bc4be9da6->leave($__internal_c26c85ef091a18064af8b93266c9e5461b3c69ba53c30ae8ef5f5f3bc4be9da6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d632a9fc7f2275a5d1371beb4a3958b1de1877d9da732086f237ecd2197fa264 = $this->env->getExtension("native_profiler");
        $__internal_d632a9fc7f2275a5d1371beb4a3958b1de1877d9da732086f237ecd2197fa264->enter($__internal_d632a9fc7f2275a5d1371beb4a3958b1de1877d9da732086f237ecd2197fa264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d632a9fc7f2275a5d1371beb4a3958b1de1877d9da732086f237ecd2197fa264->leave($__internal_d632a9fc7f2275a5d1371beb4a3958b1de1877d9da732086f237ecd2197fa264_prof);

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
