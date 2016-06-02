<?php

/* :alta:agregarprofesor.html.twig */
class __TwigTemplate_05359276315139ec9f489b0cde17cd826569efc5697aae75ad62355ca335bd8d extends Twig_Template
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
        echo "\" />\t
    </head>
    <body>
    
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "  
    </body>
</html>

 
            ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Actividades";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "       
        <h2> Profesor agregado correctamente</h2>

            <p> Si deseas agregar más PROFESORES, <a href=\"/profesores\"> haz click aquí</a></p>
           
            <p> Si ya has acabado, vuelve al <a href=\"/inicio\"> inicio  </a></p>
        
           
            <p> <a href=\"/consultaractividad/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idedicion"]) ? $context["idedicion"] : null), "idedicion", array()), "html", null, true);
        echo "\"> Consulta  </a> los datos de la actividad que acabas de crear</p>
           
        ";
    }

    public function getTemplateName()
    {
        return ":alta:agregarprofesor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  67 => 12,  64 => 11,  59 => 6,  53 => 5,  44 => 23,  42 => 11,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>    */
/*     <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />	*/
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/*        */
/*         <h2> Profesor agregado correctamente</h2>*/
/* */
/*             <p> Si deseas agregar más PROFESORES, <a href="/profesores"> haz click aquí</a></p>*/
/*            */
/*             <p> Si ya has acabado, vuelve al <a href="/inicio"> inicio  </a></p>*/
/*         */
/*            */
/*             <p> <a href="/consultaractividad/{{idedicion.idedicion}}"> Consulta  </a> los datos de la actividad que acabas de crear</p>*/
/*            */
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
