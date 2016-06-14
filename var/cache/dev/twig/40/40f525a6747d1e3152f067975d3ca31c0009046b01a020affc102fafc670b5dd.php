<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b976c9a83bcc1358f1db720b334690792243e90c69d6051173b5a08f520a50b4 extends Twig_Template
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
        $__internal_8297ef26387f847d5e515c7b1c2219816e2d0d27e4ec77ad30baef0499e8cb0f = $this->env->getExtension("native_profiler");
        $__internal_8297ef26387f847d5e515c7b1c2219816e2d0d27e4ec77ad30baef0499e8cb0f->enter($__internal_8297ef26387f847d5e515c7b1c2219816e2d0d27e4ec77ad30baef0499e8cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8297ef26387f847d5e515c7b1c2219816e2d0d27e4ec77ad30baef0499e8cb0f->leave($__internal_8297ef26387f847d5e515c7b1c2219816e2d0d27e4ec77ad30baef0499e8cb0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5213e56c12382888c62c12f42b209cf1b4b830275d9ebea67f5329aa555f97a = $this->env->getExtension("native_profiler");
        $__internal_e5213e56c12382888c62c12f42b209cf1b4b830275d9ebea67f5329aa555f97a->enter($__internal_e5213e56c12382888c62c12f42b209cf1b4b830275d9ebea67f5329aa555f97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e5213e56c12382888c62c12f42b209cf1b4b830275d9ebea67f5329aa555f97a->leave($__internal_e5213e56c12382888c62c12f42b209cf1b4b830275d9ebea67f5329aa555f97a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e0da166d758e22f14fa8f478dff7d3659d3dc10c3f92209d8eaa92ef0a4931 = $this->env->getExtension("native_profiler");
        $__internal_22e0da166d758e22f14fa8f478dff7d3659d3dc10c3f92209d8eaa92ef0a4931->enter($__internal_22e0da166d758e22f14fa8f478dff7d3659d3dc10c3f92209d8eaa92ef0a4931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_22e0da166d758e22f14fa8f478dff7d3659d3dc10c3f92209d8eaa92ef0a4931->leave($__internal_22e0da166d758e22f14fa8f478dff7d3659d3dc10c3f92209d8eaa92ef0a4931_prof);

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
