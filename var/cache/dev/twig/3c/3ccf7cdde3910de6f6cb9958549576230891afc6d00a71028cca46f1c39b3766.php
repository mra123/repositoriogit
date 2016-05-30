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
        $__internal_9c9fdc09464f12687f054d70225261d49938926984af319170f4ed81c3c1c4c6 = $this->env->getExtension("native_profiler");
        $__internal_9c9fdc09464f12687f054d70225261d49938926984af319170f4ed81c3c1c4c6->enter($__internal_9c9fdc09464f12687f054d70225261d49938926984af319170f4ed81c3c1c4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/profesores.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>    \t
    </head>
    <body>
    
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "  
    </body>
</html>

 
            ";
        
        $__internal_9c9fdc09464f12687f054d70225261d49938926984af319170f4ed81c3c1c4c6->leave($__internal_9c9fdc09464f12687f054d70225261d49938926984af319170f4ed81c3c1c4c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c560f3e3913287a5657e7675f6746ec8f1746823e1d27b33f8255a7c1dd6c6d0 = $this->env->getExtension("native_profiler");
        $__internal_c560f3e3913287a5657e7675f6746ec8f1746823e1d27b33f8255a7c1dd6c6d0->enter($__internal_c560f3e3913287a5657e7675f6746ec8f1746823e1d27b33f8255a7c1dd6c6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "         
        <li><a href=\"/agregarprofesor/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "idusuario", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "username", array()), "html", null, true);
            echo "</a></li>
           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        ";
        
        $__internal_c560f3e3913287a5657e7675f6746ec8f1746823e1d27b33f8255a7c1dd6c6d0->leave($__internal_c560f3e3913287a5657e7675f6746ec8f1746823e1d27b33f8255a7c1dd6c6d0_prof);

    }

    public function getTemplateName()
    {
        return "alta/profesores.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  64 => 14,  61 => 13,  57 => 12,  51 => 8,  45 => 7,  33 => 19,  31 => 7,  23 => 1,);
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
/*          */
/*         <li><a href="/agregarprofesor/{{username.idusuario}}">{{username.username}}</a></li>*/
/*            */
/*         {% endfor %}*/
/*         </ul>*/
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
