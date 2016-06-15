<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3b0353d04b05abcca9bcda113932609c5209f74da7999c21008a77f65dfa8332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aecf305b2dc948549b20c651a03fb2dd68fe96ac33edc7e46ec4efedfef315c8 = $this->env->getExtension("native_profiler");
        $__internal_aecf305b2dc948549b20c651a03fb2dd68fe96ac33edc7e46ec4efedfef315c8->enter($__internal_aecf305b2dc948549b20c651a03fb2dd68fe96ac33edc7e46ec4efedfef315c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aecf305b2dc948549b20c651a03fb2dd68fe96ac33edc7e46ec4efedfef315c8->leave($__internal_aecf305b2dc948549b20c651a03fb2dd68fe96ac33edc7e46ec4efedfef315c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5473ccf7f287313b665c40cef0acce4d44c3f3d9642dedd45d002a1a0b1b956d = $this->env->getExtension("native_profiler");
        $__internal_5473ccf7f287313b665c40cef0acce4d44c3f3d9642dedd45d002a1a0b1b956d->enter($__internal_5473ccf7f287313b665c40cef0acce4d44c3f3d9642dedd45d002a1a0b1b956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5473ccf7f287313b665c40cef0acce4d44c3f3d9642dedd45d002a1a0b1b956d->leave($__internal_5473ccf7f287313b665c40cef0acce4d44c3f3d9642dedd45d002a1a0b1b956d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
