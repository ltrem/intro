<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5b8f8b70ef506ca05919903d2005bdb685feff680b21db911ad99e13ba23113f extends Twig_Template
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
        $__internal_cfcb3318b80f41aec06361cc08c3525674f429e75cec496c2ee6ad8bb478fe5c = $this->env->getExtension("native_profiler");
        $__internal_cfcb3318b80f41aec06361cc08c3525674f429e75cec496c2ee6ad8bb478fe5c->enter($__internal_cfcb3318b80f41aec06361cc08c3525674f429e75cec496c2ee6ad8bb478fe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcb3318b80f41aec06361cc08c3525674f429e75cec496c2ee6ad8bb478fe5c->leave($__internal_cfcb3318b80f41aec06361cc08c3525674f429e75cec496c2ee6ad8bb478fe5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_048961c4989a61fce2681a3bd755a7e4c17ab7091b8ffe3340b6a499a108c2a9 = $this->env->getExtension("native_profiler");
        $__internal_048961c4989a61fce2681a3bd755a7e4c17ab7091b8ffe3340b6a499a108c2a9->enter($__internal_048961c4989a61fce2681a3bd755a7e4c17ab7091b8ffe3340b6a499a108c2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_048961c4989a61fce2681a3bd755a7e4c17ab7091b8ffe3340b6a499a108c2a9->leave($__internal_048961c4989a61fce2681a3bd755a7e4c17ab7091b8ffe3340b6a499a108c2a9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_936516b3499a7dff04a723d7291daf78b25ceda32dd236fe603d398e228c0655 = $this->env->getExtension("native_profiler");
        $__internal_936516b3499a7dff04a723d7291daf78b25ceda32dd236fe603d398e228c0655->enter($__internal_936516b3499a7dff04a723d7291daf78b25ceda32dd236fe603d398e228c0655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_936516b3499a7dff04a723d7291daf78b25ceda32dd236fe603d398e228c0655->leave($__internal_936516b3499a7dff04a723d7291daf78b25ceda32dd236fe603d398e228c0655_prof);

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
