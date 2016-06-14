<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f3d71bd4e353bf75b25a090e1e1afc1e4e353e3826ca8baf216317daa25c81d0 extends Twig_Template
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
        $__internal_57a1f58eb0cbb00c9cc7af2be44e7951816f439581e19942d723a20c0c01cd55 = $this->env->getExtension("native_profiler");
        $__internal_57a1f58eb0cbb00c9cc7af2be44e7951816f439581e19942d723a20c0c01cd55->enter($__internal_57a1f58eb0cbb00c9cc7af2be44e7951816f439581e19942d723a20c0c01cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_57a1f58eb0cbb00c9cc7af2be44e7951816f439581e19942d723a20c0c01cd55->leave($__internal_57a1f58eb0cbb00c9cc7af2be44e7951816f439581e19942d723a20c0c01cd55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
