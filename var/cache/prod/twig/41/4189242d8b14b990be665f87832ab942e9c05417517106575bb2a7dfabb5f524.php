<?php

/* consultar/consultardepartamento.html.twig */
class __TwigTemplate_594ccf00eb065a53213cd26a0ecae1d8d2fb1cfabbc11c683c0a6ccdadeed1cc extends Twig_Template
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
\t<p>Selecciona el departamento:</p><br><br>

\t<ul>
        <li><a href=\"/consultardept/1\">INFORMATICA Y COMUNICACIONES</a></li>
        <li><a href=\"/consultardept/2\">ADMINISTRACIÓN Y GESTIÓN</a></li>
        <li><a href=\"/consultardept/3\">COMERCIO Y MARKETING</a></li>
    </ul>
    <br><br>
 
  <hr><hr>
  <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href=\"/logout\">Logout</a>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "consultar/consultardepartamento.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*    <style>*/
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
/* </style> */
/* 	<h2>Gestión de actividades</h2>*/
/*     </head>*/
/*     <body>	*/
/* 	<p>Selecciona el departamento:</p><br><br>*/
/* */
/* 	<ul>*/
/*         <li><a href="/consultardept/1">INFORMATICA Y COMUNICACIONES</a></li>*/
/*         <li><a href="/consultardept/2">ADMINISTRACIÓN Y GESTIÓN</a></li>*/
/*         <li><a href="/consultardept/3">COMERCIO Y MARKETING</a></li>*/
/*     </ul>*/
/*     <br><br>*/
/*  */
/*   <hr><hr>*/
/*   <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <a href="/logout">Logout</a>*/
/*   </body>*/
/* </html>*/
