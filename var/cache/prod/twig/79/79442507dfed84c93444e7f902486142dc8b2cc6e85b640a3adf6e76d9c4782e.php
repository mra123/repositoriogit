<?php

/* :alta:consultaractividad.html.twig */
class __TwigTemplate_b32066d8fea5c5ac5bf6f91eb7f4b281803cb19f24e13267eed323366fa8e974 extends Twig_Template
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
\t
    </head>
    <body>\t
    <h2>Edición: </h2>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosEdicion"]) ? $context["datosEdicion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
            // line 32
            echo "
    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idedicion"]) ? $context["idedicion"] : null), "username", array()), "html", null, true);
            echo "</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
 
  <hr><hr>
  <a href=\"/consultar\">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href=\"/logout\">Logout</a>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return ":alta:consultaractividad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 36,  58 => 33,  55 => 32,  51 => 31,  19 => 1,);
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
/* 	*/
/*     </head>*/
/*     <body>	*/
/*     <h2>Edición: </h2>*/
/* */
/*     {% for datos in datosEdicion %}*/
/* */
/*     <p>{{idedicion.username}}</p>*/
/* */
/*     {% endfor %}*/
/* */
/*  */
/*   <hr><hr>*/
/*   <a href="/consultar">Volver atrás</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*   <a href="/logout">Logout</a>*/
/*   </body>*/
/* </html>*/
