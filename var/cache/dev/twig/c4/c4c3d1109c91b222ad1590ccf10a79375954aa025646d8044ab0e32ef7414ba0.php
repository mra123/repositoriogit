<?php

/* inicio/inicio.html.twig */
class __TwigTemplate_a8d5346e1d9c127ca8dae2b69aa4282af24e295183d89260656e1dca10cc1320 extends Twig_Template
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
        $__internal_ba1e230593a2ab343964fb2d403883d7e974374026c74edb789c881785f49911 = $this->env->getExtension("native_profiler");
        $__internal_ba1e230593a2ab343964fb2d403883d7e974374026c74edb789c881785f49911->enter($__internal_ba1e230593a2ab343964fb2d403883d7e974374026c74edb789c881785f49911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

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
        
        $__internal_ba1e230593a2ab343964fb2d403883d7e974374026c74edb789c881785f49911->leave($__internal_ba1e230593a2ab343964fb2d403883d7e974374026c74edb789c881785f49911_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47884d9d55e41196e0fdf861ea39edd275e06a05cda593230111edd0c645c49c = $this->env->getExtension("native_profiler");
        $__internal_47884d9d55e41196e0fdf861ea39edd275e06a05cda593230111edd0c645c49c->enter($__internal_47884d9d55e41196e0fdf861ea39edd275e06a05cda593230111edd0c645c49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_47884d9d55e41196e0fdf861ea39edd275e06a05cda593230111edd0c645c49c->leave($__internal_47884d9d55e41196e0fdf861ea39edd275e06a05cda593230111edd0c645c49c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ea624c50e28695e0bfa621bcfe2bc2111b52d4000740ef3e8df1340ac512b1a = $this->env->getExtension("native_profiler");
        $__internal_8ea624c50e28695e0bfa621bcfe2bc2111b52d4000740ef3e8df1340ac512b1a->enter($__internal_8ea624c50e28695e0bfa621bcfe2bc2111b52d4000740ef3e8df1340ac512b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8ea624c50e28695e0bfa621bcfe2bc2111b52d4000740ef3e8df1340ac512b1a->leave($__internal_8ea624c50e28695e0bfa621bcfe2bc2111b52d4000740ef3e8df1340ac512b1a_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e176bee82a0c22c203f5c042f378ad4858352ba1c635a2da05dcebe4ecfb325 = $this->env->getExtension("native_profiler");
        $__internal_1e176bee82a0c22c203f5c042f378ad4858352ba1c635a2da05dcebe4ecfb325->enter($__internal_1e176bee82a0c22c203f5c042f378ad4858352ba1c635a2da05dcebe4ecfb325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e176bee82a0c22c203f5c042f378ad4858352ba1c635a2da05dcebe4ecfb325->leave($__internal_1e176bee82a0c22c203f5c042f378ad4858352ba1c635a2da05dcebe4ecfb325_prof);

    }

    public function getTemplateName()
    {
        return "inicio/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  110 => 42,  99 => 6,  87 => 5,  78 => 59,  76 => 42,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
