<?php

/* consultar/error_actividades.html.twig */
class __TwigTemplate_c762ae5d2b4f603c5731efbd61eeb4eda94296f456c64599872ff7327fec9479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9936c154a91f36b91a0127e782a1d0adcf2f198a2ff8657fd712356736024481 = $this->env->getExtension("native_profiler");
        $__internal_9936c154a91f36b91a0127e782a1d0adcf2f198a2ff8657fd712356736024481->enter($__internal_9936c154a91f36b91a0127e782a1d0adcf2f198a2ff8657fd712356736024481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultar/error_actividades.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "      
    </body>
</html>
";
        
        $__internal_9936c154a91f36b91a0127e782a1d0adcf2f198a2ff8657fd712356736024481->leave($__internal_9936c154a91f36b91a0127e782a1d0adcf2f198a2ff8657fd712356736024481_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dbb7834147de83f9af198c8902b481a23f8b5c8022683392d8a8ab04544de63 = $this->env->getExtension("native_profiler");
        $__internal_2dbb7834147de83f9af198c8902b481a23f8b5c8022683392d8a8ab04544de63->enter($__internal_2dbb7834147de83f9af198c8902b481a23f8b5c8022683392d8a8ab04544de63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2dbb7834147de83f9af198c8902b481a23f8b5c8022683392d8a8ab04544de63->leave($__internal_2dbb7834147de83f9af198c8902b481a23f8b5c8022683392d8a8ab04544de63_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8a1106603b00b40b778952e1e5454fbc67b267a0501168645eb151922b0d9c7 = $this->env->getExtension("native_profiler");
        $__internal_d8a1106603b00b40b778952e1e5454fbc67b267a0501168645eb151922b0d9c7->enter($__internal_d8a1106603b00b40b778952e1e5454fbc67b267a0501168645eb151922b0d9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8a1106603b00b40b778952e1e5454fbc67b267a0501168645eb151922b0d9c7->leave($__internal_d8a1106603b00b40b778952e1e5454fbc67b267a0501168645eb151922b0d9c7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b134156bf952ec6eec14908721b851e161d4917905e2ad4001e7486f7b387d57 = $this->env->getExtension("native_profiler");
        $__internal_b134156bf952ec6eec14908721b851e161d4917905e2ad4001e7486f7b387d57->enter($__internal_b134156bf952ec6eec14908721b851e161d4917905e2ad4001e7486f7b387d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
         <h2>No existen actividades para ese departamento</h2>
         <a href=\"/consultar\">Volver a la consulta</a>

        ";
        
        $__internal_b134156bf952ec6eec14908721b851e161d4917905e2ad4001e7486f7b387d57->leave($__internal_b134156bf952ec6eec14908721b851e161d4917905e2ad4001e7486f7b387d57_prof);

    }

    public function getTemplateName()
    {
        return "consultar/error_actividades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  79 => 10,  68 => 6,  56 => 5,  46 => 16,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*          <h2>No existen actividades para ese departamento</h2>*/
/*          <a href="/consultar">Volver a la consulta</a>*/
/* */
/*         {% endblock %}*/
/*       */
/*     </body>*/
/* </html>*/
/* */
