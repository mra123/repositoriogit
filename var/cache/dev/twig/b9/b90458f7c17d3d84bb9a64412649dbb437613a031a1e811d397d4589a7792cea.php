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
        $__internal_6a3a06de41ce077efa7c24281fa97da8a2522302b38f81ca97d068c24074e551 = $this->env->getExtension("native_profiler");
        $__internal_6a3a06de41ce077efa7c24281fa97da8a2522302b38f81ca97d068c24074e551->enter($__internal_6a3a06de41ce077efa7c24281fa97da8a2522302b38f81ca97d068c24074e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

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
        // line 62
        echo "   <hr><hr>
   <a href=\"/alta\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_6a3a06de41ce077efa7c24281fa97da8a2522302b38f81ca97d068c24074e551->leave($__internal_6a3a06de41ce077efa7c24281fa97da8a2522302b38f81ca97d068c24074e551_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a105b2d12c35bfee1fb001e562cceeff43c6689104778212956a349fda9c181 = $this->env->getExtension("native_profiler");
        $__internal_1a105b2d12c35bfee1fb001e562cceeff43c6689104778212956a349fda9c181->enter($__internal_1a105b2d12c35bfee1fb001e562cceeff43c6689104778212956a349fda9c181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
\t\t
        <h2>Formulario de alta de edición: </h2>

\t\t";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t    
\t\t    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
\t\t    <br/>
\t\t    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idciclo", array()), 'row');
        echo "
\t\t   \t\t
\t\t \t\t    
\t\t    <br/>
\t\t    
\t\t    \t";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

\t\t    \t";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menoresEdad", array()), 'row');
        echo "
\t\t    <br/><br/>
 \t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'row');
        echo "
   
   \t\t   
   \t\t";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_1a105b2d12c35bfee1fb001e562cceeff43c6689104778212956a349fda9c181->leave($__internal_1a105b2d12c35bfee1fb001e562cceeff43c6689104778212956a349fda9c181_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  118 => 55,  113 => 53,  108 => 51,  103 => 49,  95 => 44,  90 => 42,  85 => 40,  79 => 36,  73 => 35,  61 => 62,  59 => 35,  23 => 1,);
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
/* 			    */
/* 		    {{ form_row(form.fechaEdicion) }}*/
/* 		    <br/>*/
/* 		    {{ form_row(form.idciclo) }}*/
/* 		   		*/
/* 		 		    */
/* 		    <br/>*/
/* 		    */
/* 		    	{{ form_start(form) }}*/
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
