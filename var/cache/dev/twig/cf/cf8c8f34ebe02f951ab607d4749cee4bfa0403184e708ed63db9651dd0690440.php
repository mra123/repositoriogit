<?php

/* gestionar/gestionar.html.twig */
class __TwigTemplate_94a4d13b7a0c5403c6302fdf7c523ef97e08048a5a08fb83c35d21f3f9eba141 extends Twig_Template
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
        $__internal_2158777a3fa238fb97ca7aaf929f9288797fbb3db3844e90351c440026592f0d = $this->env->getExtension("native_profiler");
        $__internal_2158777a3fa238fb97ca7aaf929f9288797fbb3db3844e90351c440026592f0d->enter($__internal_2158777a3fa238fb97ca7aaf929f9288797fbb3db3844e90351c440026592f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gestionar/gestionar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<style>

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
\t\t<h2>Gestión de actividades</h2>
    </head>
    <body>
\t<!---confirmar-->
\t<p>Escribe si necesitas alguna especificación y confirma la actividad</p>
\t<textarea name=\"message\" rows=\"10\" cols=\"30\"></textarea>
\t<br>
\t<input type=\"submit\">
\t<hr>
\t<!----no autorizar-->
\t <p>Pulsa el boton para no autorizar la actividad</p>
\t<input type=\"submit\" value=\"Noautorizar\">
\t<hr>
\t<!--- validar-->
\t <p>Pulsa el boton para validar la actividad</p>
\t<input type=\"submit\" value=\"validar\">
\t<hr>
\t<!--evaluar-->
\t
\t<!------baja-->
    <p>Pincha en el boton para dar de baja la actividad</p>
\t<input type=\"submit\" value=\"baja\">
\t<br><br>
\t\t<hr>
\t<!---imprimir-->
\t<p>Selecciona los documentos que necesitas imprimir</p>
\t<select name=\"documentos\">
    <option value=\"a\">Autorización a menores</option>
    <option value=\"b\">Justificantes</option>
  </select>
  <br><br>
  <input type=\"submit\">
  <hr>
    </body>
</html>
\t";
        
        $__internal_2158777a3fa238fb97ca7aaf929f9288797fbb3db3844e90351c440026592f0d->leave($__internal_2158777a3fa238fb97ca7aaf929f9288797fbb3db3844e90351c440026592f0d_prof);

    }

    public function getTemplateName()
    {
        return "gestionar/gestionar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* 		<style>*/
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
/* */
/* </style>*/
/* 		<h2>Gestión de actividades</h2>*/
/*     </head>*/
/*     <body>*/
/* 	<!---confirmar-->*/
/* 	<p>Escribe si necesitas alguna especificación y confirma la actividad</p>*/
/* 	<textarea name="message" rows="10" cols="30"></textarea>*/
/* 	<br>*/
/* 	<input type="submit">*/
/* 	<hr>*/
/* 	<!----no autorizar-->*/
/* 	 <p>Pulsa el boton para no autorizar la actividad</p>*/
/* 	<input type="submit" value="Noautorizar">*/
/* 	<hr>*/
/* 	<!--- validar-->*/
/* 	 <p>Pulsa el boton para validar la actividad</p>*/
/* 	<input type="submit" value="validar">*/
/* 	<hr>*/
/* 	<!--evaluar-->*/
/* 	*/
/* 	<!------baja-->*/
/*     <p>Pincha en el boton para dar de baja la actividad</p>*/
/* 	<input type="submit" value="baja">*/
/* 	<br><br>*/
/* 		<hr>*/
/* 	<!---imprimir-->*/
/* 	<p>Selecciona los documentos que necesitas imprimir</p>*/
/* 	<select name="documentos">*/
/*     <option value="a">Autorización a menores</option>*/
/*     <option value="b">Justificantes</option>*/
/*   </select>*/
/*   <br><br>*/
/*   <input type="submit">*/
/*   <hr>*/
/*     </body>*/
/* </html>*/
/* 	*/
