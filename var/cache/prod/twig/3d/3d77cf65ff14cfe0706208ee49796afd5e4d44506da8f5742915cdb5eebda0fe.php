<?php

/* security/register.html.twig */
class __TwigTemplate_0dbf4b55fefc924f2b71d8cd6347ec800ad3db502906bd6f5c87a86e43026f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    <h2>FORMULARIO DE REGISTRO:</h2>
        
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Password", array()), 'row');
        echo "

   
    <br/>
    <button type=\"submit\">Registrar</button>
    
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

   <!-- <p> Usuario: 1 (Responsable AAEE), 2 (Jefe Departamento), 3 (Profesor).</p>
    <p> Departamento: 1 (Informática y comunidaciones), 2 (Administración y gestión)</p>-->

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 6,  76 => 5,  64 => 22,  55 => 16,  51 => 15,  47 => 14,  42 => 12,  33 => 7,  31 => 6,  27 => 5,  21 => 1,);
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
/*     <h2>FORMULARIO DE REGISTRO:</h2>*/
/*         */
/*     {{ form_start(form) }}*/
/*     */
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.Password) }}*/
/* */
/*    */
/*     <br/>*/
/*     <button type="submit">Registrar</button>*/
/*     */
/*     {{ form_end(form) }}*/
/* */
/*    <!-- <p> Usuario: 1 (Responsable AAEE), 2 (Jefe Departamento), 3 (Profesor).</p>*/
/*     <p> Departamento: 1 (Informática y comunidaciones), 2 (Administración y gestión)</p>-->*/
/* */
/*     </body>*/
/* </html>*/
/* */
