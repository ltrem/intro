<?php

/* ::base.html.twig */
class __TwigTemplate_af750de9a8313bacae32cb75ccc0627d0e3b4cc832b00b7c974527143f4637fb extends Twig_Template
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
        $__internal_8a36b8025fd71b0f609e5d925dc72b9c4fa7f8bc865986a5fa19605fc2e2edfc = $this->env->getExtension("native_profiler");
        $__internal_8a36b8025fd71b0f609e5d925dc72b9c4fa7f8bc865986a5fa19605fc2e2edfc->enter($__internal_8a36b8025fd71b0f609e5d925dc72b9c4fa7f8bc865986a5fa19605fc2e2edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->loadTemplate("::naviguation.html.twig", "::base.html.twig", 21)->display($context);
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
        
        $__internal_8a36b8025fd71b0f609e5d925dc72b9c4fa7f8bc865986a5fa19605fc2e2edfc->leave($__internal_8a36b8025fd71b0f609e5d925dc72b9c4fa7f8bc865986a5fa19605fc2e2edfc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b293aad174465f6765cbf41d6bf69e4177a5776263542c7ec9be36737503225d = $this->env->getExtension("native_profiler");
        $__internal_b293aad174465f6765cbf41d6bf69e4177a5776263542c7ec9be36737503225d->enter($__internal_b293aad174465f6765cbf41d6bf69e4177a5776263542c7ec9be36737503225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_b293aad174465f6765cbf41d6bf69e4177a5776263542c7ec9be36737503225d->leave($__internal_b293aad174465f6765cbf41d6bf69e4177a5776263542c7ec9be36737503225d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0311315b6d1fb38e2d3323752eb58da25b1411f51587ef146a4ff0fae9064db2 = $this->env->getExtension("native_profiler");
        $__internal_0311315b6d1fb38e2d3323752eb58da25b1411f51587ef146a4ff0fae9064db2->enter($__internal_0311315b6d1fb38e2d3323752eb58da25b1411f51587ef146a4ff0fae9064db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0311315b6d1fb38e2d3323752eb58da25b1411f51587ef146a4ff0fae9064db2->leave($__internal_0311315b6d1fb38e2d3323752eb58da25b1411f51587ef146a4ff0fae9064db2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_eceb4d4342462242efae5414c5019c4e57aa5ae9ed95332016dd488336635703 = $this->env->getExtension("native_profiler");
        $__internal_eceb4d4342462242efae5414c5019c4e57aa5ae9ed95332016dd488336635703->enter($__internal_eceb4d4342462242efae5414c5019c4e57aa5ae9ed95332016dd488336635703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eceb4d4342462242efae5414c5019c4e57aa5ae9ed95332016dd488336635703->leave($__internal_eceb4d4342462242efae5414c5019c4e57aa5ae9ed95332016dd488336635703_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f416c8fd0f350a39413b56a7da4b13e3b93d14079aefe2de803d9f5b0214381f = $this->env->getExtension("native_profiler");
        $__internal_f416c8fd0f350a39413b56a7da4b13e3b93d14079aefe2de803d9f5b0214381f->enter($__internal_f416c8fd0f350a39413b56a7da4b13e3b93d14079aefe2de803d9f5b0214381f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f416c8fd0f350a39413b56a7da4b13e3b93d14079aefe2de803d9f5b0214381f->leave($__internal_f416c8fd0f350a39413b56a7da4b13e3b93d14079aefe2de803d9f5b0214381f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
