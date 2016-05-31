<?php

/* alta/alta.html.twig */
class __TwigTemplate_200346ad400ac3b9b33b3fba9062bdb9cebecd930de20da77fa35a4cc88e9429 extends Twig_Template
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
        $__internal_3980846dc92e344a98d25dc4a4505539c5075a25bb1bee464bf763dee3329266 = $this->env->getExtension("native_profiler");
        $__internal_3980846dc92e344a98d25dc4a4505539c5075a25bb1bee464bf763dee3329266->enter($__internal_3980846dc92e344a98d25dc4a4505539c5075a25bb1bee464bf763dee3329266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        
        $__internal_3980846dc92e344a98d25dc4a4505539c5075a25bb1bee464bf763dee3329266->leave($__internal_3980846dc92e344a98d25dc4a4505539c5075a25bb1bee464bf763dee3329266_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08fbf5df731bd98086114b1a3c57b5af1683412be690dafeda89a2d9ae376a51 = $this->env->getExtension("native_profiler");
        $__internal_08fbf5df731bd98086114b1a3c57b5af1683412be690dafeda89a2d9ae376a51->enter($__internal_08fbf5df731bd98086114b1a3c57b5af1683412be690dafeda89a2d9ae376a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_08fbf5df731bd98086114b1a3c57b5af1683412be690dafeda89a2d9ae376a51->leave($__internal_08fbf5df731bd98086114b1a3c57b5af1683412be690dafeda89a2d9ae376a51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f39127967220598ac1bc3cdc5290dc697e7ab6b00e7290b9fa48e51d9b773cd3 = $this->env->getExtension("native_profiler");
        $__internal_f39127967220598ac1bc3cdc5290dc697e7ab6b00e7290b9fa48e51d9b773cd3->enter($__internal_f39127967220598ac1bc3cdc5290dc697e7ab6b00e7290b9fa48e51d9b773cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f39127967220598ac1bc3cdc5290dc697e7ab6b00e7290b9fa48e51d9b773cd3->leave($__internal_f39127967220598ac1bc3cdc5290dc697e7ab6b00e7290b9fa48e51d9b773cd3_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_47883ff30dfba7ceb901b89588e2eea0bedd34f1f357b75e761bfec1ac10c730 = $this->env->getExtension("native_profiler");
        $__internal_47883ff30dfba7ceb901b89588e2eea0bedd34f1f357b75e761bfec1ac10c730->enter($__internal_47883ff30dfba7ceb901b89588e2eea0bedd34f1f357b75e761bfec1ac10c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47883ff30dfba7ceb901b89588e2eea0bedd34f1f357b75e761bfec1ac10c730->leave($__internal_47883ff30dfba7ceb901b89588e2eea0bedd34f1f357b75e761bfec1ac10c730_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_700d6adcd6fcc949c98d7ae2eb7b4c3e98dc85d2b93d5f74c081ea08205ec44b = $this->env->getExtension("native_profiler");
        $__internal_700d6adcd6fcc949c98d7ae2eb7b4c3e98dc85d2b93d5f74c081ea08205ec44b->enter($__internal_700d6adcd6fcc949c98d7ae2eb7b4c3e98dc85d2b93d5f74c081ea08205ec44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_700d6adcd6fcc949c98d7ae2eb7b4c3e98dc85d2b93d5f74c081ea08205ec44b->leave($__internal_700d6adcd6fcc949c98d7ae2eb7b4c3e98dc85d2b93d5f74c081ea08205ec44b_prof);

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
        return array (  147 => 39,  139 => 68,  121 => 40,  119 => 39,  116 => 38,  110 => 37,  99 => 6,  87 => 5,  74 => 70,  72 => 37,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
