<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10dc8e91181123bb7184ccf5cd748a85381a9d15423be4972f5ce39111ab555e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_0ecf2a2505dde1c55764064a56da42865f926784764289033ef035b4b5ffe2d2 = $this->env->getExtension("native_profiler");
        $__internal_0ecf2a2505dde1c55764064a56da42865f926784764289033ef035b4b5ffe2d2->enter($__internal_0ecf2a2505dde1c55764064a56da42865f926784764289033ef035b4b5ffe2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecf2a2505dde1c55764064a56da42865f926784764289033ef035b4b5ffe2d2->leave($__internal_0ecf2a2505dde1c55764064a56da42865f926784764289033ef035b4b5ffe2d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65bb905c21aacb40b66d27c0c19bc38b3bfbbc617daefef66856946eb7620ba5 = $this->env->getExtension("native_profiler");
        $__internal_65bb905c21aacb40b66d27c0c19bc38b3bfbbc617daefef66856946eb7620ba5->enter($__internal_65bb905c21aacb40b66d27c0c19bc38b3bfbbc617daefef66856946eb7620ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65bb905c21aacb40b66d27c0c19bc38b3bfbbc617daefef66856946eb7620ba5->leave($__internal_65bb905c21aacb40b66d27c0c19bc38b3bfbbc617daefef66856946eb7620ba5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a50625626f1be31b16d9f5caf1233639b74f5e91732c61bf98de1d7ce5aeb97 = $this->env->getExtension("native_profiler");
        $__internal_7a50625626f1be31b16d9f5caf1233639b74f5e91732c61bf98de1d7ce5aeb97->enter($__internal_7a50625626f1be31b16d9f5caf1233639b74f5e91732c61bf98de1d7ce5aeb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a50625626f1be31b16d9f5caf1233639b74f5e91732c61bf98de1d7ce5aeb97->leave($__internal_7a50625626f1be31b16d9f5caf1233639b74f5e91732c61bf98de1d7ce5aeb97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_020df4fcb0ab562e1dd79a50ee4c0e9919b4a0c46cca2127849c79d33f65d473 = $this->env->getExtension("native_profiler");
        $__internal_020df4fcb0ab562e1dd79a50ee4c0e9919b4a0c46cca2127849c79d33f65d473->enter($__internal_020df4fcb0ab562e1dd79a50ee4c0e9919b4a0c46cca2127849c79d33f65d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_020df4fcb0ab562e1dd79a50ee4c0e9919b4a0c46cca2127849c79d33f65d473->leave($__internal_020df4fcb0ab562e1dd79a50ee4c0e9919b4a0c46cca2127849c79d33f65d473_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
