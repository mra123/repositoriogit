<?php

/* security/login.html.twig */
class __TwigTemplate_9472ef94fe0d790b378f2880cc2105d0b6268a3a3b8fb50da32060ed956b4272 extends Twig_Template
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
        $__internal_21673440b7dc0f063e0c8d462cdd460d603ab9a106ad6b88fff37e5d8d342b3b = $this->env->getExtension("native_profiler");
        $__internal_21673440b7dc0f063e0c8d462cdd460d603ab9a106ad6b88fff37e5d8d342b3b->enter($__internal_21673440b7dc0f063e0c8d462cdd460d603ab9a106ad6b88fff37e5d8d342b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        
        $__internal_21673440b7dc0f063e0c8d462cdd460d603ab9a106ad6b88fff37e5d8d342b3b->leave($__internal_21673440b7dc0f063e0c8d462cdd460d603ab9a106ad6b88fff37e5d8d342b3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b60ad2072374c6e6059c33a505cbeb12422a733bf7b15f531e57b0f882b486d = $this->env->getExtension("native_profiler");
        $__internal_7b60ad2072374c6e6059c33a505cbeb12422a733bf7b15f531e57b0f882b486d->enter($__internal_7b60ad2072374c6e6059c33a505cbeb12422a733bf7b15f531e57b0f882b486d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7b60ad2072374c6e6059c33a505cbeb12422a733bf7b15f531e57b0f882b486d->leave($__internal_7b60ad2072374c6e6059c33a505cbeb12422a733bf7b15f531e57b0f882b486d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6eab40eb7497fea5daabd55373868bfd80b0b32e1bdd4c47704e4ac90014b9f0 = $this->env->getExtension("native_profiler");
        $__internal_6eab40eb7497fea5daabd55373868bfd80b0b32e1bdd4c47704e4ac90014b9f0->enter($__internal_6eab40eb7497fea5daabd55373868bfd80b0b32e1bdd4c47704e4ac90014b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6eab40eb7497fea5daabd55373868bfd80b0b32e1bdd4c47704e4ac90014b9f0->leave($__internal_6eab40eb7497fea5daabd55373868bfd80b0b32e1bdd4c47704e4ac90014b9f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e25a5b102ca3b6d864a8d0388b8ea4a2edfbec99e7c093c4fd7405f79eeeb2a = $this->env->getExtension("native_profiler");
        $__internal_8e25a5b102ca3b6d864a8d0388b8ea4a2edfbec99e7c093c4fd7405f79eeeb2a->enter($__internal_8e25a5b102ca3b6d864a8d0388b8ea4a2edfbec99e7c093c4fd7405f79eeeb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e25a5b102ca3b6d864a8d0388b8ea4a2edfbec99e7c093c4fd7405f79eeeb2a->leave($__internal_8e25a5b102ca3b6d864a8d0388b8ea4a2edfbec99e7c093c4fd7405f79eeeb2a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bff8077675d8f905d5734ea8a59f9158228fb3570923092e84faaa1f6c04c02a = $this->env->getExtension("native_profiler");
        $__internal_bff8077675d8f905d5734ea8a59f9158228fb3570923092e84faaa1f6c04c02a->enter($__internal_bff8077675d8f905d5734ea8a59f9158228fb3570923092e84faaa1f6c04c02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bff8077675d8f905d5734ea8a59f9158228fb3570923092e84faaa1f6c04c02a->leave($__internal_bff8077675d8f905d5734ea8a59f9158228fb3570923092e84faaa1f6c04c02a_prof);

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
