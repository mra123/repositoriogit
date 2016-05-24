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
        $__internal_8e09bb0df0a840b4fb695b4b8850104bbfb24ad9d1f375596277b760b062bd7b = $this->env->getExtension("native_profiler");
        $__internal_8e09bb0df0a840b4fb695b4b8850104bbfb24ad9d1f375596277b760b062bd7b->enter($__internal_8e09bb0df0a840b4fb695b4b8850104bbfb24ad9d1f375596277b760b062bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/consulta_actividades.html.twig"));

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
        // line 50
        echo "       
    </body>
</html>
";
        
        $__internal_8e09bb0df0a840b4fb695b4b8850104bbfb24ad9d1f375596277b760b062bd7b->leave($__internal_8e09bb0df0a840b4fb695b4b8850104bbfb24ad9d1f375596277b760b062bd7b_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_864c543024bc847b44c57e1e5a13fc85b6bc8a8404dd3f0f1a9d849b9261ad1d = $this->env->getExtension("native_profiler");
        $__internal_864c543024bc847b44c57e1e5a13fc85b6bc8a8404dd3f0f1a9d849b9261ad1d->enter($__internal_864c543024bc847b44c57e1e5a13fc85b6bc8a8404dd3f0f1a9d849b9261ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "
\t\t<li><a href=\"/altaedicion/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idActividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</li>

\t\t<li><a href=\"/alta/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idActividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</li>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</ul>
        

        ";
        
        $__internal_864c543024bc847b44c57e1e5a13fc85b6bc8a8404dd3f0f1a9d849b9261ad1d->leave($__internal_864c543024bc847b44c57e1e5a13fc85b6bc8a8404dd3f0f1a9d849b9261ad1d_prof);

    }

    public function getTemplateName()
    {
        return "alta/consulta_actividades.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  96 => 43,  89 => 41,  86 => 40,  82 => 39,  77 => 36,  71 => 35,  61 => 50,  59 => 35,  23 => 1,);
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
/* */
/* 		<li><a href="/altaedicion/{{nombreActividad.idActividad}}">{{nombreActividad.nombreActividad}}</li>*/
/* */
/* 		<li><a href="/alta/{{nombreActividad.idActividad}}">{{nombreActividad.nombreActividad}}</li>*/
/* */
/* 		{% endfor %}*/
/* 		</ul>*/
/*         */
/* */
/*         {% endblock %}*/
/*        */
/*     </body>*/
/* </html>*/
/* */
