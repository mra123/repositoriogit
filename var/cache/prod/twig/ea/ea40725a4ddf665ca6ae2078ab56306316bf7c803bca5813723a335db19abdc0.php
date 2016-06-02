<?php

/* :alta:profesores.html.twig */
class __TwigTemplate_5471398a2a310ae893b1809018d5f80facdbd00b94bf982fbd1257c743161be8 extends Twig_Template
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
    </head>
    <body>
    
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "  
    </body>
</html>

 
            ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Actividades";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
      <h3>Selecciona el profesor que asistirá:</h3>
\t\t<ul>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor"]) ? $context["agregarprofesor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["username"]) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor2"]) ? $context["agregarprofesor2"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["username2"]) {
                // line 18
                echo "        
          
       <li><a href=\"/agregarprofesor/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "idusuario", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["username2"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "username", array()), "html", null, true);
                echo "</a> </li> 
           
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>

         <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
    
        ";
    }

    public function getTemplateName()
    {
        return ":alta:profesores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  99 => 23,  86 => 20,  82 => 18,  77 => 17,  73 => 16,  67 => 12,  64 => 11,  59 => 6,  53 => 5,  44 => 31,  42 => 11,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head> */
/*     <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/* */
/*       <h3>Selecciona el profesor que asistirá:</h3>*/
/* 		<ul>*/
/* */
/*         {% for username in agregarprofesor %}*/
/*         {% for username2 in agregarprofesor2 %}*/
/*         */
/*           */
/*        <li><a href="/agregarprofesor/{{username.idusuario}}/{{username2}}">{{username.username}}</a> </li> */
/*            */
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*          <hr><hr>*/
/*     <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a href="/logout">Logout</a>*/
/*     */
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
