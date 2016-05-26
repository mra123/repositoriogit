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
        $__internal_d2680147750c48c5b562a4595029e9eebcd68e764c76ca7537f9c7a026fc8fee = $this->env->getExtension("native_profiler");
        $__internal_d2680147750c48c5b562a4595029e9eebcd68e764c76ca7537f9c7a026fc8fee->enter($__internal_d2680147750c48c5b562a4595029e9eebcd68e764c76ca7537f9c7a026fc8fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        echo "      <style>


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
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "    </body>
</html>
";
        
        $__internal_d2680147750c48c5b562a4595029e9eebcd68e764c76ca7537f9c7a026fc8fee->leave($__internal_d2680147750c48c5b562a4595029e9eebcd68e764c76ca7537f9c7a026fc8fee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3484b73045e96d7b5c7da4ce26a0c8e241a011eb073813c837151e566257fe86 = $this->env->getExtension("native_profiler");
        $__internal_3484b73045e96d7b5c7da4ce26a0c8e241a011eb073813c837151e566257fe86->enter($__internal_3484b73045e96d7b5c7da4ce26a0c8e241a011eb073813c837151e566257fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3484b73045e96d7b5c7da4ce26a0c8e241a011eb073813c837151e566257fe86->leave($__internal_3484b73045e96d7b5c7da4ce26a0c8e241a011eb073813c837151e566257fe86_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dff6db42a856851c81b60f53e1309bb0a224d5f792afc7654632aa6d5d8c6178 = $this->env->getExtension("native_profiler");
        $__internal_dff6db42a856851c81b60f53e1309bb0a224d5f792afc7654632aa6d5d8c6178->enter($__internal_dff6db42a856851c81b60f53e1309bb0a224d5f792afc7654632aa6d5d8c6178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dff6db42a856851c81b60f53e1309bb0a224d5f792afc7654632aa6d5d8c6178->leave($__internal_dff6db42a856851c81b60f53e1309bb0a224d5f792afc7654632aa6d5d8c6178_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf9fa515f2b9ddd3a4b2f724a0ab41eaf85fc51682dd428e796ee154c3519718 = $this->env->getExtension("native_profiler");
        $__internal_cf9fa515f2b9ddd3a4b2f724a0ab41eaf85fc51682dd428e796ee154c3519718->enter($__internal_cf9fa515f2b9ddd3a4b2f724a0ab41eaf85fc51682dd428e796ee154c3519718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        <h2>ACCEDE A LA APLICACIÓN</h2>

        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 39
        echo "
    <form action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 42
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
        
        $__internal_cf9fa515f2b9ddd3a4b2f724a0ab41eaf85fc51682dd428e796ee154c3519718->leave($__internal_cf9fa515f2b9ddd3a4b2f724a0ab41eaf85fc51682dd428e796ee154c3519718_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca502c6290a92359ade6875aff17cfa8c6c520338af89cac90a040fa60973d33 = $this->env->getExtension("native_profiler");
        $__internal_ca502c6290a92359ade6875aff17cfa8c6c520338af89cac90a040fa60973d33->enter($__internal_ca502c6290a92359ade6875aff17cfa8c6c520338af89cac90a040fa60973d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca502c6290a92359ade6875aff17cfa8c6c520338af89cac90a040fa60973d33->leave($__internal_ca502c6290a92359ade6875aff17cfa8c6c520338af89cac90a040fa60973d33_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 34,  129 => 42,  124 => 40,  121 => 39,  115 => 37,  113 => 36,  110 => 35,  108 => 34,  104 => 32,  98 => 31,  87 => 6,  75 => 5,  66 => 56,  64 => 31,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*       <style>*/
/* */
/* */
/* h2 {*/
/*     color: black;*/
/*     text-align: center;*/
/*     border-style: solid;*/
/*     border-width: medium;*/
/*     border-color:orange;*/
/* */
/* }*/
/* */
/* p {*/
/*     font-family: "Times New Roman";*/
/*     font-size: 15px;*/
/*     */
/* }*/
/* hr{*/
/*     color: orange;*/
/* }*/
/* </style>*/
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
