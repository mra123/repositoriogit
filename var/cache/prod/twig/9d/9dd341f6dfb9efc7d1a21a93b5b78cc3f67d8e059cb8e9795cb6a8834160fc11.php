<?php

/* :consultar:consultaractividadesdepartamento.html.twig */
class __TwigTemplate_731232cbedbb8c68246381f1b9ce6834bdff25f760595a3aa15e60ebfa598d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
       <style>


h2 {
    color: black;
    text-align: center;
    border-style: solid;
    border-width: medium;
  border-color:orange;

}

p {
    font-family: \"Times New Roman\";
    font-size: 15px;
  
}
hr{
  color: orange;
}
</style>
\t<h2>Gestión de actividades</h2>
    </head>
    <body>\t
\t<p>Selecciona la actividad a consultar:</p><br><br>

\t<ul>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombre"]) ? $context["nombre"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nombreActividad"]) {
            // line 33
            echo "         
        <li><a href=\"/gestionar/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idactividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</a></li>
   
        

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "     </ul>

    <br><br>
 
  <hr><hr>
  <a href=\"/consultar\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href=\"/logout\">Logout</a>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return ":consultar:consultaractividadesdepartamento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  59 => 34,  56 => 33,  52 => 32,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*        <style>*/
/* */
/* */
/* h2 {*/
/*     color: black;*/
/*     text-align: center;*/
/*     border-style: solid;*/
/*     border-width: medium;*/
/*   border-color:orange;*/
/* */
/* }*/
/* */
/* p {*/
/*     font-family: "Times New Roman";*/
/*     font-size: 15px;*/
/*   */
/* }*/
/* hr{*/
/*   color: orange;*/
/* }*/
/* </style>*/
/* 	<h2>Gestión de actividades</h2>*/
/*     </head>*/
/*     <body>	*/
/* 	<p>Selecciona la actividad a consultar:</p><br><br>*/
/* */
/* 	<ul>*/
/*     {% for nombreActividad in nombre %}*/
/*          */
/*         <li><a href="/gestionar/{{nombreActividad.idactividad}}">{{nombreActividad.nombreActividad}}</a></li>*/
/*    */
/*         */
/* */
/*     {% endfor %}*/
/*      </ul>*/
/* */
/*     <br><br>*/
/*  */
/*   <hr><hr>*/
/*   <a href="/consultar">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <a href="/logout">Logout</a>*/
/*   </body>*/
/* </html>*/
