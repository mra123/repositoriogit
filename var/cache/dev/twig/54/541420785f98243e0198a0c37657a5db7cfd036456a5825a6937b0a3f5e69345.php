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
        $__internal_53e40a7f4bf90d7d2421a75f95d7c0304c7874bbe8b35bfb508b4bac0f223e68 = $this->env->getExtension("native_profiler");
        $__internal_53e40a7f4bf90d7d2421a75f95d7c0304c7874bbe8b35bfb508b4bac0f223e68->enter($__internal_53e40a7f4bf90d7d2421a75f95d7c0304c7874bbe8b35bfb508b4bac0f223e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultar/consultaractividadesdepartamento.html.twig"));

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
\tborder-color:orange;

}

p {
    font-family: \"Times New Roman\";
    font-size: 15px;
\t
}
hr{
\tcolor: orange;
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
            echo "        <li><a href=\"/gestionar/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "idActividad", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</a></li>
    </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    <br><br>
 
  <hr>
  </body>
</html>";
        
        $__internal_53e40a7f4bf90d7d2421a75f95d7c0304c7874bbe8b35bfb508b4bac0f223e68->leave($__internal_53e40a7f4bf90d7d2421a75f95d7c0304c7874bbe8b35bfb508b4bac0f223e68_prof);

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
        return array (  71 => 36,  59 => 33,  55 => 32,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* <style>*/
/* */
/* */
/* h2 {*/
/*     color: black;*/
/*     text-align: center;*/
/*     border-style: solid;*/
/*     border-width: medium;*/
/* 	border-color:orange;*/
/* */
/* }*/
/* */
/* p {*/
/*     font-family: "Times New Roman";*/
/*     font-size: 15px;*/
/* 	*/
/* }*/
/* hr{*/
/* 	color: orange;*/
/* }*/
/* </style>*/
/* 	<h2>Gestión de actividades</h2>*/
/*     </head>*/
/*     <body>	*/
/* 	<p>Selecciona la actividad a consultar:</p><br><br>*/
/* */
/* 	<ul>*/
/*     {% for nombreActividad in nombre %}*/
/*         <li><a href="/gestionar/{{nombreActividad.idActividad}}">{{nombreActividad.nombreActividad}}</a></li>*/
/*     </ul>*/
/*     {% endfor %}*/
/* */
/*     <br><br>*/
/*  */
/*   <hr>*/
/*   </body>*/
/* </html>*/
