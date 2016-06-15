<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_ff7fa116c6fe738bc6d2d5d2143af287c2184ac7ff4bf64c82b196b2c435ede1 extends Twig_Template
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
        $__internal_9c070679bb579d327da6259c802f568b652fe3e38f832f6f04c070dfef4d8d04 = $this->env->getExtension("native_profiler");
        $__internal_9c070679bb579d327da6259c802f568b652fe3e38f832f6f04c070dfef4d8d04->enter($__internal_9c070679bb579d327da6259c802f568b652fe3e38f832f6f04c070dfef4d8d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_9c070679bb579d327da6259c802f568b652fe3e38f832f6f04c070dfef4d8d04->leave($__internal_9c070679bb579d327da6259c802f568b652fe3e38f832f6f04c070dfef4d8d04_prof);

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
