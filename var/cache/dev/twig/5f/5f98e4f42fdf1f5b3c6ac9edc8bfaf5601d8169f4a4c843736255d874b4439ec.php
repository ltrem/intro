<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_bd94903435f7f2b5f65d267de34b858b506fa381ed3eb247d30e9c1c310c3f42 extends Twig_Template
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
        $__internal_283a1b24e9aaeeb658fcd20a9bed742f1af6db546480909b3c88d8dc0295bb4b = $this->env->getExtension("native_profiler");
        $__internal_283a1b24e9aaeeb658fcd20a9bed742f1af6db546480909b3c88d8dc0295bb4b->enter($__internal_283a1b24e9aaeeb658fcd20a9bed742f1af6db546480909b3c88d8dc0295bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Créer un compte</h1>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_283a1b24e9aaeeb658fcd20a9bed742f1af6db546480909b3c88d8dc0295bb4b->leave($__internal_283a1b24e9aaeeb658fcd20a9bed742f1af6db546480909b3c88d8dc0295bb4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  37 => 9,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="jumbotron">*/
/*     <div class="container">*/
/*         <h1>Créer un compte</h1>*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*             {{ form_widget(form) }}*/
/*             <div>*/
/*                 <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
