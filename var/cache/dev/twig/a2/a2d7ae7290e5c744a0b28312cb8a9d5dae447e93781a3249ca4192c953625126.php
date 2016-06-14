<?php

/* naviguation.html.twig */
class __TwigTemplate_e775cf22dd2f62271dd09b5a2979ab3b0e16334521420f5335e29746b3bf1e3c extends Twig_Template
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
        $__internal_ccefc7c1c91b1491a7d70b0abbedd9be9f41cb4466c1935384fa8265dc804211 = $this->env->getExtension("native_profiler");
        $__internal_ccefc7c1c91b1491a7d70b0abbedd9be9f41cb4466c1935384fa8265dc804211->enter($__internal_ccefc7c1c91b1491a7d70b0abbedd9be9f41cb4466c1935384fa8265dc804211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "naviguation.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Clinique Coderre</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#about\">About</a></li>
                <li><a href=\"#contact\">Contact</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Connexion <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <!--<li role=\"separator\" class=\"divider\"></li>-->
                        <li class=\"dropdown-header\">Outil de connexion</li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Me connecter</a></li>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Me créer un compte</a></li>
                    </ul>
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                <div class=\"form-group\">
                    <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>";
        
        $__internal_ccefc7c1c91b1491a7d70b0abbedd9be9f41cb4466c1935384fa8265dc804211->leave($__internal_ccefc7c1c91b1491a7d70b0abbedd9be9f41cb4466c1935384fa8265dc804211_prof);

    }

    public function getTemplateName()
    {
        return "naviguation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  46 => 23,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Clinique Coderre</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="#about">About</a></li>*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connexion <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <!--<li role="separator" class="divider"></li>-->*/
/*                         <li class="dropdown-header">Outil de connexion</li>*/
/*                         <li><a href="{{ path('fos_user_security_login') }}">Me connecter</a></li>*/
/*                         <li><a href="{{ path('fos_user_registration_register') }}">Me créer un compte</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <form class="navbar-form navbar-right">*/
/*                 <div class="form-group">*/
/*                     <input type="text" placeholder="Email" class="form-control">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="password" placeholder="Password" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-success">Sign in</button>*/
/*             </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*     </div>*/
/* </nav>*/
