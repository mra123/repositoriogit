<?php

/* alta/alta.html.twig */
class __TwigTemplate_200346ad400ac3b9b33b3fba9062bdb9cebecd930de20da77fa35a4cc88e9429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_731396b6090be3a1f560c2d10ddea6d243a5c1cf57b0d0599181c1dedd8fda10 = $this->env->getExtension("native_profiler");
        $__internal_731396b6090be3a1f560c2d10ddea6d243a5c1cf57b0d0599181c1dedd8fda10->enter($__internal_731396b6090be3a1f560c2d10ddea6d243a5c1cf57b0d0599181c1dedd8fda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        echo " <style>

            .boton {            
            }

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
    </head>
    <body>

        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
    <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
    </body>
</html>
";
        
        $__internal_731396b6090be3a1f560c2d10ddea6d243a5c1cf57b0d0599181c1dedd8fda10->leave($__internal_731396b6090be3a1f560c2d10ddea6d243a5c1cf57b0d0599181c1dedd8fda10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b594778b630a2ecd6d04c45ac562e0b35737971c3517096c193550791fc3e6f0 = $this->env->getExtension("native_profiler");
        $__internal_b594778b630a2ecd6d04c45ac562e0b35737971c3517096c193550791fc3e6f0->enter($__internal_b594778b630a2ecd6d04c45ac562e0b35737971c3517096c193550791fc3e6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b594778b630a2ecd6d04c45ac562e0b35737971c3517096c193550791fc3e6f0->leave($__internal_b594778b630a2ecd6d04c45ac562e0b35737971c3517096c193550791fc3e6f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8483d17be627de53abb7aade9322d74756a6c0c3d5aa0e5ac4bffe29421580b = $this->env->getExtension("native_profiler");
        $__internal_f8483d17be627de53abb7aade9322d74756a6c0c3d5aa0e5ac4bffe29421580b->enter($__internal_f8483d17be627de53abb7aade9322d74756a6c0c3d5aa0e5ac4bffe29421580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8483d17be627de53abb7aade9322d74756a6c0c3d5aa0e5ac4bffe29421580b->leave($__internal_f8483d17be627de53abb7aade9322d74756a6c0c3d5aa0e5ac4bffe29421580b_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0ebcfc62ce22a7cd2003806fd2c99e2d71d6d1b2563d415985a32621c21e404 = $this->env->getExtension("native_profiler");
        $__internal_a0ebcfc62ce22a7cd2003806fd2c99e2d71d6d1b2563d415985a32621c21e404->enter($__internal_a0ebcfc62ce22a7cd2003806fd2c99e2d71d6d1b2563d415985a32621c21e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "       
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
        <h2>ALTA DE UNA EDICIÓN:</h2>
            <p> Antes de dar de alta una edición, hay que crear la actividad asociada. <br> Comprueba que la actividad ya existe y si no, creala: </p>
       
        <div class=\"boton\">
            <a href=\"/consulta_actividades\">Seleccionar una actividad existente</a>
        </div> 
        <br/><br/>


        <div class=\"boton\">
            <a href=\"/crear_actividades\">Crea una actividad nueva</a>
        </div> 
        <br/><br/>

   
";
        // line 67
        echo "     
        ";
        
        $__internal_a0ebcfc62ce22a7cd2003806fd2c99e2d71d6d1b2563d415985a32621c21e404->leave($__internal_a0ebcfc62ce22a7cd2003806fd2c99e2d71d6d1b2563d415985a32621c21e404_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5103156248fc1d0f41d5e4ba95300fa3b96963a517e96b8999103c49cb14bf7d = $this->env->getExtension("native_profiler");
        $__internal_5103156248fc1d0f41d5e4ba95300fa3b96963a517e96b8999103c49cb14bf7d->enter($__internal_5103156248fc1d0f41d5e4ba95300fa3b96963a517e96b8999103c49cb14bf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5103156248fc1d0f41d5e4ba95300fa3b96963a517e96b8999103c49cb14bf7d->leave($__internal_5103156248fc1d0f41d5e4ba95300fa3b96963a517e96b8999103c49cb14bf7d_prof);

    }

    public function getTemplateName()
    {
        return "alta/alta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  136 => 67,  118 => 39,  116 => 38,  113 => 37,  107 => 36,  96 => 6,  84 => 5,  71 => 69,  69 => 36,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*  <style>*/
/* */
/*             .boton {            */
/*             }*/
/* */
/*             h2 {*/
/*                 color: black;*/
/*                 text-align: center;*/
/*                 border-style: solid;*/
/*                 border-width: medium;*/
/*                 border-color:orange;*/
/* */
/*             }*/
/* */
/*             p {*/
/*                 font-family: "Times New Roman";*/
/*                 font-size: 15px;*/
/*                 */
/*             }*/
/*             hr{*/
/*                 color: orange;*/
/*             }*/
/* */
/* */
/*         */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}*/
/*        */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         <h2>ALTA DE UNA EDICIÓN:</h2>*/
/*             <p> Antes de dar de alta una edición, hay que crear la actividad asociada. <br> Comprueba que la actividad ya existe y si no, creala: </p>*/
/*        */
/*         <div class="boton">*/
/*             <a href="/consulta_actividades">Seleccionar una actividad existente</a>*/
/*         </div> */
/*         <br/><br/>*/
/* */
/* */
/*         <div class="boton">*/
/*             <a href="/crear_actividades">Crea una actividad nueva</a>*/
/*         </div> */
/*         <br/><br/>*/
/* */
/*    */
/* {#*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.actividadactividad) }}*/
/*         {{ form_row(form.fechaEdicion) }}*/
/*         */
/* */
/*     {{ form_end(form) }}*/
/*     */
/*         <P>* Obligatorio nombre y fecha</P>*/
/*   #}     */
/*         {% endblock %}*/
/* */
/*     <hr><hr>*/
/*     <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a href="/logout">Logout</a>*/
/*     </body>*/
/* </html>*/
/* */
