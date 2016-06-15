<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_883dfc6d43971a415ae1f3e6b8274e1c9a8a25cb622b581cab1656fc0f83d6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_26a80fab4dbc00770475dd230f93c24f08468d6ef95e1f8b2a7f891007ebca98 = $this->env->getExtension("native_profiler");
        $__internal_26a80fab4dbc00770475dd230f93c24f08468d6ef95e1f8b2a7f891007ebca98->enter($__internal_26a80fab4dbc00770475dd230f93c24f08468d6ef95e1f8b2a7f891007ebca98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a80fab4dbc00770475dd230f93c24f08468d6ef95e1f8b2a7f891007ebca98->leave($__internal_26a80fab4dbc00770475dd230f93c24f08468d6ef95e1f8b2a7f891007ebca98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_293923b55da703aec5da1c167e837970bb5ff5c451f89a71f307496c15d30c17 = $this->env->getExtension("native_profiler");
        $__internal_293923b55da703aec5da1c167e837970bb5ff5c451f89a71f307496c15d30c17->enter($__internal_293923b55da703aec5da1c167e837970bb5ff5c451f89a71f307496c15d30c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_293923b55da703aec5da1c167e837970bb5ff5c451f89a71f307496c15d30c17->leave($__internal_293923b55da703aec5da1c167e837970bb5ff5c451f89a71f307496c15d30c17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99db89ca166946ae881fcab8afae70a14e88d73f21fb1b5966b45605290072fa = $this->env->getExtension("native_profiler");
        $__internal_99db89ca166946ae881fcab8afae70a14e88d73f21fb1b5966b45605290072fa->enter($__internal_99db89ca166946ae881fcab8afae70a14e88d73f21fb1b5966b45605290072fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_99db89ca166946ae881fcab8afae70a14e88d73f21fb1b5966b45605290072fa->leave($__internal_99db89ca166946ae881fcab8afae70a14e88d73f21fb1b5966b45605290072fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
