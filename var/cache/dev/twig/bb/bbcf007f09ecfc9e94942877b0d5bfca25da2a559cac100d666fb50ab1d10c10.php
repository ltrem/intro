<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_07079e38e847d6ae3fa0c3d2b83e98d3ffb6f6b6b7704451b1285925eb7cba05 extends Twig_Template
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
        $__internal_b9a0016c66d6e6bf8ed33fbb493113b983c904a309693e6fa4ede9d123646450 = $this->env->getExtension("native_profiler");
        $__internal_b9a0016c66d6e6bf8ed33fbb493113b983c904a309693e6fa4ede9d123646450->enter($__internal_b9a0016c66d6e6bf8ed33fbb493113b983c904a309693e6fa4ede9d123646450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9a0016c66d6e6bf8ed33fbb493113b983c904a309693e6fa4ede9d123646450->leave($__internal_b9a0016c66d6e6bf8ed33fbb493113b983c904a309693e6fa4ede9d123646450_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ed6d463fb982f5cca99f23ed972d88315f335dd354f54aad0ec9b124ae7513c = $this->env->getExtension("native_profiler");
        $__internal_9ed6d463fb982f5cca99f23ed972d88315f335dd354f54aad0ec9b124ae7513c->enter($__internal_9ed6d463fb982f5cca99f23ed972d88315f335dd354f54aad0ec9b124ae7513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ed6d463fb982f5cca99f23ed972d88315f335dd354f54aad0ec9b124ae7513c->leave($__internal_9ed6d463fb982f5cca99f23ed972d88315f335dd354f54aad0ec9b124ae7513c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd2b14050633d40636048c954343f61839f69980891680f20ab5c079e695e765 = $this->env->getExtension("native_profiler");
        $__internal_fd2b14050633d40636048c954343f61839f69980891680f20ab5c079e695e765->enter($__internal_fd2b14050633d40636048c954343f61839f69980891680f20ab5c079e695e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd2b14050633d40636048c954343f61839f69980891680f20ab5c079e695e765->leave($__internal_fd2b14050633d40636048c954343f61839f69980891680f20ab5c079e695e765_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b4d612c7810f7fbb8be6749a2d766f5ff7b02cbc4985543cbfe3355adc7d6a3 = $this->env->getExtension("native_profiler");
        $__internal_5b4d612c7810f7fbb8be6749a2d766f5ff7b02cbc4985543cbfe3355adc7d6a3->enter($__internal_5b4d612c7810f7fbb8be6749a2d766f5ff7b02cbc4985543cbfe3355adc7d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b4d612c7810f7fbb8be6749a2d766f5ff7b02cbc4985543cbfe3355adc7d6a3->leave($__internal_5b4d612c7810f7fbb8be6749a2d766f5ff7b02cbc4985543cbfe3355adc7d6a3_prof);

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
