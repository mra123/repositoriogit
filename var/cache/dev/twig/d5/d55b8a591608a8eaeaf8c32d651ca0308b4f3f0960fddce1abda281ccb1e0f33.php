<?php

/* alta/agregarprofesor.html.twig */
class __TwigTemplate_676db44ecceb94bf88d82cd48ae86243662f1de48b4d179c316730205af6594b extends Twig_Template
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
        $__internal_d87b6220e5a145d277dd8f713aa01beffb51638302343f6995588e65110397d8 = $this->env->getExtension("native_profiler");
        $__internal_d87b6220e5a145d277dd8f713aa01beffb51638302343f6995588e65110397d8->enter($__internal_d87b6220e5a145d277dd8f713aa01beffb51638302343f6995588e65110397d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/agregarprofesor.html.twig"));

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
        echo "\" />\t
    </head>
    <body>
    
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "  
    </body>
</html>

 
            ";
        
        $__internal_d87b6220e5a145d277dd8f713aa01beffb51638302343f6995588e65110397d8->leave($__internal_d87b6220e5a145d277dd8f713aa01beffb51638302343f6995588e65110397d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c638590455e699b3cdb0aa5b478e545d5a94a362d35bac151593f3a56721f7c8 = $this->env->getExtension("native_profiler");
        $__internal_c638590455e699b3cdb0aa5b478e545d5a94a362d35bac151593f3a56721f7c8->enter($__internal_c638590455e699b3cdb0aa5b478e545d5a94a362d35bac151593f3a56721f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_c638590455e699b3cdb0aa5b478e545d5a94a362d35bac151593f3a56721f7c8->leave($__internal_c638590455e699b3cdb0aa5b478e545d5a94a362d35bac151593f3a56721f7c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c92ade34db900fcc665669857108dcbadf5dc6fb6c56d291f2198b1174cfd28 = $this->env->getExtension("native_profiler");
        $__internal_9c92ade34db900fcc665669857108dcbadf5dc6fb6c56d291f2198b1174cfd28->enter($__internal_9c92ade34db900fcc665669857108dcbadf5dc6fb6c56d291f2198b1174cfd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c92ade34db900fcc665669857108dcbadf5dc6fb6c56d291f2198b1174cfd28->leave($__internal_9c92ade34db900fcc665669857108dcbadf5dc6fb6c56d291f2198b1174cfd28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83bfeb8ac26e7010b44a28ead1ee1ff29f082739f805e6fe08373e6f97b90a6d = $this->env->getExtension("native_profiler");
        $__internal_83bfeb8ac26e7010b44a28ead1ee1ff29f082739f805e6fe08373e6f97b90a6d->enter($__internal_83bfeb8ac26e7010b44a28ead1ee1ff29f082739f805e6fe08373e6f97b90a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "       
        <h2> Profesor agregado correctamente</h2>

            <p> Si deseas agregar más PROFESORES, <a href=\"/profesores\"> haz click aquí</a></p>
           
            <p> Si ya has acabado, vuelve al <a href=\"/inicio\"> inicio  </a></p>
        
           
            <p> <a href=\"/consultaractividad/";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idedicion"]) ? $context["idedicion"] : $this->getContext($context, "idedicion")), "idedicion", array()), "html", null, true);
        echo "\"> Consulta  </a> los datos de la actividad que acabas de crear</p>
           
        ";
        
        $__internal_83bfeb8ac26e7010b44a28ead1ee1ff29f082739f805e6fe08373e6f97b90a6d->leave($__internal_83bfeb8ac26e7010b44a28ead1ee1ff29f082739f805e6fe08373e6f97b90a6d_prof);

    }

    public function getTemplateName()
    {
        return "alta/agregarprofesor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  88 => 12,  82 => 11,  71 => 6,  59 => 5,  47 => 23,  45 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>    */
/*     <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />	*/
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/*        */
/*         <h2> Profesor agregado correctamente</h2>*/
/* */
/*             <p> Si deseas agregar más PROFESORES, <a href="/profesores"> haz click aquí</a></p>*/
/*            */
/*             <p> Si ya has acabado, vuelve al <a href="/inicio"> inicio  </a></p>*/
/*         */
/*            */
/*             <p> <a href="/consultaractividad/{{idedicion.idedicion}}"> Consulta  </a> los datos de la actividad que acabas de crear</p>*/
/*            */
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
