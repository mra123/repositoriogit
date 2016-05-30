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
        $__internal_dd022c43de697a9c065057ffff6ceb5e72daa424850780c497b2e2db165df6d4 = $this->env->getExtension("native_profiler");
        $__internal_dd022c43de697a9c065057ffff6ceb5e72daa424850780c497b2e2db165df6d4->enter($__internal_dd022c43de697a9c065057ffff6ceb5e72daa424850780c497b2e2db165df6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "error_formulario.html.twig"));

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
        
        $__internal_dd022c43de697a9c065057ffff6ceb5e72daa424850780c497b2e2db165df6d4->leave($__internal_dd022c43de697a9c065057ffff6ceb5e72daa424850780c497b2e2db165df6d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80154ed7350be58c530327203cdfd3e60e26a3041a7aa499f94acd89dacba4fc = $this->env->getExtension("native_profiler");
        $__internal_80154ed7350be58c530327203cdfd3e60e26a3041a7aa499f94acd89dacba4fc->enter($__internal_80154ed7350be58c530327203cdfd3e60e26a3041a7aa499f94acd89dacba4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80154ed7350be58c530327203cdfd3e60e26a3041a7aa499f94acd89dacba4fc->leave($__internal_80154ed7350be58c530327203cdfd3e60e26a3041a7aa499f94acd89dacba4fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3686e64d662cf4fe492ab3b1a8cc09208c494e7322906e07ddee7dad3e39845 = $this->env->getExtension("native_profiler");
        $__internal_f3686e64d662cf4fe492ab3b1a8cc09208c494e7322906e07ddee7dad3e39845->enter($__internal_f3686e64d662cf4fe492ab3b1a8cc09208c494e7322906e07ddee7dad3e39845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f3686e64d662cf4fe492ab3b1a8cc09208c494e7322906e07ddee7dad3e39845->leave($__internal_f3686e64d662cf4fe492ab3b1a8cc09208c494e7322906e07ddee7dad3e39845_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15668dee41c8f55b7d4cedf7b6cb2af1b1bb36dc45f93a362318d7e7316a376f = $this->env->getExtension("native_profiler");
        $__internal_15668dee41c8f55b7d4cedf7b6cb2af1b1bb36dc45f93a362318d7e7316a376f->enter($__internal_15668dee41c8f55b7d4cedf7b6cb2af1b1bb36dc45f93a362318d7e7316a376f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
         <h2>Error Formulario </h2>
         <a href=\"/inicio\">Volver al inicio</a>

        ";
        
        $__internal_15668dee41c8f55b7d4cedf7b6cb2af1b1bb36dc45f93a362318d7e7316a376f->leave($__internal_15668dee41c8f55b7d4cedf7b6cb2af1b1bb36dc45f93a362318d7e7316a376f_prof);

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
