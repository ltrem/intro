<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c6ad551710976281d455c289e0c4ac2874d8bdf04f7500d909592dc73bcbe412 extends Twig_Template
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
        $__internal_46061dff89d9d0df392e1251a4907471a6a2f896a21650dd4ff6ea89cd91c6f7 = $this->env->getExtension("native_profiler");
        $__internal_46061dff89d9d0df392e1251a4907471a6a2f896a21650dd4ff6ea89cd91c6f7->enter($__internal_46061dff89d9d0df392e1251a4907471a6a2f896a21650dd4ff6ea89cd91c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_46061dff89d9d0df392e1251a4907471a6a2f896a21650dd4ff6ea89cd91c6f7->leave($__internal_46061dff89d9d0df392e1251a4907471a6a2f896a21650dd4ff6ea89cd91c6f7_prof);

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
