<?php

/* consultar/consultar.html.twig */
class __TwigTemplate_1f3b448d155ba45b367452b2a74ed8eef3e29e52f3a9840622f808be808c05b1 extends Twig_Template
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
        $__internal_7c35ac729812a2e4084ec139e136c11ebe77f0342dc0900eef5336d9f76d43c9 = $this->env->getExtension("native_profiler");
        $__internal_7c35ac729812a2e4084ec139e136c11ebe77f0342dc0900eef5336d9f76d43c9->enter($__internal_7c35ac729812a2e4084ec139e136c11ebe77f0342dc0900eef5336d9f76d43c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "consultar/consultar.html.twig"));

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
\t<p>Nombre del departamento</p>
\t<select>
    <option value=\"a\">Informática y Comunicaciones</option>
    <option value=\"b\">Administración y Gestión</option>
\t<option value=\"c\">Actividades Extraescolares</option>
\t</select>
\t<p>Actividades que se realizan</p>
\t<ul>
\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")));
        foreach ($context['_seq'] as $context["_key"] => $context["nombreActividad"]) {
            // line 38
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nombreActividad"], "nombreActividad", array()), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombreActividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</ul>
  <br><br>
 <button type=\"submit\">consultar</button>
  <hr>
  </body>
</html>";
        
        $__internal_7c35ac729812a2e4084ec139e136c11ebe77f0342dc0900eef5336d9f76d43c9->leave($__internal_7c35ac729812a2e4084ec139e136c11ebe77f0342dc0900eef5336d9f76d43c9_prof);

    }

    public function getTemplateName()
    {
        return "consultar/consultar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 40,  64 => 38,  60 => 37,  22 => 1,);
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
/* 	<p>Nombre del departamento</p>*/
/* 	<select>*/
/*     <option value="a">Informática y Comunicaciones</option>*/
/*     <option value="b">Administración y Gestión</option>*/
/* 	<option value="c">Actividades Extraescolares</option>*/
/* 	</select>*/
/* 	<p>Actividades que se realizan</p>*/
/* 	<ul>*/
/* 	{% for nombreActividad in nombre%}*/
/* 		<li>{{nombreActividad.nombreActividad}}</li>*/
/* 	{% endfor %}*/
/* 	</ul>*/
/*   <br><br>*/
/*  <button type="submit">consultar</button>*/
/*   <hr>*/
/*   </body>*/
/* </html>*/
