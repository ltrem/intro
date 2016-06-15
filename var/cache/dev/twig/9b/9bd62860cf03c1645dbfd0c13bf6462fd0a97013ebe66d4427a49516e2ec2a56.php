<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_23609ac0934f34696db33ce128ff933468a178c3cef9c96e99760e1484fb23ec extends Twig_Template
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
        $__internal_8cab9a584243a2ec6f37aaef0fbf763776e27360d0c48ee80a7bc0b2a2aa3e0c = $this->env->getExtension("native_profiler");
        $__internal_8cab9a584243a2ec6f37aaef0fbf763776e27360d0c48ee80a7bc0b2a2aa3e0c->enter($__internal_8cab9a584243a2ec6f37aaef0fbf763776e27360d0c48ee80a7bc0b2a2aa3e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_8cab9a584243a2ec6f37aaef0fbf763776e27360d0c48ee80a7bc0b2a2aa3e0c->leave($__internal_8cab9a584243a2ec6f37aaef0fbf763776e27360d0c48ee80a7bc0b2a2aa3e0c_prof);

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
