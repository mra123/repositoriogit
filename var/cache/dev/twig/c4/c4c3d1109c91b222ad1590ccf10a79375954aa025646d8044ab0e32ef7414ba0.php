<?php

/* inicio/inicio.html.twig */
class __TwigTemplate_a8d5346e1d9c127ca8dae2b69aa4282af24e295183d89260656e1dca10cc1320 extends Twig_Template
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
        $__internal_5e26af0bddb91cacc759fdee217df375c3c60dcb68cd76ab64f709684c84cd1e = $this->env->getExtension("native_profiler");
        $__internal_5e26af0bddb91cacc759fdee217df375c3c60dcb68cd76ab64f709684c84cd1e->enter($__internal_5e26af0bddb91cacc759fdee217df375c3c60dcb68cd76ab64f709684c84cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

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
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_5e26af0bddb91cacc759fdee217df375c3c60dcb68cd76ab64f709684c84cd1e->leave($__internal_5e26af0bddb91cacc759fdee217df375c3c60dcb68cd76ab64f709684c84cd1e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_c89eb3d214fc164bb83c2871e9067e8cf779795a07e6a7d824b070fef3cb8c37 = $this->env->getExtension("native_profiler");
        $__internal_c89eb3d214fc164bb83c2871e9067e8cf779795a07e6a7d824b070fef3cb8c37->enter($__internal_c89eb3d214fc164bb83c2871e9067e8cf779795a07e6a7d824b070fef3cb8c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
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
        
        $__internal_c89eb3d214fc164bb83c2871e9067e8cf779795a07e6a7d824b070fef3cb8c37->leave($__internal_c89eb3d214fc164bb83c2871e9067e8cf779795a07e6a7d824b070fef3cb8c37_prof);

    }

    public function getTemplateName()
    {
        return "inicio/inicio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 39,  73 => 38,  64 => 55,  62 => 38,  23 => 1,);
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
