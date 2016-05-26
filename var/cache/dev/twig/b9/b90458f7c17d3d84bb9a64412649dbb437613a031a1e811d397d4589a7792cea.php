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
        $__internal_2c0c3b43ccf6abfc2ce7097acf5c37f90967d37bfe885241f8b4ec612bb78c5a = $this->env->getExtension("native_profiler");
        $__internal_2c0c3b43ccf6abfc2ce7097acf5c37f90967d37bfe885241f8b4ec612bb78c5a->enter($__internal_2c0c3b43ccf6abfc2ce7097acf5c37f90967d37bfe885241f8b4ec612bb78c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

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
        // line 60
        echo "   <hr><hr>
   <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_2c0c3b43ccf6abfc2ce7097acf5c37f90967d37bfe885241f8b4ec612bb78c5a->leave($__internal_2c0c3b43ccf6abfc2ce7097acf5c37f90967d37bfe885241f8b4ec612bb78c5a_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd903a139f6abb0fc7a254e1583a9c0c9eeec500bf80d4626033715b1fd4770b = $this->env->getExtension("native_profiler");
        $__internal_bd903a139f6abb0fc7a254e1583a9c0c9eeec500bf80d4626033715b1fd4770b->enter($__internal_bd903a139f6abb0fc7a254e1583a9c0c9eeec500bf80d4626033715b1fd4770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Formulario de alta de edición: </h2>
\t
\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
\t\t    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idciclo", array()), 'row');
        echo "
\t\t    <br/>
\t\t    *Podrá ser: 
\t\t    \t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


\t\t    \t";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menoresEdad", array()), 'row');
        echo "
\t\t    <br/><br/>
 \t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'row');
        echo "
   
   \t\t   
   \t\t";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_bd903a139f6abb0fc7a254e1583a9c0c9eeec500bf80d4626033715b1fd4770b->leave($__internal_bd903a139f6abb0fc7a254e1583a9c0c9eeec500bf80d4626033715b1fd4770b_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  116 => 53,  111 => 51,  106 => 49,  100 => 46,  94 => 43,  89 => 41,  84 => 39,  79 => 36,  73 => 35,  61 => 60,  59 => 35,  23 => 1,);
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
/*         <h2>Formulario de alta de edición: </h2>*/
/* 	*/
/* 		{{ form_start(form) }}*/
/*     */
/* 		    {{ form_row(form.fechaEdicion) }}*/
/* 		    <br/>*/
/* 		    {{ form_row(form.idciclo) }}*/
/* 		    <br/>*/
/* 		    *Podrá ser: */
/* 		    	{{ form_start(form) }}*/
/* */
/* */
/* 		    	{{ form_end(form) }}*/
/* */
/* 		    {{ form_row(form.menoresEdad) }}*/
/* 		    <br/><br/>*/
/*  			{{ form_row(form.observaciones) }}*/
/*    */
/*    		   */
/*    		{{ form_end(form) }}*/
/* */
/* */
/*         {% endblock %}*/
/*    <hr><hr>*/
/*    <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*    <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
