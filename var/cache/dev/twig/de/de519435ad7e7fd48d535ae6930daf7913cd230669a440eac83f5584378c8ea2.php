<?php

/* alta/crear_actividades.html.twig */
class __TwigTemplate_52f77e61aa9f2faf539c071d023e36ec2203e5c7ae32d637830d8a9399cdb7c4 extends Twig_Template
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
        $__internal_a1d658c879bc8fed93f013fb6a7558663bb6d32fef92dba76563bce1d27eca59 = $this->env->getExtension("native_profiler");
        $__internal_a1d658c879bc8fed93f013fb6a7558663bb6d32fef92dba76563bce1d27eca59->enter($__internal_a1d658c879bc8fed93f013fb6a7558663bb6d32fef92dba76563bce1d27eca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/crear_actividades.html.twig"));

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
        // line 48
        echo "       
    <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_a1d658c879bc8fed93f013fb6a7558663bb6d32fef92dba76563bce1d27eca59->leave($__internal_a1d658c879bc8fed93f013fb6a7558663bb6d32fef92dba76563bce1d27eca59_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_acb2a59ec4318592f0ce846b8e57add023a059a8e9159f64c28925da7c86fa65 = $this->env->getExtension("native_profiler");
        $__internal_acb2a59ec4318592f0ce846b8e57add023a059a8e9159f64c28925da7c86fa65->enter($__internal_acb2a59ec4318592f0ce846b8e57add023a059a8e9159f64c28925da7c86fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Formulario de alta de una actividad: </h2>
\t
\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
\t\t    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreActividad", array()), 'row');
        echo "
\t\t    <br/>
\t\t     \t\t   
   \t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_acb2a59ec4318592f0ce846b8e57add023a059a8e9159f64c28925da7c86fa65->leave($__internal_acb2a59ec4318592f0ce846b8e57add023a059a8e9159f64c28925da7c86fa65_prof);

    }

    public function getTemplateName()
    {
        return "alta/crear_actividades.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  90 => 41,  85 => 39,  80 => 36,  74 => 35,  61 => 48,  59 => 35,  23 => 1,);
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
/*         <h2>Formulario de alta de una actividad: </h2>*/
/* 	*/
/* 		{{ form_start(form) }}*/
/*     */
/* 		    {{ form_row(form.nombreActividad) }}*/
/* 		    <br/>*/
/* 		     		   */
/*    		{{ form_end(form) }}*/
/* */
/* */
/*         {% endblock %}*/
/*        */
/*     <hr><hr>*/
/*     <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
