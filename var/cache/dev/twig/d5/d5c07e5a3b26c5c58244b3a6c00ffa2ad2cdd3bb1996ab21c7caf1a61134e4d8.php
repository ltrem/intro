<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ea573e2bedf221f38cea480547c7de8edeb040f48f675daedbe9c25c86148050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_16318a8ea5c739bc08c6eb5a3484cb01941436034ac8ee907e9f1a1c56de4c91 = $this->env->getExtension("native_profiler");
        $__internal_16318a8ea5c739bc08c6eb5a3484cb01941436034ac8ee907e9f1a1c56de4c91->enter($__internal_16318a8ea5c739bc08c6eb5a3484cb01941436034ac8ee907e9f1a1c56de4c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16318a8ea5c739bc08c6eb5a3484cb01941436034ac8ee907e9f1a1c56de4c91->leave($__internal_16318a8ea5c739bc08c6eb5a3484cb01941436034ac8ee907e9f1a1c56de4c91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b7456876ac9732d3b067b3dc8c4ba7b90d8a7efd8169518f7654f2bad28616 = $this->env->getExtension("native_profiler");
        $__internal_81b7456876ac9732d3b067b3dc8c4ba7b90d8a7efd8169518f7654f2bad28616->enter($__internal_81b7456876ac9732d3b067b3dc8c4ba7b90d8a7efd8169518f7654f2bad28616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_81b7456876ac9732d3b067b3dc8c4ba7b90d8a7efd8169518f7654f2bad28616->leave($__internal_81b7456876ac9732d3b067b3dc8c4ba7b90d8a7efd8169518f7654f2bad28616_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7abdfbd49a916a057dfb2bc809912d44dc05d774ae18fefcb35d8d438c5095 = $this->env->getExtension("native_profiler");
        $__internal_9c7abdfbd49a916a057dfb2bc809912d44dc05d774ae18fefcb35d8d438c5095->enter($__internal_9c7abdfbd49a916a057dfb2bc809912d44dc05d774ae18fefcb35d8d438c5095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c7abdfbd49a916a057dfb2bc809912d44dc05d774ae18fefcb35d8d438c5095->leave($__internal_9c7abdfbd49a916a057dfb2bc809912d44dc05d774ae18fefcb35d8d438c5095_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
