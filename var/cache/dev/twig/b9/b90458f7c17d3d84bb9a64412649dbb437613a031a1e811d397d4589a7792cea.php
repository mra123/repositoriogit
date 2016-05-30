<?php

/* alta/altaedicion.html.twig */
class __TwigTemplate_6aef676290501a06ea1269eb09cdb5d099c6f2b6f866a6a0275cb4eea4652526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee9c0e194de3c314c189e1b04ca262d66b3fb300b430e946964ca51044ae29d5 = $this->env->getExtension("native_profiler");
        $__internal_ee9c0e194de3c314c189e1b04ca262d66b3fb300b430e946964ca51044ae29d5->enter($__internal_ee9c0e194de3c314c189e1b04ca262d66b3fb300b430e946964ca51044ae29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

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
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "   <hr><hr>
   <a href=\"/alta\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_ee9c0e194de3c314c189e1b04ca262d66b3fb300b430e946964ca51044ae29d5->leave($__internal_ee9c0e194de3c314c189e1b04ca262d66b3fb300b430e946964ca51044ae29d5_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_63247d51bd7abd17e39680743dfe06757c36f81c68f4616b648bf8ffdb0fdd54 = $this->env->getExtension("native_profiler");
        $__internal_63247d51bd7abd17e39680743dfe06757c36f81c68f4616b648bf8ffdb0fdd54->enter($__internal_63247d51bd7abd17e39680743dfe06757c36f81c68f4616b648bf8ffdb0fdd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
\t\t
        <h2>Formulario de alta de edición: </h2>

\t\t";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<h3>Fecha de la actividad: </h3>\t    
\t\t    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t <h3>Selecciona el/los grupos que asistirán:</h3>
\t\t    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idciclo", array()), 'row');
        echo "\t\t\t\t \t\t    
\t\t    <br/>

\t\t ";
        // line 48
        echo "    
\t\t <p> ";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Alta:Grupos"));
        echo " </p>

\t\t <h3> Observaciones:</h3>  
\t\t   
 \t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'row');
        echo "
   \t\t<h3>¿Asistirán menores de edad?</h3>
   \t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menoresEdad", array()), 'row');
        echo "
   \t\t  \t\t   
\t\t    <br/>
\t\t       
   \t\t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_63247d51bd7abd17e39680743dfe06757c36f81c68f4616b648bf8ffdb0fdd54->leave($__internal_63247d51bd7abd17e39680743dfe06757c36f81c68f4616b648bf8ffdb0fdd54_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  117 => 55,  112 => 53,  105 => 49,  102 => 48,  96 => 45,  90 => 42,  85 => 40,  79 => 36,  73 => 35,  61 => 63,  59 => 35,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
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
/* 		 <h3>Selecciona el/los grupos que asistirán:</h3>*/
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
