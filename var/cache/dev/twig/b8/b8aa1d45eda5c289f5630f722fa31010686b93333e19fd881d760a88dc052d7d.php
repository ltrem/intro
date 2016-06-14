<?php

/* ::base.html.twig */
class __TwigTemplate_87e88605ea3fef87a94a60185e4ad03560ea76d058840e95db3393c5c8bd35c0 extends Twig_Template
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
        $__internal_5ebcc4bf5518a2d8c946303c51bedeb7753631c6227b879a395590a4b3970bca = $this->env->getExtension("native_profiler");
        $__internal_5ebcc4bf5518a2d8c946303c51bedeb7753631c6227b879a395590a4b3970bca->enter($__internal_5ebcc4bf5518a2d8c946303c51bedeb7753631c6227b879a395590a4b3970bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5ebcc4bf5518a2d8c946303c51bedeb7753631c6227b879a395590a4b3970bca->leave($__internal_5ebcc4bf5518a2d8c946303c51bedeb7753631c6227b879a395590a4b3970bca_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_479ab7954d205b752435bed1375ecf8b803dbf488c6dd146602d45dd89f7f516 = $this->env->getExtension("native_profiler");
        $__internal_479ab7954d205b752435bed1375ecf8b803dbf488c6dd146602d45dd89f7f516->enter($__internal_479ab7954d205b752435bed1375ecf8b803dbf488c6dd146602d45dd89f7f516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_479ab7954d205b752435bed1375ecf8b803dbf488c6dd146602d45dd89f7f516->leave($__internal_479ab7954d205b752435bed1375ecf8b803dbf488c6dd146602d45dd89f7f516_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9eef6320a99939bd1c61d0ce2632c53a3b2d913efa78971a8c35ef4071a141f7 = $this->env->getExtension("native_profiler");
        $__internal_9eef6320a99939bd1c61d0ce2632c53a3b2d913efa78971a8c35ef4071a141f7->enter($__internal_9eef6320a99939bd1c61d0ce2632c53a3b2d913efa78971a8c35ef4071a141f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9eef6320a99939bd1c61d0ce2632c53a3b2d913efa78971a8c35ef4071a141f7->leave($__internal_9eef6320a99939bd1c61d0ce2632c53a3b2d913efa78971a8c35ef4071a141f7_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cf9a0a11949475c3485d75c2e3b15988f3a3a0f4c3bc116bf9fe94dcfdb8cae = $this->env->getExtension("native_profiler");
        $__internal_1cf9a0a11949475c3485d75c2e3b15988f3a3a0f4c3bc116bf9fe94dcfdb8cae->enter($__internal_1cf9a0a11949475c3485d75c2e3b15988f3a3a0f4c3bc116bf9fe94dcfdb8cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1cf9a0a11949475c3485d75c2e3b15988f3a3a0f4c3bc116bf9fe94dcfdb8cae->leave($__internal_1cf9a0a11949475c3485d75c2e3b15988f3a3a0f4c3bc116bf9fe94dcfdb8cae_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8bc611827d39779599b3bfa2a70d003d422c47be519addc9ae2508c42ebebe7 = $this->env->getExtension("native_profiler");
        $__internal_e8bc611827d39779599b3bfa2a70d003d422c47be519addc9ae2508c42ebebe7->enter($__internal_e8bc611827d39779599b3bfa2a70d003d422c47be519addc9ae2508c42ebebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8bc611827d39779599b3bfa2a70d003d422c47be519addc9ae2508c42ebebe7->leave($__internal_e8bc611827d39779599b3bfa2a70d003d422c47be519addc9ae2508c42ebebe7_prof);

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
