<?php

/* inicio/inicio.html.twig */
class __TwigTemplate_6426dc0b01b2ab49b6b8657625dbd06e94ba961b30612886d2d823679918ec3c extends Twig_Template
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
        $__internal_1202b81b6b23d2570c11ece8f4fb7669b609208e60d66bf4938d9db7a8516b61 = $this->env->getExtension("native_profiler");
        $__internal_1202b81b6b23d2570c11ece8f4fb7669b609208e60d66bf4938d9db7a8516b61->enter($__internal_1202b81b6b23d2570c11ece8f4fb7669b609208e60d66bf4938d9db7a8516b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

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
        
        $__internal_1202b81b6b23d2570c11ece8f4fb7669b609208e60d66bf4938d9db7a8516b61->leave($__internal_1202b81b6b23d2570c11ece8f4fb7669b609208e60d66bf4938d9db7a8516b61_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_e498e9ccb4300ffc75f561c7f3106a0936be8155c5ec8fdf4c1242f47fd02880 = $this->env->getExtension("native_profiler");
        $__internal_e498e9ccb4300ffc75f561c7f3106a0936be8155c5ec8fdf4c1242f47fd02880->enter($__internal_e498e9ccb4300ffc75f561c7f3106a0936be8155c5ec8fdf4c1242f47fd02880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e498e9ccb4300ffc75f561c7f3106a0936be8155c5ec8fdf4c1242f47fd02880->leave($__internal_e498e9ccb4300ffc75f561c7f3106a0936be8155c5ec8fdf4c1242f47fd02880_prof);

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
