<?php

/* security/login.html.twig */
class __TwigTemplate_080ef1f28b7a55bb7e7ff5b63f3eb08461d37643ab93c387c65cd07e36bc3f1e extends Twig_Template
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
        $__internal_99100c18f6fe9aaeaa090f077a641a4570c2a569651557245a073405d41ff4cb = $this->env->getExtension("native_profiler");
        $__internal_99100c18f6fe9aaeaa090f077a641a4570c2a569651557245a073405d41ff4cb->enter($__internal_99100c18f6fe9aaeaa090f077a641a4570c2a569651557245a073405d41ff4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_99100c18f6fe9aaeaa090f077a641a4570c2a569651557245a073405d41ff4cb->leave($__internal_99100c18f6fe9aaeaa090f077a641a4570c2a569651557245a073405d41ff4cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dbe748b9a0b9978e58bb8b76409abd72563644d70b05cc0ad90c0188cb59928 = $this->env->getExtension("native_profiler");
        $__internal_6dbe748b9a0b9978e58bb8b76409abd72563644d70b05cc0ad90c0188cb59928->enter($__internal_6dbe748b9a0b9978e58bb8b76409abd72563644d70b05cc0ad90c0188cb59928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6dbe748b9a0b9978e58bb8b76409abd72563644d70b05cc0ad90c0188cb59928->leave($__internal_6dbe748b9a0b9978e58bb8b76409abd72563644d70b05cc0ad90c0188cb59928_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7805d5e69fb22251a7df7eb50cc060f04dcff3fb9038bfcf6815d0b0cafbe971 = $this->env->getExtension("native_profiler");
        $__internal_7805d5e69fb22251a7df7eb50cc060f04dcff3fb9038bfcf6815d0b0cafbe971->enter($__internal_7805d5e69fb22251a7df7eb50cc060f04dcff3fb9038bfcf6815d0b0cafbe971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7805d5e69fb22251a7df7eb50cc060f04dcff3fb9038bfcf6815d0b0cafbe971->leave($__internal_7805d5e69fb22251a7df7eb50cc060f04dcff3fb9038bfcf6815d0b0cafbe971_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8751a503e140ee431ff31feba686125e77f39b918b197dd75b621d5d7aa2a0b8 = $this->env->getExtension("native_profiler");
        $__internal_8751a503e140ee431ff31feba686125e77f39b918b197dd75b621d5d7aa2a0b8->enter($__internal_8751a503e140ee431ff31feba686125e77f39b918b197dd75b621d5d7aa2a0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h2>ACCEDE A LA APLICACIÓN</h2>

        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 19
        echo "
    <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                <br>  <br>
        <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

       
            <input type=\"hidden\" name=\"_target_path\" value=\"/inicio\" />
       
            <br>  <br>
        <button type=\"submit\">Login</button>
    </form>
    
        <P>* Si no estás registrado ponte en contacto con el Responsable de Actividades Extraescolares, por favor</P>
        ";
        
        $__internal_8751a503e140ee431ff31feba686125e77f39b918b197dd75b621d5d7aa2a0b8->leave($__internal_8751a503e140ee431ff31feba686125e77f39b918b197dd75b621d5d7aa2a0b8_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7434d0e0eedd8b453e0114255fc90d0bbd6029908ee8b168eaa23f3204b0ee8a = $this->env->getExtension("native_profiler");
        $__internal_7434d0e0eedd8b453e0114255fc90d0bbd6029908ee8b168eaa23f3204b0ee8a->enter($__internal_7434d0e0eedd8b453e0114255fc90d0bbd6029908ee8b168eaa23f3204b0ee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7434d0e0eedd8b453e0114255fc90d0bbd6029908ee8b168eaa23f3204b0ee8a->leave($__internal_7434d0e0eedd8b453e0114255fc90d0bbd6029908ee8b168eaa23f3204b0ee8a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 14,  111 => 22,  106 => 20,  103 => 19,  97 => 17,  95 => 16,  92 => 15,  90 => 14,  86 => 12,  80 => 11,  69 => 6,  57 => 5,  48 => 36,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <h2>ACCEDE A LA APLICACIÓN</h2>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/*     <form action="{{ path('login') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                 <br>  <br>*/
/*         <label for="password">Password:</label>*/
/*             <input type="password" id="password" name="_password" />*/
/* */
/*        */
/*             <input type="hidden" name="_target_path" value="/inicio" />*/
/*        */
/*             <br>  <br>*/
/*         <button type="submit">Login</button>*/
/*     </form>*/
/*     */
/*         <P>* Si no estás registrado ponte en contacto con el Responsable de Actividades Extraescolares, por favor</P>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
