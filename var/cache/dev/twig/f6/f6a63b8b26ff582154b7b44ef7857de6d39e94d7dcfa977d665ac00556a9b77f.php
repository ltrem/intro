<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a6ca9b2fc300e8625334bf1e83f3e478594fdc9b24bac08653d748ab2e4da5b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bd62c76bda4a94372ed507f3cc0a44f8dc30384b959793dcf6d610a6df7a4cd = $this->env->getExtension("native_profiler");
        $__internal_8bd62c76bda4a94372ed507f3cc0a44f8dc30384b959793dcf6d610a6df7a4cd->enter($__internal_8bd62c76bda4a94372ed507f3cc0a44f8dc30384b959793dcf6d610a6df7a4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8bd62c76bda4a94372ed507f3cc0a44f8dc30384b959793dcf6d610a6df7a4cd->leave($__internal_8bd62c76bda4a94372ed507f3cc0a44f8dc30384b959793dcf6d610a6df7a4cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
