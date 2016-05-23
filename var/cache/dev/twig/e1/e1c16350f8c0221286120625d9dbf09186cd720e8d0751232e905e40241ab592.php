<?php

/* alta/consulta_actividades.html.twig */
class __TwigTemplate_ddb27ab1f087f56f6b683557b24bc50bcc9b6502586a56e5c8f2a126416ae784 extends Twig_Template
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
        $__internal_12813788860e6f2fc5cb0271195650d68b852fd4ddbdf3e4711cccfd5201784f = $this->env->getExtension("native_profiler");
        $__internal_12813788860e6f2fc5cb0271195650d68b852fd4ddbdf3e4711cccfd5201784f->enter($__internal_12813788860e6f2fc5cb0271195650d68b852fd4ddbdf3e4711cccfd5201784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/consulta_actividades.html.twig"));

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
        // line 46
        echo "       
    </body>
</html>
";
        
        $__internal_12813788860e6f2fc5cb0271195650d68b852fd4ddbdf3e4711cccfd5201784f->leave($__internal_12813788860e6f2fc5cb0271195650d68b852fd4ddbdf3e4711cccfd5201784f_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_e45b553f3caef8cc62f9e11dc1c91d4308b69be0d4127f1d040894cf0e833010 = $this->env->getExtension("native_profiler");
        $__internal_e45b553f3caef8cc62f9e11dc1c91d4308b69be0d4127f1d040894cf0e833010->enter($__internal_e45b553f3caef8cc62f9e11dc1c91d4308b69be0d4127f1d040894cf0e833010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Listado de actividades: </h2>
\t\t<ul>
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")));
        foreach ($context['_seq'] as $context["_key"] => $context["nombreActividad"]) {
            // line 40
            echo "\t\t<li><a href=\"/alta/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idActividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</ul>
        

        ";
        
        $__internal_e45b553f3caef8cc62f9e11dc1c91d4308b69be0d4127f1d040894cf0e833010->leave($__internal_e45b553f3caef8cc62f9e11dc1c91d4308b69be0d4127f1d040894cf0e833010_prof);

    }

    public function getTemplateName()
    {
        return "alta/consulta_actividades.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  86 => 40,  82 => 39,  77 => 36,  71 => 35,  61 => 46,  59 => 35,  23 => 1,);
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
/*         <h2>Listado de actividades: </h2>*/
/* 		<ul>*/
/* 		{% for nombreActividad in nombre %}*/
/* 		<li><a href="/alta/{{nombreActividad.idActividad}}">{{nombreActividad.nombreActividad}}</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/*         */
/* */
/*         {% endblock %}*/
/*        */
/*     </body>*/
/* </html>*/
/* */
