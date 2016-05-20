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
        $__internal_75fe5217c854aa0c6f608b5e50b2c84a58a70a11ac387680aad17b6e5ca16e77 = $this->env->getExtension("native_profiler");
        $__internal_75fe5217c854aa0c6f608b5e50b2c84a58a70a11ac387680aad17b6e5ca16e77->enter($__internal_75fe5217c854aa0c6f608b5e50b2c84a58a70a11ac387680aad17b6e5ca16e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_75fe5217c854aa0c6f608b5e50b2c84a58a70a11ac387680aad17b6e5ca16e77->leave($__internal_75fe5217c854aa0c6f608b5e50b2c84a58a70a11ac387680aad17b6e5ca16e77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02921ff5efee8355167e6d5460b1d1d4ed1be27c155c96d7745edeea1a52b3f7 = $this->env->getExtension("native_profiler");
        $__internal_02921ff5efee8355167e6d5460b1d1d4ed1be27c155c96d7745edeea1a52b3f7->enter($__internal_02921ff5efee8355167e6d5460b1d1d4ed1be27c155c96d7745edeea1a52b3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02921ff5efee8355167e6d5460b1d1d4ed1be27c155c96d7745edeea1a52b3f7->leave($__internal_02921ff5efee8355167e6d5460b1d1d4ed1be27c155c96d7745edeea1a52b3f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82b088669d54d15d0f3bd860f3467aa981bfcb3d2f33b4af842a14a0d216da8f = $this->env->getExtension("native_profiler");
        $__internal_82b088669d54d15d0f3bd860f3467aa981bfcb3d2f33b4af842a14a0d216da8f->enter($__internal_82b088669d54d15d0f3bd860f3467aa981bfcb3d2f33b4af842a14a0d216da8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82b088669d54d15d0f3bd860f3467aa981bfcb3d2f33b4af842a14a0d216da8f->leave($__internal_82b088669d54d15d0f3bd860f3467aa981bfcb3d2f33b4af842a14a0d216da8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_43625b4ee7e266f55e65692d751244e54dc21f770da3e8daf078dbee8ddd42c4 = $this->env->getExtension("native_profiler");
        $__internal_43625b4ee7e266f55e65692d751244e54dc21f770da3e8daf078dbee8ddd42c4->enter($__internal_43625b4ee7e266f55e65692d751244e54dc21f770da3e8daf078dbee8ddd42c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "       
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "
        <h3>ALTA DE UNA EDICIÓN:</h3>
        <br/><br/>
       
        <div class=\"boton\">
            <a href=\"/consulta_actividades\">Seleccionar una actividad existente</a>
        </div> 
        <br/><br/>


        <div class=\"boton\">
            <a href=\"/crear_actividades\">Crea una actividad nueva</a>
        </div> 
        <br/><br/>

   
";
        // line 42
        echo "     
        ";
        
        $__internal_43625b4ee7e266f55e65692d751244e54dc21f770da3e8daf078dbee8ddd42c4->leave($__internal_43625b4ee7e266f55e65692d751244e54dc21f770da3e8daf078dbee8ddd42c4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5afd69b187752d46bb11a4da916673dc916e90d4b48940a471b067da1e5efd0 = $this->env->getExtension("native_profiler");
        $__internal_e5afd69b187752d46bb11a4da916673dc916e90d4b48940a471b067da1e5efd0->enter($__internal_e5afd69b187752d46bb11a4da916673dc916e90d4b48940a471b067da1e5efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5afd69b187752d46bb11a4da916673dc916e90d4b48940a471b067da1e5efd0->leave($__internal_e5afd69b187752d46bb11a4da916673dc916e90d4b48940a471b067da1e5efd0_prof);

    }

    public function getTemplateName()
    {
        return "alta/alta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 13,  109 => 42,  91 => 14,  89 => 13,  86 => 12,  80 => 11,  69 => 6,  57 => 5,  48 => 44,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}*/
/*        */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         <h3>ALTA DE UNA EDICIÓN:</h3>*/
/*         <br/><br/>*/
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
/*     </body>*/
/* </html>*/
/* */
