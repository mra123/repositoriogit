<?php

/* alta/altaedicion.html.twig */
class __TwigTemplate_6aef676290501a06ea1269eb09cdb5d099c6f2b6f866a6a0275cb4eea4652526 extends Twig_Template
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
        $__internal_f935b7f20c4bea78ee94d1b4617db120e76a7e79027eab3d8af42a5f62163e16 = $this->env->getExtension("native_profiler");
        $__internal_f935b7f20c4bea78ee94d1b4617db120e76a7e79027eab3d8af42a5f62163e16->enter($__internal_f935b7f20c4bea78ee94d1b4617db120e76a7e79027eab3d8af42a5f62163e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    \t<meta charset=\"UTF-8\" />
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

    \t<style>

    \t\t.boton {    \t\t
    \t\t}

\t\t\th2 {
\t\t\t    color: black;
\t\t\t    text-align: center;
\t\t\t    border-style: solid;
\t\t\t    border-width: medium;
\t\t\t\tborder-color:orange;

\t\t\t}

\t\t\tp {
\t\t\t    font-family: \"Times New Roman\";
\t\t\t    font-size: 15px;
\t\t\t\t
\t\t\t}
\t\t\thr{
\t\t\t\tcolor: orange;
\t\t\t}


\t\t
\t\t</style>
       
    </head>
    <body>
    
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "   <hr><hr>
   <a href=\"/alta\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_f935b7f20c4bea78ee94d1b4617db120e76a7e79027eab3d8af42a5f62163e16->leave($__internal_f935b7f20c4bea78ee94d1b4617db120e76a7e79027eab3d8af42a5f62163e16_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c1bbca6cd2753cabd44f7c2be5c9bebf1f7a7a89e2ed53eb9e1adc452e63eb0 = $this->env->getExtension("native_profiler");
        $__internal_9c1bbca6cd2753cabd44f7c2be5c9bebf1f7a7a89e2ed53eb9e1adc452e63eb0->enter($__internal_9c1bbca6cd2753cabd44f7c2be5c9bebf1f7a7a89e2ed53eb9e1adc452e63eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_9c1bbca6cd2753cabd44f7c2be5c9bebf1f7a7a89e2ed53eb9e1adc452e63eb0->leave($__internal_9c1bbca6cd2753cabd44f7c2be5c9bebf1f7a7a89e2ed53eb9e1adc452e63eb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ba810c0115bc875d52c484c2b77313bfcc3a9e19ecc8c0a3d385c44e9a622b0 = $this->env->getExtension("native_profiler");
        $__internal_3ba810c0115bc875d52c484c2b77313bfcc3a9e19ecc8c0a3d385c44e9a622b0->enter($__internal_3ba810c0115bc875d52c484c2b77313bfcc3a9e19ecc8c0a3d385c44e9a622b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ba810c0115bc875d52c484c2b77313bfcc3a9e19ecc8c0a3d385c44e9a622b0->leave($__internal_3ba810c0115bc875d52c484c2b77313bfcc3a9e19ecc8c0a3d385c44e9a622b0_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_db27bcc2b4dd727582b73157ab302d558361b4a5ace1f13232a35297369823f6 = $this->env->getExtension("native_profiler");
        $__internal_db27bcc2b4dd727582b73157ab302d558361b4a5ace1f13232a35297369823f6->enter($__internal_db27bcc2b4dd727582b73157ab302d558361b4a5ace1f13232a35297369823f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "
\t\t
        <h2>Formulario de alta de edición: </h2>

\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<h3>Fecha de la actividad: </h3>\t    
\t\t    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t <h3>Selecciona el grupo que asistirá:</h3>
\t\t    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idciclo", array()), 'row');
        echo "\t\t\t\t \t\t    
\t\t    <br/>

\t\t ";
        // line 52
        echo "    
\t\t <p> ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Alta:Grupos"));
        echo " </p>

\t\t <h3> Observaciones:</h3>  
\t\t   
 \t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'row');
        echo "
   \t\t<h3>¿Asistirán menores de edad?</h3>
   \t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menoresEdad", array()), 'row');
        echo "
   \t\t  \t\t   
\t\t    <br/>
\t\t       
   \t\t";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_db27bcc2b4dd727582b73157ab302d558361b4a5ace1f13232a35297369823f6->leave($__internal_db27bcc2b4dd727582b73157ab302d558361b4a5ace1f13232a35297369823f6_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  154 => 59,  149 => 57,  142 => 53,  139 => 52,  133 => 49,  127 => 46,  122 => 44,  116 => 40,  110 => 39,  99 => 6,  87 => 5,  75 => 67,  73 => 39,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*     	<meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     	<style>*/
/* */
/*     		.boton {    		*/
/*     		}*/
/* */
/* 			h2 {*/
/* 			    color: black;*/
/* 			    text-align: center;*/
/* 			    border-style: solid;*/
/* 			    border-width: medium;*/
/* 				border-color:orange;*/
/* */
/* 			}*/
/* */
/* 			p {*/
/* 			    font-family: "Times New Roman";*/
/* 			    font-size: 15px;*/
/* 				*/
/* 			}*/
/* 			hr{*/
/* 				color: orange;*/
/* 			}*/
/* */
/* */
/* 		*/
/* 		</style>*/
/*        */
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/* */
/* 		*/
/*         <h2>Formulario de alta de edición: </h2>*/
/* */
/* 		{{ form_start(form) }}*/
/* 		<h3>Fecha de la actividad: </h3>	    */
/* 		    {{ form_row(form.fechaEdicion) }}*/
/* 		    <br/>*/
/* 		 <h3>Selecciona el grupo que asistirá:</h3>*/
/* 		    {{ form_row(form.idciclo) }}				 		    */
/* 		    <br/>*/
/* */
/* 		 {# Para insertar el listado de grupos: #}    */
/* 		 <p> {{ render(controller('AppBundle:Alta:Grupos')) }} </p>*/
/* */
/* 		 <h3> Observaciones:</h3>  */
/* 		   */
/*  			{{ form_row(form.observaciones) }}*/
/*    		<h3>¿Asistirán menores de edad?</h3>*/
/*    			{{ form_row(form.menoresEdad) }}*/
/*    		  		   */
/* 		    <br/>*/
/* 		       */
/*    		{{ form_end(form) }}*/
/* */
/* */
/*         {% endblock %}*/
/*    <hr><hr>*/
/*    <a href="/alta">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*    <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
