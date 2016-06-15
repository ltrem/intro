<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_605c05c715cb76a2ced971baa7fc5a71891f1eec688eaf41bff4a1a6c422c3f7 extends Twig_Template
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
        $__internal_4f1e1d70ff21cf12348de2bb22d764674f458c986d435fe9ffba81cb572d8b80 = $this->env->getExtension("native_profiler");
        $__internal_4f1e1d70ff21cf12348de2bb22d764674f458c986d435fe9ffba81cb572d8b80->enter($__internal_4f1e1d70ff21cf12348de2bb22d764674f458c986d435fe9ffba81cb572d8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4f1e1d70ff21cf12348de2bb22d764674f458c986d435fe9ffba81cb572d8b80->leave($__internal_4f1e1d70ff21cf12348de2bb22d764674f458c986d435fe9ffba81cb572d8b80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
