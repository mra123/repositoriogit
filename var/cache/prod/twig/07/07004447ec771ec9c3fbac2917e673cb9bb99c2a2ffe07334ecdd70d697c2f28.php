<?php

/* :inicio:inicio.html.twig */
class __TwigTemplate_4a89a2dfd94e762d01f7693dd13c9c26bcdb07e9f0962e9f25d88e575d910159 extends Twig_Template
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
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "    </body>
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

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "
        <h2>Gestión de ediciones</h2>

        <p>Pulsa para dar de alta una edición</p>
       \t<div class=\"boton\">
       \t\t<a href=\"/alta\">Alta</a>
\t\t</div>       
\t\t\t<hr>
\t\t<p>Pulsa para consultar una edición</p>
\t\t<div class=\"boton\">
\t\t\t<a href=\"/consultar\">Consultar</a>
\t\t</div>\t
    <br><br>    
    <hr><hr>    
    <a href=\"/logout\">Logout</a> 
    ";
    }

    public function getTemplateName()
    {
        return ":inicio:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  92 => 42,  87 => 6,  81 => 5,  75 => 59,  73 => 42,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/*         <h2>Gestión de ediciones</h2>*/
/* */
/*         <p>Pulsa para dar de alta una edición</p>*/
/*        	<div class="boton">*/
/*        		<a href="/alta">Alta</a>*/
/* 		</div>       */
/* 			<hr>*/
/* 		<p>Pulsa para consultar una edición</p>*/
/* 		<div class="boton">*/
/* 			<a href="/consultar">Consultar</a>*/
/* 		</div>	*/
/*     <br><br>    */
/*     <hr><hr>    */
/*     <a href="/logout">Logout</a> */
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
