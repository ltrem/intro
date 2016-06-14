<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e9940d2ea8f4d3926971aa1c15740b4a3367b02b9f9c11b0ee2a646cb0e3e513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63684cb89f442ec8cebec08083e296ddb1964e3c9d73e1a478a4d7b87d5979d2 = $this->env->getExtension("native_profiler");
        $__internal_63684cb89f442ec8cebec08083e296ddb1964e3c9d73e1a478a4d7b87d5979d2->enter($__internal_63684cb89f442ec8cebec08083e296ddb1964e3c9d73e1a478a4d7b87d5979d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63684cb89f442ec8cebec08083e296ddb1964e3c9d73e1a478a4d7b87d5979d2->leave($__internal_63684cb89f442ec8cebec08083e296ddb1964e3c9d73e1a478a4d7b87d5979d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bb2aa279affbbb98d40c7b1a1fc34d317e71eca3c0aeff0d49ba9c42726b699 = $this->env->getExtension("native_profiler");
        $__internal_6bb2aa279affbbb98d40c7b1a1fc34d317e71eca3c0aeff0d49ba9c42726b699->enter($__internal_6bb2aa279affbbb98d40c7b1a1fc34d317e71eca3c0aeff0d49ba9c42726b699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bb2aa279affbbb98d40c7b1a1fc34d317e71eca3c0aeff0d49ba9c42726b699->leave($__internal_6bb2aa279affbbb98d40c7b1a1fc34d317e71eca3c0aeff0d49ba9c42726b699_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ba06e36e5d88732aa6f4b70e6d393ab228e91fc4c6c132f4979758387e07475 = $this->env->getExtension("native_profiler");
        $__internal_5ba06e36e5d88732aa6f4b70e6d393ab228e91fc4c6c132f4979758387e07475->enter($__internal_5ba06e36e5d88732aa6f4b70e6d393ab228e91fc4c6c132f4979758387e07475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ba06e36e5d88732aa6f4b70e6d393ab228e91fc4c6c132f4979758387e07475->leave($__internal_5ba06e36e5d88732aa6f4b70e6d393ab228e91fc4c6c132f4979758387e07475_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f080a4f3e787c61a0fde29406f8662ff17bb988224cdf9544dbeea160236a6d1 = $this->env->getExtension("native_profiler");
        $__internal_f080a4f3e787c61a0fde29406f8662ff17bb988224cdf9544dbeea160236a6d1->enter($__internal_f080a4f3e787c61a0fde29406f8662ff17bb988224cdf9544dbeea160236a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f080a4f3e787c61a0fde29406f8662ff17bb988224cdf9544dbeea160236a6d1->leave($__internal_f080a4f3e787c61a0fde29406f8662ff17bb988224cdf9544dbeea160236a6d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
