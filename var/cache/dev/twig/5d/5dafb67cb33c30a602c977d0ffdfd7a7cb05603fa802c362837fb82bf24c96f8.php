<?php

/* inicio/inicio.html.twig */
class __TwigTemplate_cb9f81d868d55a7f721051f655291f5d8cde241e4402af76b7b8abf058468ba4 extends Twig_Template
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
        $__internal_ac06a0805f9a3248ff592b41ab09d33af14329a19cf713c4974ee81d6052c372 = $this->env->getExtension("native_profiler");
        $__internal_ac06a0805f9a3248ff592b41ab09d33af14329a19cf713c4974ee81d6052c372->enter($__internal_ac06a0805f9a3248ff592b41ab09d33af14329a19cf713c4974ee81d6052c372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

    \t<style>

    \t\t.boton {


    \t\t
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
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "       
    </body>
</html>
";
        
        $__internal_ac06a0805f9a3248ff592b41ab09d33af14329a19cf713c4974ee81d6052c372->leave($__internal_ac06a0805f9a3248ff592b41ab09d33af14329a19cf713c4974ee81d6052c372_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_169790f1b52027751c74ef432886e4e7fa04e3ff43c9ea634500cf98a5bebe1b = $this->env->getExtension("native_profiler");
        $__internal_169790f1b52027751c74ef432886e4e7fa04e3ff43c9ea634500cf98a5bebe1b->enter($__internal_169790f1b52027751c74ef432886e4e7fa04e3ff43c9ea634500cf98a5bebe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "
        <h2>Gestión de actividades</h2>

        <p>Pulsa para dar de alta una actividad</p>
       \t<div class=\"boton\">
       \t\t<a href=\"/alta\">Alta</a>
\t\t</div>       
\t\t\t<hr>
\t\t<p>Pulsa para consultar una actividad</p>
\t\t<div class=\"boton\">
\t\t\t<a href=\"/consultar\">Consultar</a>
\t\t\t<hr>
\t\t</div>\t

        ";
        
        $__internal_169790f1b52027751c74ef432886e4e7fa04e3ff43c9ea634500cf98a5bebe1b->leave($__internal_169790f1b52027751c74ef432886e4e7fa04e3ff43c9ea634500cf98a5bebe1b_prof);

    }

    public function getTemplateName()
    {
        return "inicio/inicio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  74 => 38,  64 => 54,  62 => 38,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*     	<style>*/
/* */
/*     		.boton {*/
/* */
/* */
/*     		*/
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
/*         <h2>Gestión de actividades</h2>*/
/* */
/*         <p>Pulsa para dar de alta una actividad</p>*/
/*        	<div class="boton">*/
/*        		<a href="/alta">Alta</a>*/
/* 		</div>       */
/* 			<hr>*/
/* 		<p>Pulsa para consultar una actividad</p>*/
/* 		<div class="boton">*/
/* 			<a href="/consultar">Consultar</a>*/
/* 			<hr>*/
/* 		</div>	*/
/* */
/*         {% endblock %}*/
/*        */
/*     </body>*/
/* </html>*/
/* */
