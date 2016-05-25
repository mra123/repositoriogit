<?php

/* consultar/consultaractividadesdepartamento.html.twig */
class __TwigTemplate_854dfb0e622da33203a38f1748fbd46f4f881d96eeab18af6ed8a6f98f697a94 extends Twig_Template
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
        $__internal_baf276e77c5ce941ec34aca74cf80aca4f7ed84327cd396f737a7ef9ab30a680 = $this->env->getExtension("native_profiler");
        $__internal_baf276e77c5ce941ec34aca74cf80aca4f7ed84327cd396f737a7ef9ab30a680->enter($__internal_baf276e77c5ce941ec34aca74cf80aca4f7ed84327cd396f737a7ef9ab30a680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultar/consultaractividadesdepartamento.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")));
        foreach ($context['_seq'] as $context["_key"] => $context["nombreActividad"]) {
            // line 33
            echo "         
        <li><a href=\"/gestionar/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idactividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</a></li>
    </ul>
        

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <br><br>
 
  <hr><hr>
  <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href=\"/logout\">Logout</a>
  </body>
</html>";
        
        $__internal_baf276e77c5ce941ec34aca74cf80aca4f7ed84327cd396f737a7ef9ab30a680->leave($__internal_baf276e77c5ce941ec34aca74cf80aca4f7ed84327cd396f737a7ef9ab30a680_prof);

    }

    public function getTemplateName()
    {
        return "consultar/consultaractividadesdepartamento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  62 => 34,  59 => 33,  55 => 32,  22 => 1,);
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
/*     </ul>*/
/*         */
/* */
/*     {% endfor %}*/
/* */
/*     <br><br>*/
/*  */
/*   <hr><hr>*/
/*   <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <a href="/logout">Logout</a>*/
/*   </body>*/
/* </html>*/
