<?php

/* alta/agregarprofesor.html.twig */
class __TwigTemplate_676db44ecceb94bf88d82cd48ae86243662f1de48b4d179c316730205af6594b extends Twig_Template
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
        $__internal_a4c296282275f98df08da44e6caf16aaa4860f8f0a3bc4f1892e3c2582df992e = $this->env->getExtension("native_profiler");
        $__internal_a4c296282275f98df08da44e6caf16aaa4860f8f0a3bc4f1892e3c2582df992e->enter($__internal_a4c296282275f98df08da44e6caf16aaa4860f8f0a3bc4f1892e3c2582df992e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/agregarprofesor.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>    \t
    </head>
    <body>
    
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "  
    </body>
</html>

 
            ";
        
        $__internal_a4c296282275f98df08da44e6caf16aaa4860f8f0a3bc4f1892e3c2582df992e->leave($__internal_a4c296282275f98df08da44e6caf16aaa4860f8f0a3bc4f1892e3c2582df992e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0269565525fbd4a7ac4362335aafcab48954eda33fa5cbfc6368c6e1a6148e6 = $this->env->getExtension("native_profiler");
        $__internal_e0269565525fbd4a7ac4362335aafcab48954eda33fa5cbfc6368c6e1a6148e6->enter($__internal_e0269565525fbd4a7ac4362335aafcab48954eda33fa5cbfc6368c6e1a6148e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <h2> Profesor agregado correctamente</h2>

            <p> Si deseas agregar más profesores, <a href=\"/profesores\"> haz click aquí</a></p>
            <p> Si ya has acabado, vuelve al <a href=\"/inicio\"> inicio  </a></p>



        ";
        
        $__internal_e0269565525fbd4a7ac4362335aafcab48954eda33fa5cbfc6368c6e1a6148e6->leave($__internal_e0269565525fbd4a7ac4362335aafcab48954eda33fa5cbfc6368c6e1a6148e6_prof);

    }

    public function getTemplateName()
    {
        return "alta/agregarprofesor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  45 => 7,  33 => 17,  31 => 7,  23 => 1,);
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
/*         <h2> Profesor agregado correctamente</h2>*/
/* */
/*             <p> Si deseas agregar más profesores, <a href="/profesores"> haz click aquí</a></p>*/
/*             <p> Si ya has acabado, vuelve al <a href="/inicio"> inicio  </a></p>*/
/* */
/* */
/* */
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
