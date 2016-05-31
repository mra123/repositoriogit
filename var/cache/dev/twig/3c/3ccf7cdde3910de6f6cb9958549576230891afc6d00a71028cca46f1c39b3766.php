<?php

/* alta/profesores.html.twig */
class __TwigTemplate_6fc58f68478bad8728fbdf7fd1a492ccc4cdeae708fc1910a08213a551f24163 extends Twig_Template
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
        $__internal_986e0d42eb848f48e7854e16570fa32d35e8ffafd1c2be75eff6fd38c1fc41a2 = $this->env->getExtension("native_profiler");
        $__internal_986e0d42eb848f48e7854e16570fa32d35e8ffafd1c2be75eff6fd38c1fc41a2->enter($__internal_986e0d42eb848f48e7854e16570fa32d35e8ffafd1c2be75eff6fd38c1fc41a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/profesores.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>    \t
    </head>
    <body>
    
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "  
    </body>
</html>

 
            ";
        
        $__internal_986e0d42eb848f48e7854e16570fa32d35e8ffafd1c2be75eff6fd38c1fc41a2->leave($__internal_986e0d42eb848f48e7854e16570fa32d35e8ffafd1c2be75eff6fd38c1fc41a2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa02683551a08ebab85b29dc84cefcc5b65b38bb830dbbbfab43f4c7ddfa5139 = $this->env->getExtension("native_profiler");
        $__internal_fa02683551a08ebab85b29dc84cefcc5b65b38bb830dbbbfab43f4c7ddfa5139->enter($__internal_fa02683551a08ebab85b29dc84cefcc5b65b38bb830dbbbfab43f4c7ddfa5139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
      <h3>Selecciona el profesor que asistirá:</h3>
\t\t<ul>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor"]) ? $context["agregarprofesor"] : $this->getContext($context, "agregarprofesor")));
        foreach ($context['_seq'] as $context["_key"] => $context["username"]) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor2"]) ? $context["agregarprofesor2"] : $this->getContext($context, "agregarprofesor2")));
            foreach ($context['_seq'] as $context["_key"] => $context["username2"]) {
                // line 14
                echo "        
          
       <li><a href=\"/agregarprofesor/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "idusuario", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["username2"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "username", array()), "html", null, true);
                echo "</a></li> 
           
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>

         <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
    
        ";
        
        $__internal_fa02683551a08ebab85b29dc84cefcc5b65b38bb830dbbbfab43f4c7ddfa5139->leave($__internal_fa02683551a08ebab85b29dc84cefcc5b65b38bb830dbbbfab43f4c7ddfa5139_prof);

    }

    public function getTemplateName()
    {
        return "alta/profesores.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  83 => 19,  70 => 16,  66 => 14,  61 => 13,  57 => 12,  51 => 8,  45 => 7,  33 => 27,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>    	*/
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
/*        <li><a href="/agregarprofesor/{{username.idusuario}}/{{username2}}">{{username.username}}</a></li> */
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
