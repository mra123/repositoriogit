<?php

/* alta/alta.html.twig */
class __TwigTemplate_818f555d1c6cb7e7ef206cb8dd40fc416347eb7cbe4a101034736675840fe2dd extends Twig_Template
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
        $__internal_051f6ac259e98d47408d31e20206bc812c3be7d72ba93d6d615e98b1ae5ff905 = $this->env->getExtension("native_profiler");
        $__internal_051f6ac259e98d47408d31e20206bc812c3be7d72ba93d6d615e98b1ae5ff905->enter($__internal_051f6ac259e98d47408d31e20206bc812c3be7d72ba93d6d615e98b1ae5ff905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        
        $__internal_051f6ac259e98d47408d31e20206bc812c3be7d72ba93d6d615e98b1ae5ff905->leave($__internal_051f6ac259e98d47408d31e20206bc812c3be7d72ba93d6d615e98b1ae5ff905_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d56722b4f172bd654c32f2d73fe7e6fa285eba5200b9078a8c93ce745d91c8 = $this->env->getExtension("native_profiler");
        $__internal_e4d56722b4f172bd654c32f2d73fe7e6fa285eba5200b9078a8c93ce745d91c8->enter($__internal_e4d56722b4f172bd654c32f2d73fe7e6fa285eba5200b9078a8c93ce745d91c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4d56722b4f172bd654c32f2d73fe7e6fa285eba5200b9078a8c93ce745d91c8->leave($__internal_e4d56722b4f172bd654c32f2d73fe7e6fa285eba5200b9078a8c93ce745d91c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_156e51095619467defb2e886324e260d04cb0aadb9de8c018dd9a90e8dc8ba60 = $this->env->getExtension("native_profiler");
        $__internal_156e51095619467defb2e886324e260d04cb0aadb9de8c018dd9a90e8dc8ba60->enter($__internal_156e51095619467defb2e886324e260d04cb0aadb9de8c018dd9a90e8dc8ba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_156e51095619467defb2e886324e260d04cb0aadb9de8c018dd9a90e8dc8ba60->leave($__internal_156e51095619467defb2e886324e260d04cb0aadb9de8c018dd9a90e8dc8ba60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab437b892f97c04152aaa506b764e9c6d3769e07548ef57bc6983ef80aa4dbe8 = $this->env->getExtension("native_profiler");
        $__internal_ab437b892f97c04152aaa506b764e9c6d3769e07548ef57bc6983ef80aa4dbe8->enter($__internal_ab437b892f97c04152aaa506b764e9c6d3769e07548ef57bc6983ef80aa4dbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab437b892f97c04152aaa506b764e9c6d3769e07548ef57bc6983ef80aa4dbe8->leave($__internal_ab437b892f97c04152aaa506b764e9c6d3769e07548ef57bc6983ef80aa4dbe8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e3c2039edbe47a55843d790417871cb0ee3bc2fc22f7e5269da369e0f31e971 = $this->env->getExtension("native_profiler");
        $__internal_4e3c2039edbe47a55843d790417871cb0ee3bc2fc22f7e5269da369e0f31e971->enter($__internal_4e3c2039edbe47a55843d790417871cb0ee3bc2fc22f7e5269da369e0f31e971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e3c2039edbe47a55843d790417871cb0ee3bc2fc22f7e5269da369e0f31e971->leave($__internal_4e3c2039edbe47a55843d790417871cb0ee3bc2fc22f7e5269da369e0f31e971_prof);

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
