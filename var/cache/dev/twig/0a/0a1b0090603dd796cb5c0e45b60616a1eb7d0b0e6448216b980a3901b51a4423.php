<?php

/* base.html.twig */
class __TwigTemplate_cb88f077676efb57a4355b420c3f22d6c7a5f99b9d8ed300ab60a255526e56ea extends Twig_Template
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
        $__internal_e86d2a03cdb6f3beeb776cde9fc1b63b5591e22c097eef926470ad184ce37d81 = $this->env->getExtension("native_profiler");
        $__internal_e86d2a03cdb6f3beeb776cde9fc1b63b5591e22c097eef926470ad184ce37d81->enter($__internal_e86d2a03cdb6f3beeb776cde9fc1b63b5591e22c097eef926470ad184ce37d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e86d2a03cdb6f3beeb776cde9fc1b63b5591e22c097eef926470ad184ce37d81->leave($__internal_e86d2a03cdb6f3beeb776cde9fc1b63b5591e22c097eef926470ad184ce37d81_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aeb8aa49c0db25deb2b9fda5c0433400989beb9028d6c6e310bfa8cbecf0c95 = $this->env->getExtension("native_profiler");
        $__internal_9aeb8aa49c0db25deb2b9fda5c0433400989beb9028d6c6e310bfa8cbecf0c95->enter($__internal_9aeb8aa49c0db25deb2b9fda5c0433400989beb9028d6c6e310bfa8cbecf0c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_9aeb8aa49c0db25deb2b9fda5c0433400989beb9028d6c6e310bfa8cbecf0c95->leave($__internal_9aeb8aa49c0db25deb2b9fda5c0433400989beb9028d6c6e310bfa8cbecf0c95_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ac239cdea41f33ee06a7af8578cf2daf9918954e674f613cafe66649e8fa786 = $this->env->getExtension("native_profiler");
        $__internal_2ac239cdea41f33ee06a7af8578cf2daf9918954e674f613cafe66649e8fa786->enter($__internal_2ac239cdea41f33ee06a7af8578cf2daf9918954e674f613cafe66649e8fa786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2ac239cdea41f33ee06a7af8578cf2daf9918954e674f613cafe66649e8fa786->leave($__internal_2ac239cdea41f33ee06a7af8578cf2daf9918954e674f613cafe66649e8fa786_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_288f39f6cec458125476f7a7c2b75eed646fbb43730b386584693c894733f1c3 = $this->env->getExtension("native_profiler");
        $__internal_288f39f6cec458125476f7a7c2b75eed646fbb43730b386584693c894733f1c3->enter($__internal_288f39f6cec458125476f7a7c2b75eed646fbb43730b386584693c894733f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_288f39f6cec458125476f7a7c2b75eed646fbb43730b386584693c894733f1c3->leave($__internal_288f39f6cec458125476f7a7c2b75eed646fbb43730b386584693c894733f1c3_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae518ac7d386633468888bd0b54843f74355b20b6b080e5984631369c62e7c19 = $this->env->getExtension("native_profiler");
        $__internal_ae518ac7d386633468888bd0b54843f74355b20b6b080e5984631369c62e7c19->enter($__internal_ae518ac7d386633468888bd0b54843f74355b20b6b080e5984631369c62e7c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ae518ac7d386633468888bd0b54843f74355b20b6b080e5984631369c62e7c19->leave($__internal_ae518ac7d386633468888bd0b54843f74355b20b6b080e5984631369c62e7c19_prof);

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
