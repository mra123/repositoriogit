<?php

/* security/register.html.twig */
class __TwigTemplate_682279b855091d620e59375f58aa7ec67df1bc8d7d767fbdf4b6898621c9fdd1 extends Twig_Template
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
        $__internal_71318466a3d9740aff32714703b2929a7ad42d1848a5c9656a8c8f4d4737323f = $this->env->getExtension("native_profiler");
        $__internal_71318466a3d9740aff32714703b2929a7ad42d1848a5c9656a8c8f4d4737323f->enter($__internal_71318466a3d9740aff32714703b2929a7ad42d1848a5c9656a8c8f4d4737323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Password", array()), 'row');
        echo "

   
    <br/>
    <button type=\"submit\">Registrar</button>
    
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   <!-- <p> Usuario: 1 (Responsable AAEE), 2 (Jefe Departamento), 3 (Profesor).</p>
    <p> Departamento: 1 (Informática y comunidaciones), 2 (Administración y gestión)</p>-->

    </body>
</html>
";
        
        $__internal_71318466a3d9740aff32714703b2929a7ad42d1848a5c9656a8c8f4d4737323f->leave($__internal_71318466a3d9740aff32714703b2929a7ad42d1848a5c9656a8c8f4d4737323f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af043c6169877591f69da125d72c64045b3c9b957cb60e50b2e3f06da7e580fa = $this->env->getExtension("native_profiler");
        $__internal_af043c6169877591f69da125d72c64045b3c9b957cb60e50b2e3f06da7e580fa->enter($__internal_af043c6169877591f69da125d72c64045b3c9b957cb60e50b2e3f06da7e580fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af043c6169877591f69da125d72c64045b3c9b957cb60e50b2e3f06da7e580fa->leave($__internal_af043c6169877591f69da125d72c64045b3c9b957cb60e50b2e3f06da7e580fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49fd31faab1e6003a555db9c833c15dd333e21ef87a8372236d4a0ccd376b765 = $this->env->getExtension("native_profiler");
        $__internal_49fd31faab1e6003a555db9c833c15dd333e21ef87a8372236d4a0ccd376b765->enter($__internal_49fd31faab1e6003a555db9c833c15dd333e21ef87a8372236d4a0ccd376b765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49fd31faab1e6003a555db9c833c15dd333e21ef87a8372236d4a0ccd376b765->leave($__internal_49fd31faab1e6003a555db9c833c15dd333e21ef87a8372236d4a0ccd376b765_prof);

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
        return array (  94 => 6,  82 => 5,  67 => 22,  58 => 16,  54 => 15,  50 => 14,  45 => 12,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
