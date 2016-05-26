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
        $__internal_1365be86951f545da946e4d3ea8b4684dbed8fad5e2e5d1e76f1e70a9ddf1339 = $this->env->getExtension("native_profiler");
        $__internal_1365be86951f545da946e4d3ea8b4684dbed8fad5e2e5d1e76f1e70a9ddf1339->enter($__internal_1365be86951f545da946e4d3ea8b4684dbed8fad5e2e5d1e76f1e70a9ddf1339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

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
        
        $__internal_1365be86951f545da946e4d3ea8b4684dbed8fad5e2e5d1e76f1e70a9ddf1339->leave($__internal_1365be86951f545da946e4d3ea8b4684dbed8fad5e2e5d1e76f1e70a9ddf1339_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c45b94aec63f98d2010cca1b8d1977d5119e4340a8e8ebc4df1b070e5ca8f7 = $this->env->getExtension("native_profiler");
        $__internal_f7c45b94aec63f98d2010cca1b8d1977d5119e4340a8e8ebc4df1b070e5ca8f7->enter($__internal_f7c45b94aec63f98d2010cca1b8d1977d5119e4340a8e8ebc4df1b070e5ca8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Formulario de alta de edición: </h2>
\t
\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t    
\t\t    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idciclo", array()), 'row');
        echo "
\t\t    
\t\t    <p>checklist de grupos: daw1e, daw2e, daw1a, daw2a, dam1e, dam2e, dam1a, dam2a, 
\t\t    
\t\t    <br/>
\t\t    *Podrá ser: 
\t\t    \t";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


\t\t    \t";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menoresEdad", array()), 'row');
        echo "
\t\t    <br/><br/>
 \t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'row');
        echo "
   
   \t\t   
   \t\t";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_f7c45b94aec63f98d2010cca1b8d1977d5119e4340a8e8ebc4df1b070e5ca8f7->leave($__internal_f7c45b94aec63f98d2010cca1b8d1977d5119e4340a8e8ebc4df1b070e5ca8f7_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  119 => 56,  114 => 54,  109 => 52,  103 => 49,  94 => 43,  89 => 41,  84 => 39,  79 => 36,  73 => 35,  61 => 63,  59 => 35,  23 => 1,);
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
/* 			    */
/* 		    {{ form_row(form.fechaEdicion) }}*/
/* 		    <br/>*/
/* 		    {{ form_row(form.idciclo) }}*/
/* 		    */
/* 		    <p>checklist de grupos: daw1e, daw2e, daw1a, daw2a, dam1e, dam2e, dam1a, dam2a, */
/* 		    */
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
/*    <a href="/alta">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*    <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
