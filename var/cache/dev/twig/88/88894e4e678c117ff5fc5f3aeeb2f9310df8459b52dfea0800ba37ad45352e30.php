<?php

/* error_formulario.html.twig */
class __TwigTemplate_9cb5640d80f4a73f01fb4570aa8eb9f5ad0b9c2a8875ab218a5a1b6a76ba9dce extends Twig_Template
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
        $__internal_fd905ad5eb79a9a370b31a29616324e337365785ba850a3109c5fc3d2c1dc647 = $this->env->getExtension("native_profiler");
        $__internal_fd905ad5eb79a9a370b31a29616324e337365785ba850a3109c5fc3d2c1dc647->enter($__internal_fd905ad5eb79a9a370b31a29616324e337365785ba850a3109c5fc3d2c1dc647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "error_formulario.html.twig"));

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
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "      
    </body>
</html>
";
        
        $__internal_fd905ad5eb79a9a370b31a29616324e337365785ba850a3109c5fc3d2c1dc647->leave($__internal_fd905ad5eb79a9a370b31a29616324e337365785ba850a3109c5fc3d2c1dc647_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6e8a75c903e957e48f14ec7a0a5845f8177872eaf2a69da40d701c0f1c2909 = $this->env->getExtension("native_profiler");
        $__internal_9e6e8a75c903e957e48f14ec7a0a5845f8177872eaf2a69da40d701c0f1c2909->enter($__internal_9e6e8a75c903e957e48f14ec7a0a5845f8177872eaf2a69da40d701c0f1c2909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e6e8a75c903e957e48f14ec7a0a5845f8177872eaf2a69da40d701c0f1c2909->leave($__internal_9e6e8a75c903e957e48f14ec7a0a5845f8177872eaf2a69da40d701c0f1c2909_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7275cdd6802729c2c790cfd90225deebe3956d1dbedb39e1bfdeb6832e5f604 = $this->env->getExtension("native_profiler");
        $__internal_d7275cdd6802729c2c790cfd90225deebe3956d1dbedb39e1bfdeb6832e5f604->enter($__internal_d7275cdd6802729c2c790cfd90225deebe3956d1dbedb39e1bfdeb6832e5f604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7275cdd6802729c2c790cfd90225deebe3956d1dbedb39e1bfdeb6832e5f604->leave($__internal_d7275cdd6802729c2c790cfd90225deebe3956d1dbedb39e1bfdeb6832e5f604_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da37e1ea2d4bc69a1951835693f46abbb6376b3a80b9d64cd7dabc332b98981c = $this->env->getExtension("native_profiler");
        $__internal_da37e1ea2d4bc69a1951835693f46abbb6376b3a80b9d64cd7dabc332b98981c->enter($__internal_da37e1ea2d4bc69a1951835693f46abbb6376b3a80b9d64cd7dabc332b98981c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
         <h2>Error Formulario </h2>
         <a href=\"/inicio\">Volver al inicio</a>

        ";
        
        $__internal_da37e1ea2d4bc69a1951835693f46abbb6376b3a80b9d64cd7dabc332b98981c->leave($__internal_da37e1ea2d4bc69a1951835693f46abbb6376b3a80b9d64cd7dabc332b98981c_prof);

    }

    public function getTemplateName()
    {
        return "error_formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  79 => 10,  68 => 6,  56 => 5,  46 => 16,  44 => 10,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*         {% block body %}*/
/* */
/*          <h2>Error Formulario </h2>*/
/*          <a href="/inicio">Volver al inicio</a>*/
/* */
/*         {% endblock %}*/
/*       */
/*     </body>*/
/* </html>*/
/* */
