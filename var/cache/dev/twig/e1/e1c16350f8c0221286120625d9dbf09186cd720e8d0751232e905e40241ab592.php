<?php

/* alta/consulta_actividades.html.twig */
class __TwigTemplate_ddb27ab1f087f56f6b683557b24bc50bcc9b6502586a56e5c8f2a126416ae784 extends Twig_Template
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
        $__internal_273762b755ca83008186e20603636eae0660d4d7a8d4ccc3d00ed77b6f195de7 = $this->env->getExtension("native_profiler");
        $__internal_273762b755ca83008186e20603636eae0660d4d7a8d4ccc3d00ed77b6f195de7->enter($__internal_273762b755ca83008186e20603636eae0660d4d7a8d4ccc3d00ed77b6f195de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/consulta_actividades.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\" />
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
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "   <hr><hr>
   <a href=\"/alta\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_273762b755ca83008186e20603636eae0660d4d7a8d4ccc3d00ed77b6f195de7->leave($__internal_273762b755ca83008186e20603636eae0660d4d7a8d4ccc3d00ed77b6f195de7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_71c80f234265bbc785b0802b9223f1301b1084bb5a3b577f1c666f70a3aa0444 = $this->env->getExtension("native_profiler");
        $__internal_71c80f234265bbc785b0802b9223f1301b1084bb5a3b577f1c666f70a3aa0444->enter($__internal_71c80f234265bbc785b0802b9223f1301b1084bb5a3b577f1c666f70a3aa0444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_71c80f234265bbc785b0802b9223f1301b1084bb5a3b577f1c666f70a3aa0444->leave($__internal_71c80f234265bbc785b0802b9223f1301b1084bb5a3b577f1c666f70a3aa0444_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d249f72f4615755e8ecea3f8e43f21d107576320503946c4f24ee43d56b50372 = $this->env->getExtension("native_profiler");
        $__internal_d249f72f4615755e8ecea3f8e43f21d107576320503946c4f24ee43d56b50372->enter($__internal_d249f72f4615755e8ecea3f8e43f21d107576320503946c4f24ee43d56b50372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d249f72f4615755e8ecea3f8e43f21d107576320503946c4f24ee43d56b50372->leave($__internal_d249f72f4615755e8ecea3f8e43f21d107576320503946c4f24ee43d56b50372_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e09cf33d878277155fc18fffaa9117aadb11b3e800dd4ebd965e2aef7697d1 = $this->env->getExtension("native_profiler");
        $__internal_d2e09cf33d878277155fc18fffaa9117aadb11b3e800dd4ebd965e2aef7697d1->enter($__internal_d2e09cf33d878277155fc18fffaa9117aadb11b3e800dd4ebd965e2aef7697d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "
        <h2>Listado de actividades: </h2>
\t\t<ul>
\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")));
        foreach ($context['_seq'] as $context["_key"] => $context["nombreActividad"]) {
            // line 44
            echo "
\t\t<li><a href=\"/altaedicion/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idActividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</a></li>


\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</ul>
        

        ";
        
        $__internal_d2e09cf33d878277155fc18fffaa9117aadb11b3e800dd4ebd965e2aef7697d1->leave($__internal_d2e09cf33d878277155fc18fffaa9117aadb11b3e800dd4ebd965e2aef7697d1_prof);

    }

    public function getTemplateName()
    {
        return "alta/consulta_actividades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  128 => 45,  125 => 44,  121 => 43,  116 => 40,  110 => 39,  99 => 6,  87 => 5,  75 => 53,  73 => 39,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*     <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
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
/* 		<li><a href="/altaedicion/{{nombreActividad.idActividad}}">{{nombreActividad.nombreActividad}}</a></li>*/
/* */
/* */
/* 		{% endfor %}*/
/* 		</ul>*/
/*         */
/* */
/*         {% endblock %}*/
/*    <hr><hr>*/
/*    <a href="/alta">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*    <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
