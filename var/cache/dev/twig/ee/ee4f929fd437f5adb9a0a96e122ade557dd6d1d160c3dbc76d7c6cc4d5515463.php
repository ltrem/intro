<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6a3f8d30c3846fec045d917d523f4b1e0a72acbb618ef96817af56a107260927 extends Twig_Template
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
        $__internal_9c4f8ea1c202567b8b7a2b58b2cc9651d9fbb80f77e664b895aa86df8f676a63 = $this->env->getExtension("native_profiler");
        $__internal_9c4f8ea1c202567b8b7a2b58b2cc9651d9fbb80f77e664b895aa86df8f676a63->enter($__internal_9c4f8ea1c202567b8b7a2b58b2cc9651d9fbb80f77e664b895aa86df8f676a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9c4f8ea1c202567b8b7a2b58b2cc9651d9fbb80f77e664b895aa86df8f676a63->leave($__internal_9c4f8ea1c202567b8b7a2b58b2cc9651d9fbb80f77e664b895aa86df8f676a63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
