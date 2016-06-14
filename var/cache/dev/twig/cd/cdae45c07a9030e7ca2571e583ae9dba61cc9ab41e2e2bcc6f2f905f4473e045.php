<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2a1d15bedba6774ff00f30b4489ab278aa70f468a3edc8aad73968eafd517526 extends Twig_Template
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
        $__internal_8a9b65c37fd5b837d1b44c3830ed28bd5ad749ed7a9fdf411c9437ef1bf86398 = $this->env->getExtension("native_profiler");
        $__internal_8a9b65c37fd5b837d1b44c3830ed28bd5ad749ed7a9fdf411c9437ef1bf86398->enter($__internal_8a9b65c37fd5b837d1b44c3830ed28bd5ad749ed7a9fdf411c9437ef1bf86398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8a9b65c37fd5b837d1b44c3830ed28bd5ad749ed7a9fdf411c9437ef1bf86398->leave($__internal_8a9b65c37fd5b837d1b44c3830ed28bd5ad749ed7a9fdf411c9437ef1bf86398_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
