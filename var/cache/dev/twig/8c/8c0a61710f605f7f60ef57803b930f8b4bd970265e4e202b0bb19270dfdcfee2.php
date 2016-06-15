<?php

/* base.html.twig */
class __TwigTemplate_32de8ea5f88136aba99ad95148e20ed14fed5a907cbac104dbd1048f5c9f2979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd0ffdb3ac58b0a0f3d7adc9cf3638624121a48b03fbe8be422bcbc8cfdb125 = $this->env->getExtension("native_profiler");
        $__internal_ecd0ffdb3ac58b0a0f3d7adc9cf3638624121a48b03fbe8be422bcbc8cfdb125->enter($__internal_ecd0ffdb3ac58b0a0f3d7adc9cf3638624121a48b03fbe8be422bcbc8cfdb125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- DOCTYPE html-->  
<html>  
<head>  
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>  
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">  
    <!-- Bootstrap -->  
  
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->  
    <!--[if lt IE 9]>  
    <script src=\"../../assets/js/html5shiv.js\"></script>  
    <script src=\"../../assets/js/respond.min.js\"></script>  
    <![endif]-->  
</head>  
<body>
    ";
        // line 21
        $this->loadTemplate("::naviguation.html.twig", "base.html.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        echo "  
  
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "  
</body>  
</html> ";
        
        $__internal_ecd0ffdb3ac58b0a0f3d7adc9cf3638624121a48b03fbe8be422bcbc8cfdb125->leave($__internal_ecd0ffdb3ac58b0a0f3d7adc9cf3638624121a48b03fbe8be422bcbc8cfdb125_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd2f2337ebb85405c3b4feb85fd669494ac5c88c950cc93a5e32823c32a5c98 = $this->env->getExtension("native_profiler");
        $__internal_edd2f2337ebb85405c3b4feb85fd669494ac5c88c950cc93a5e32823c32a5c98->enter($__internal_edd2f2337ebb85405c3b4feb85fd669494ac5c88c950cc93a5e32823c32a5c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_edd2f2337ebb85405c3b4feb85fd669494ac5c88c950cc93a5e32823c32a5c98->leave($__internal_edd2f2337ebb85405c3b4feb85fd669494ac5c88c950cc93a5e32823c32a5c98_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b91cdf925ee4f1f566ae33df42766fe96cbead51c00c74d081a4a3653b7c0c8 = $this->env->getExtension("native_profiler");
        $__internal_4b91cdf925ee4f1f566ae33df42766fe96cbead51c00c74d081a4a3653b7c0c8->enter($__internal_4b91cdf925ee4f1f566ae33df42766fe96cbead51c00c74d081a4a3653b7c0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  
        ";
        // line 9
        // asset "425e28c"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_425e28c") : $this->env->getExtension('asset')->getAssetUrl("css/425e28c.css");
        echo "  
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">  
        ";
        unset($context["asset_url"]);
        // line 11
        echo "  
    ";
        
        $__internal_4b91cdf925ee4f1f566ae33df42766fe96cbead51c00c74d081a4a3653b7c0c8->leave($__internal_4b91cdf925ee4f1f566ae33df42766fe96cbead51c00c74d081a4a3653b7c0c8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a7afde8364764ad35fb5d1c8cd5631f9c950acf380ba93286c777116d2ff5b = $this->env->getExtension("native_profiler");
        $__internal_78a7afde8364764ad35fb5d1c8cd5631f9c950acf380ba93286c777116d2ff5b->enter($__internal_78a7afde8364764ad35fb5d1c8cd5631f9c950acf380ba93286c777116d2ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78a7afde8364764ad35fb5d1c8cd5631f9c950acf380ba93286c777116d2ff5b->leave($__internal_78a7afde8364764ad35fb5d1c8cd5631f9c950acf380ba93286c777116d2ff5b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e87431a206fab079d2eeaa14f684d84634063783b907217fa2e84ec1e414af22 = $this->env->getExtension("native_profiler");
        $__internal_e87431a206fab079d2eeaa14f684d84634063783b907217fa2e84ec1e414af22->enter($__internal_e87431a206fab079d2eeaa14f684d84634063783b907217fa2e84ec1e414af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  
        ";
        // line 26
        // asset "06837fc"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06837fc") : $this->env->getExtension('asset')->getAssetUrl("js/06837fc.js");
        echo "  
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>  
        ";
        unset($context["asset_url"]);
        // line 28
        echo "  
    ";
        
        $__internal_e87431a206fab079d2eeaa14f684d84634063783b907217fa2e84ec1e414af22->leave($__internal_e87431a206fab079d2eeaa14f684d84634063783b907217fa2e84ec1e414af22_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 28,  134 => 27,  129 => 26,  121 => 25,  110 => 23,  102 => 11,  97 => 10,  92 => 9,  84 => 8,  72 => 4,  63 => 29,  61 => 25,  56 => 23,  53 => 22,  51 => 21,  40 => 12,  38 => 8,  31 => 4,  26 => 1,);
    }
}
/* <!-- DOCTYPE html-->  */
/* <html>  */
/* <head>  */
/*     <title>{% block title %}Bootstrap 101 Template{% endblock %}</title>  */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">  */
/*     <!-- Bootstrap -->  */
/*   */
/*     {% block stylesheets %}  */
/*         {% stylesheets '@bootstrap_less' combine=true %}  */
/*             <link href="{{ asset_url }}" type="text/css" rel="stylesheet">  */
/*         {% endstylesheets %}  */
/*     {% endblock %}  */
/*   */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->  */
/*     <!--[if lt IE 9]>  */
/*     <script src="../../assets/js/html5shiv.js"></script>  */
/*     <script src="../../assets/js/respond.min.js"></script>  */
/*     <![endif]-->  */
/* </head>  */
/* <body>*/
/*     {% include('::naviguation.html.twig') %}*/
/* */
/*     {% block body %}{% endblock %}  */
/*   */
/*     {% block javascripts %}  */
/*         {% javascripts '@jquery_js' '@bootstrap_js' filter='?yui_js' combine=true %}  */
/*             <script src="{{ asset_url }}"></script>  */
/*         {% endjavascripts %}  */
/*     {% endblock %}  */
/* </body>  */
/* </html> */
