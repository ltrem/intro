<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9af90064a76e4b1703c05f92283fef2a28af09325bf81fe6adecaeaf79cf26c7 extends Twig_Template
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
        $__internal_50c3999f9ac8350f9122d401b5f44667bc31c1872b31fb045c5bef5095e57905 = $this->env->getExtension("native_profiler");
        $__internal_50c3999f9ac8350f9122d401b5f44667bc31c1872b31fb045c5bef5095e57905->enter($__internal_50c3999f9ac8350f9122d401b5f44667bc31c1872b31fb045c5bef5095e57905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_50c3999f9ac8350f9122d401b5f44667bc31c1872b31fb045c5bef5095e57905->leave($__internal_50c3999f9ac8350f9122d401b5f44667bc31c1872b31fb045c5bef5095e57905_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
