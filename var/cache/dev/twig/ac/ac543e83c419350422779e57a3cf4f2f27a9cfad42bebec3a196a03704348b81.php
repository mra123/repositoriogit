<?php

/* alta/alta.html.twig */
class __TwigTemplate_18438633d2080f8bb871ebe65763b9edf3dfd0e235454dcb370a4846d07ad51e extends Twig_Template
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
        $__internal_6f3ce9de300e1855f3749e510d1d80914ca2fe3ddfc0e4d9080d08eac03ef13c = $this->env->getExtension("native_profiler");
        $__internal_6f3ce9de300e1855f3749e510d1d80914ca2fe3ddfc0e4d9080d08eac03ef13c->enter($__internal_6f3ce9de300e1855f3749e510d1d80914ca2fe3ddfc0e4d9080d08eac03ef13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/alta.html.twig"));

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
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_6f3ce9de300e1855f3749e510d1d80914ca2fe3ddfc0e4d9080d08eac03ef13c->leave($__internal_6f3ce9de300e1855f3749e510d1d80914ca2fe3ddfc0e4d9080d08eac03ef13c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40bcfb158b5fb3e25ca98136bd68977495505761c566fdc82a71d7e13c92c9ff = $this->env->getExtension("native_profiler");
        $__internal_40bcfb158b5fb3e25ca98136bd68977495505761c566fdc82a71d7e13c92c9ff->enter($__internal_40bcfb158b5fb3e25ca98136bd68977495505761c566fdc82a71d7e13c92c9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_40bcfb158b5fb3e25ca98136bd68977495505761c566fdc82a71d7e13c92c9ff->leave($__internal_40bcfb158b5fb3e25ca98136bd68977495505761c566fdc82a71d7e13c92c9ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a9f45caeb2870e7a2ea3af043664c344ce5f1b1c1a615321d6747f6c05020d7 = $this->env->getExtension("native_profiler");
        $__internal_5a9f45caeb2870e7a2ea3af043664c344ce5f1b1c1a615321d6747f6c05020d7->enter($__internal_5a9f45caeb2870e7a2ea3af043664c344ce5f1b1c1a615321d6747f6c05020d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a9f45caeb2870e7a2ea3af043664c344ce5f1b1c1a615321d6747f6c05020d7->leave($__internal_5a9f45caeb2870e7a2ea3af043664c344ce5f1b1c1a615321d6747f6c05020d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa152fd1eb46e45afc6c637c572faa7642d34980866d8cad8413c652f8da1a9e = $this->env->getExtension("native_profiler");
        $__internal_aa152fd1eb46e45afc6c637c572faa7642d34980866d8cad8413c652f8da1a9e->enter($__internal_aa152fd1eb46e45afc6c637c572faa7642d34980866d8cad8413c652f8da1a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h2>ALTA DE UNA EDICIÓN:</h2>

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadactividad", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaEdicion", array()), 'row');
        echo "
        

    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
        <P>* Obligatorio nombre y fecha</P>
        <P>* I- Informática ; F- Finanzas y Comercio</P>
        ";
        
        $__internal_aa152fd1eb46e45afc6c637c572faa7642d34980866d8cad8413c652f8da1a9e->leave($__internal_aa152fd1eb46e45afc6c637c572faa7642d34980866d8cad8413c652f8da1a9e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d48d4904166d408d2a2926f0f7dad34edf458f6a46ff7af72785d35d4745178d = $this->env->getExtension("native_profiler");
        $__internal_d48d4904166d408d2a2926f0f7dad34edf458f6a46ff7af72785d35d4745178d->enter($__internal_d48d4904166d408d2a2926f0f7dad34edf458f6a46ff7af72785d35d4745178d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d48d4904166d408d2a2926f0f7dad34edf458f6a46ff7af72785d35d4745178d->leave($__internal_d48d4904166d408d2a2926f0f7dad34edf458f6a46ff7af72785d35d4745178d_prof);

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
        return array (  126 => 14,  114 => 23,  108 => 20,  104 => 19,  99 => 17,  95 => 16,  92 => 15,  90 => 14,  86 => 12,  80 => 11,  69 => 6,  57 => 5,  48 => 28,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <h2>ALTA DE UNA EDICIÓN:</h2>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
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
/*         <P>* I- Informática ; F- Finanzas y Comercio</P>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
