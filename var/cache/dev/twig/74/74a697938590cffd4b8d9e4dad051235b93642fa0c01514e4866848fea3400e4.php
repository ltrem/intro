<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fca3616e3e733a4f75aff38dd9682db3a96746adc665b96e92646d72217f3307 extends Twig_Template
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
        $__internal_1cf3858ba236e98e608a32c78ed515f5fa7cb0a5cf0f3931c002e65920b4d370 = $this->env->getExtension("native_profiler");
        $__internal_1cf3858ba236e98e608a32c78ed515f5fa7cb0a5cf0f3931c002e65920b4d370->enter($__internal_1cf3858ba236e98e608a32c78ed515f5fa7cb0a5cf0f3931c002e65920b4d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1cf3858ba236e98e608a32c78ed515f5fa7cb0a5cf0f3931c002e65920b4d370->leave($__internal_1cf3858ba236e98e608a32c78ed515f5fa7cb0a5cf0f3931c002e65920b4d370_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
