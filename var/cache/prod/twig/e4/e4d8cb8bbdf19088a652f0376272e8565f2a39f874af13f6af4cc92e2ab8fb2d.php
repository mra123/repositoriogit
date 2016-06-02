<?php

/* alta/alta.html.twig */
class __TwigTemplate_0a467e69a06ae8da191650ec5c094f203ed4947ac65bd0e12184bab63d8f1786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\" />
 <style>

            .boton {            
            }

            h2 {
                color: black;
                text-align: center;
                border-style: solid;
                border-width: medium;
                border-color:orange;

            }

            p {
                font-family: \"Times New Roman\";
                font-size: 15px;
                
            }
            hr{
                color: orange;
            }


        
        </style>
    </head>
    <body>

        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
    <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
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

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "       
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
        <h2>ALTA DE UNA EDICIÓN:</h2>
            <p> Antes de dar de alta una edición, hay que crear la actividad asociada. <br> Comprueba que la actividad ya existe y si no, creala: </p>
       
        <div class=\"boton\">
            <a href=\"/consulta_actividades\">Seleccionar una actividad existente</a>
        </div> 
        <br/><br/>


        <div class=\"boton\">
            <a href=\"/crear_actividades\">Crea una actividad nueva</a>
        </div> 
        <br/><br/>

   
";
        // line 68
        echo "     
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "alta/alta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 68,  100 => 40,  98 => 39,  95 => 38,  92 => 37,  87 => 6,  81 => 5,  71 => 70,  69 => 37,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*  <style>*/
/* */
/*             .boton {            */
/*             }*/
/* */
/*             h2 {*/
/*                 color: black;*/
/*                 text-align: center;*/
/*                 border-style: solid;*/
/*                 border-width: medium;*/
/*                 border-color:orange;*/
/* */
/*             }*/
/* */
/*             p {*/
/*                 font-family: "Times New Roman";*/
/*                 font-size: 15px;*/
/*                 */
/*             }*/
/*             hr{*/
/*                 color: orange;*/
/*             }*/
/* */
/* */
/*         */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}*/
/*        */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         <h2>ALTA DE UNA EDICIÓN:</h2>*/
/*             <p> Antes de dar de alta una edición, hay que crear la actividad asociada. <br> Comprueba que la actividad ya existe y si no, creala: </p>*/
/*        */
/*         <div class="boton">*/
/*             <a href="/consulta_actividades">Seleccionar una actividad existente</a>*/
/*         </div> */
/*         <br/><br/>*/
/* */
/* */
/*         <div class="boton">*/
/*             <a href="/crear_actividades">Crea una actividad nueva</a>*/
/*         </div> */
/*         <br/><br/>*/
/* */
/*    */
/* {#*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.actividadactividad) }}*/
/*         {{ form_row(form.fechaEdicion) }}*/
/*         */
/* */
/*     {{ form_end(form) }}*/
/*     */
/*         <P>* Obligatorio nombre y fecha</P>*/
/*   #}     */
/*         {% endblock %}*/
/* */
/*     <hr><hr>*/
/*     <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
