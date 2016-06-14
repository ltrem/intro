<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a4d8382426bcde244921435fac6f1dbed05b5c28b540c5b56fafbc6e4e75e28f extends Twig_Template
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
        $__internal_54f2b6a34e51fac06f7ee822056a2783d388189bd537fe28706406d893c2b448 = $this->env->getExtension("native_profiler");
        $__internal_54f2b6a34e51fac06f7ee822056a2783d388189bd537fe28706406d893c2b448->enter($__internal_54f2b6a34e51fac06f7ee822056a2783d388189bd537fe28706406d893c2b448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f2b6a34e51fac06f7ee822056a2783d388189bd537fe28706406d893c2b448->leave($__internal_54f2b6a34e51fac06f7ee822056a2783d388189bd537fe28706406d893c2b448_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68d0cb05f08ec698c7756eeaf2116416ccbcde2b69cbc4a29089cf11afb0a674 = $this->env->getExtension("native_profiler");
        $__internal_68d0cb05f08ec698c7756eeaf2116416ccbcde2b69cbc4a29089cf11afb0a674->enter($__internal_68d0cb05f08ec698c7756eeaf2116416ccbcde2b69cbc4a29089cf11afb0a674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68d0cb05f08ec698c7756eeaf2116416ccbcde2b69cbc4a29089cf11afb0a674->leave($__internal_68d0cb05f08ec698c7756eeaf2116416ccbcde2b69cbc4a29089cf11afb0a674_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9ff67d94e6ecaf37f67237cc2fbdbffc4edf776b95bbf10a4866dec7cf58726 = $this->env->getExtension("native_profiler");
        $__internal_e9ff67d94e6ecaf37f67237cc2fbdbffc4edf776b95bbf10a4866dec7cf58726->enter($__internal_e9ff67d94e6ecaf37f67237cc2fbdbffc4edf776b95bbf10a4866dec7cf58726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9ff67d94e6ecaf37f67237cc2fbdbffc4edf776b95bbf10a4866dec7cf58726->leave($__internal_e9ff67d94e6ecaf37f67237cc2fbdbffc4edf776b95bbf10a4866dec7cf58726_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed03c8afebe18804f275944f9356a0ce7fe65e51e6e2030a26b3292c75f185a4 = $this->env->getExtension("native_profiler");
        $__internal_ed03c8afebe18804f275944f9356a0ce7fe65e51e6e2030a26b3292c75f185a4->enter($__internal_ed03c8afebe18804f275944f9356a0ce7fe65e51e6e2030a26b3292c75f185a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed03c8afebe18804f275944f9356a0ce7fe65e51e6e2030a26b3292c75f185a4->leave($__internal_ed03c8afebe18804f275944f9356a0ce7fe65e51e6e2030a26b3292c75f185a4_prof);

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
