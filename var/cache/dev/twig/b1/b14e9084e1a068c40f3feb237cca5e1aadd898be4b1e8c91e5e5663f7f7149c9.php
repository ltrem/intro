<?php

/* :default:index.html.twig */
class __TwigTemplate_37c79963ccc1766f924467009857bb754629733534af3f6d3069f2c4c56d5c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ce698ea6af89ce13139c6015c5bfd5d075aa5b079504ec0cb2ef4aaaddfeb45 = $this->env->getExtension("native_profiler");
        $__internal_6ce698ea6af89ce13139c6015c5bfd5d075aa5b079504ec0cb2ef4aaaddfeb45->enter($__internal_6ce698ea6af89ce13139c6015c5bfd5d075aa5b079504ec0cb2ef4aaaddfeb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce698ea6af89ce13139c6015c5bfd5d075aa5b079504ec0cb2ef4aaaddfeb45->leave($__internal_6ce698ea6af89ce13139c6015c5bfd5d075aa5b079504ec0cb2ef4aaaddfeb45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2756029783ad2176e1146548018ab875e89b37c72081d9062ba4eed36c96892c = $this->env->getExtension("native_profiler");
        $__internal_2756029783ad2176e1146548018ab875e89b37c72081d9062ba4eed36c96892c->enter($__internal_2756029783ad2176e1146548018ab875e89b37c72081d9062ba4eed36c96892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">

            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
      <!-- Example row of columns -->
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div>
";
        
        $__internal_2756029783ad2176e1146548018ab875e89b37c72081d9062ba4eed36c96892c->leave($__internal_2756029783ad2176e1146548018ab875e89b37c72081d9062ba4eed36c96892c_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*       <div class="container">*/
/*         <h1>Hello, world!</h1>*/
/*         <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/* */
/*             {{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/*       <!-- Example row of columns -->*/
/*       <div class="row">*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*        </div>*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <hr>*/
/* */
/*       <footer>*/
/*         <p>&copy; 2015 Company, Inc.</p>*/
/*       </footer>*/
/*     </div>*/
/* {% endblock %}*/
