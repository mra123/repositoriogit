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
        $__internal_a60e409f28c5277772213c97de53bf995240dc406c11f3aa1795ebd3ecd589d2 = $this->env->getExtension("native_profiler");
        $__internal_a60e409f28c5277772213c97de53bf995240dc406c11f3aa1795ebd3ecd589d2->enter($__internal_a60e409f28c5277772213c97de53bf995240dc406c11f3aa1795ebd3ecd589d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        
        $__internal_a60e409f28c5277772213c97de53bf995240dc406c11f3aa1795ebd3ecd589d2->leave($__internal_a60e409f28c5277772213c97de53bf995240dc406c11f3aa1795ebd3ecd589d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e965c76bc97b7ccca6c9267fce5cc3f163574e40b44996d501eb525e945079d7 = $this->env->getExtension("native_profiler");
        $__internal_e965c76bc97b7ccca6c9267fce5cc3f163574e40b44996d501eb525e945079d7->enter($__internal_e965c76bc97b7ccca6c9267fce5cc3f163574e40b44996d501eb525e945079d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e965c76bc97b7ccca6c9267fce5cc3f163574e40b44996d501eb525e945079d7->leave($__internal_e965c76bc97b7ccca6c9267fce5cc3f163574e40b44996d501eb525e945079d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3ffccfd6402f4f3658bea0c7dab2324a85b9f637b2cb98d92b39c58089c173a = $this->env->getExtension("native_profiler");
        $__internal_a3ffccfd6402f4f3658bea0c7dab2324a85b9f637b2cb98d92b39c58089c173a->enter($__internal_a3ffccfd6402f4f3658bea0c7dab2324a85b9f637b2cb98d92b39c58089c173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a3ffccfd6402f4f3658bea0c7dab2324a85b9f637b2cb98d92b39c58089c173a->leave($__internal_a3ffccfd6402f4f3658bea0c7dab2324a85b9f637b2cb98d92b39c58089c173a_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_072480cac08217f9fba89978af15d20fc2b4a65c0b346246f7120e6f09634c4f = $this->env->getExtension("native_profiler");
        $__internal_072480cac08217f9fba89978af15d20fc2b4a65c0b346246f7120e6f09634c4f->enter($__internal_072480cac08217f9fba89978af15d20fc2b4a65c0b346246f7120e6f09634c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_072480cac08217f9fba89978af15d20fc2b4a65c0b346246f7120e6f09634c4f->leave($__internal_072480cac08217f9fba89978af15d20fc2b4a65c0b346246f7120e6f09634c4f_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4e8e317a5727284db93d4c82e37254a53594317c5caaceca0c6bcf3a39e6a81 = $this->env->getExtension("native_profiler");
        $__internal_c4e8e317a5727284db93d4c82e37254a53594317c5caaceca0c6bcf3a39e6a81->enter($__internal_c4e8e317a5727284db93d4c82e37254a53594317c5caaceca0c6bcf3a39e6a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4e8e317a5727284db93d4c82e37254a53594317c5caaceca0c6bcf3a39e6a81->leave($__internal_c4e8e317a5727284db93d4c82e37254a53594317c5caaceca0c6bcf3a39e6a81_prof);

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
