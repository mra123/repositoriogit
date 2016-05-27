<?php

/* alta/prueba.html.twig */
class __TwigTemplate_cf3f8a738b123f5bf707b3afdf8a829fe39494d661eda692185b08ecb5c37b5d extends Twig_Template
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
        $__internal_7aa7c2feb6255df5430cc0b6075f439ff9a44aef7e250303f90665eaa42001d4 = $this->env->getExtension("native_profiler");
        $__internal_7aa7c2feb6255df5430cc0b6075f439ff9a44aef7e250303f90665eaa42001d4->enter($__internal_7aa7c2feb6255df5430cc0b6075f439ff9a44aef7e250303f90665eaa42001d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/prueba.html.twig"));

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
        // line 49
        echo "   <hr><hr>
   <a href=\"/alta\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_7aa7c2feb6255df5430cc0b6075f439ff9a44aef7e250303f90665eaa42001d4->leave($__internal_7aa7c2feb6255df5430cc0b6075f439ff9a44aef7e250303f90665eaa42001d4_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e04a35835443e2700906594604fdb5dd0296af6cdcfa7de6bacfc9ba0a30924 = $this->env->getExtension("native_profiler");
        $__internal_4e04a35835443e2700906594604fdb5dd0296af6cdcfa7de6bacfc9ba0a30924->enter($__internal_4e04a35835443e2700906594604fdb5dd0296af6cdcfa7de6bacfc9ba0a30924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Listado de grupos: </h2>
\t\t<ul>
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciclos"]) ? $context["ciclos"] : $this->getContext($context, "ciclos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
            // line 40
            echo "
\t\t<li> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "idciclo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "nombreCiclo", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "curso", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "turno", array()), "html", null, true);
            echo "</li>


\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</ul>
        

        ";
        
        $__internal_4e04a35835443e2700906594604fdb5dd0296af6cdcfa7de6bacfc9ba0a30924->leave($__internal_4e04a35835443e2700906594604fdb5dd0296af6cdcfa7de6bacfc9ba0a30924_prof);

    }

    public function getTemplateName()
    {
        return "alta/prueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  91 => 41,  88 => 40,  84 => 39,  79 => 36,  73 => 35,  61 => 49,  59 => 35,  23 => 1,);
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
/*         <h2>Listado de grupos: </h2>*/
/* 		<ul>*/
/* 		{% for ciclo in ciclos %}*/
/* */
/* 		<li> {{ciclo.idciclo}} {{ciclo.nombreCiclo}} {{ciclo.curso}} {{ciclo.turno}}</li>*/
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
