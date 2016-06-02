<?php

/* alta/altaedicion.html.twig */
class __TwigTemplate_c19c6f6b29cef4c81a4733361cd532219ee54f26e7306becc288e674a8927f89 extends Twig_Template
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

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "
\t\t
        <h2>Formulario de alta de edición: </h2>

\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t<h3>Fecha de la actividad: </h3>\t    
\t\t    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t <h3>Selecciona el grupo que asistirá:</h3>
\t\t    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "idciclo", array()), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observaciones", array()), 'row');
        echo "
   \t\t<h3>¿Asistirán menores de edad?</h3>
   \t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menoresEdad", array()), 'row');
        echo "
   \t\t  \t\t   
\t\t    <br/>
\t\t       
   \t\t";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


        ";
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
        return array (  140 => 63,  133 => 59,  128 => 57,  121 => 53,  118 => 52,  112 => 49,  106 => 46,  101 => 44,  95 => 40,  92 => 39,  87 => 6,  81 => 5,  72 => 67,  70 => 39,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
