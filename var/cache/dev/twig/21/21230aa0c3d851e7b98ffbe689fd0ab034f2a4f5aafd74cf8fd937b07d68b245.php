<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_510a15abc944923369d1df36821aaec96319a21d04d7f125852a933226d80e50 extends Twig_Template
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
        $__internal_7f0e669ecf7a7dfaa6048eccca42b6730f3f82ffde904f158b581d63d09fa61e = $this->env->getExtension("native_profiler");
        $__internal_7f0e669ecf7a7dfaa6048eccca42b6730f3f82ffde904f158b581d63d09fa61e->enter($__internal_7f0e669ecf7a7dfaa6048eccca42b6730f3f82ffde904f158b581d63d09fa61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
        
        $__internal_7f0e669ecf7a7dfaa6048eccca42b6730f3f82ffde904f158b581d63d09fa61e->leave($__internal_7f0e669ecf7a7dfaa6048eccca42b6730f3f82ffde904f158b581d63d09fa61e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
