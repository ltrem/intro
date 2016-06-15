<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f5b0e11f7c1c0972ad216c16b4ded63abd20dcfe7c1710daf19a1e22f334c6ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3cf7fd9285e54ec0a3553cc037f433ee0f877f8617cce45e803a0478d81a36d5 = $this->env->getExtension("native_profiler");
        $__internal_3cf7fd9285e54ec0a3553cc037f433ee0f877f8617cce45e803a0478d81a36d5->enter($__internal_3cf7fd9285e54ec0a3553cc037f433ee0f877f8617cce45e803a0478d81a36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cf7fd9285e54ec0a3553cc037f433ee0f877f8617cce45e803a0478d81a36d5->leave($__internal_3cf7fd9285e54ec0a3553cc037f433ee0f877f8617cce45e803a0478d81a36d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85aeb8af0070d5915f7c749680ef1d1c2e27fcc07da0dfbbb6142ea653a48b1e = $this->env->getExtension("native_profiler");
        $__internal_85aeb8af0070d5915f7c749680ef1d1c2e27fcc07da0dfbbb6142ea653a48b1e->enter($__internal_85aeb8af0070d5915f7c749680ef1d1c2e27fcc07da0dfbbb6142ea653a48b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85aeb8af0070d5915f7c749680ef1d1c2e27fcc07da0dfbbb6142ea653a48b1e->leave($__internal_85aeb8af0070d5915f7c749680ef1d1c2e27fcc07da0dfbbb6142ea653a48b1e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbe4ad353b1e4a6bee5ee96bf0dc5e131ecedde90df2476ed5c177d6502383a3 = $this->env->getExtension("native_profiler");
        $__internal_dbe4ad353b1e4a6bee5ee96bf0dc5e131ecedde90df2476ed5c177d6502383a3->enter($__internal_dbe4ad353b1e4a6bee5ee96bf0dc5e131ecedde90df2476ed5c177d6502383a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dbe4ad353b1e4a6bee5ee96bf0dc5e131ecedde90df2476ed5c177d6502383a3->leave($__internal_dbe4ad353b1e4a6bee5ee96bf0dc5e131ecedde90df2476ed5c177d6502383a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_485ac535c72a4aa5dd5d6b8886d23e7b3a4e42486012b5b32e63fd084575551a = $this->env->getExtension("native_profiler");
        $__internal_485ac535c72a4aa5dd5d6b8886d23e7b3a4e42486012b5b32e63fd084575551a->enter($__internal_485ac535c72a4aa5dd5d6b8886d23e7b3a4e42486012b5b32e63fd084575551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_485ac535c72a4aa5dd5d6b8886d23e7b3a4e42486012b5b32e63fd084575551a->leave($__internal_485ac535c72a4aa5dd5d6b8886d23e7b3a4e42486012b5b32e63fd084575551a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
