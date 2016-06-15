<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_0bdde439566668d1d9abbac0a2c7194e8fd34fd8448633b1ee566cce401ad654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_94718f0eb137088279781df4e1f53d945524e39904793dd414a833be69df2fa0 = $this->env->getExtension("native_profiler");
        $__internal_94718f0eb137088279781df4e1f53d945524e39904793dd414a833be69df2fa0->enter($__internal_94718f0eb137088279781df4e1f53d945524e39904793dd414a833be69df2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94718f0eb137088279781df4e1f53d945524e39904793dd414a833be69df2fa0->leave($__internal_94718f0eb137088279781df4e1f53d945524e39904793dd414a833be69df2fa0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e792abf705c1256f80bf1f6055a231950262827dad3aedd20a20d18108ff4ab3 = $this->env->getExtension("native_profiler");
        $__internal_e792abf705c1256f80bf1f6055a231950262827dad3aedd20a20d18108ff4ab3->enter($__internal_e792abf705c1256f80bf1f6055a231950262827dad3aedd20a20d18108ff4ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e792abf705c1256f80bf1f6055a231950262827dad3aedd20a20d18108ff4ab3->leave($__internal_e792abf705c1256f80bf1f6055a231950262827dad3aedd20a20d18108ff4ab3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
