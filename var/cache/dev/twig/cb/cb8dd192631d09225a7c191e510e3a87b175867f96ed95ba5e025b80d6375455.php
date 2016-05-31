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
        $__internal_1e59f323ffd38ba7e9b7f4779776ab3222b38a17e753ea3a65c2597bef62a397 = $this->env->getExtension("native_profiler");
        $__internal_1e59f323ffd38ba7e9b7f4779776ab3222b38a17e753ea3a65c2597bef62a397->enter($__internal_1e59f323ffd38ba7e9b7f4779776ab3222b38a17e753ea3a65c2597bef62a397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
      <style>


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
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
        
        $__internal_1e59f323ffd38ba7e9b7f4779776ab3222b38a17e753ea3a65c2597bef62a397->leave($__internal_1e59f323ffd38ba7e9b7f4779776ab3222b38a17e753ea3a65c2597bef62a397_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eced1e5a7cbfb44577074ec46996e91bab2807e5930c74ddd9ff09f78d380d5a = $this->env->getExtension("native_profiler");
        $__internal_eced1e5a7cbfb44577074ec46996e91bab2807e5930c74ddd9ff09f78d380d5a->enter($__internal_eced1e5a7cbfb44577074ec46996e91bab2807e5930c74ddd9ff09f78d380d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_eced1e5a7cbfb44577074ec46996e91bab2807e5930c74ddd9ff09f78d380d5a->leave($__internal_eced1e5a7cbfb44577074ec46996e91bab2807e5930c74ddd9ff09f78d380d5a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b872642d7f8db80177f93a5de8483a8242f9fb5ae1cf7ff90a2ab8cb6d9c88cc = $this->env->getExtension("native_profiler");
        $__internal_b872642d7f8db80177f93a5de8483a8242f9fb5ae1cf7ff90a2ab8cb6d9c88cc->enter($__internal_b872642d7f8db80177f93a5de8483a8242f9fb5ae1cf7ff90a2ab8cb6d9c88cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b872642d7f8db80177f93a5de8483a8242f9fb5ae1cf7ff90a2ab8cb6d9c88cc->leave($__internal_b872642d7f8db80177f93a5de8483a8242f9fb5ae1cf7ff90a2ab8cb6d9c88cc_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_37c6970d724a7edca978f71115ed9c32c4514844cf7a344adc80abbab5763c5f = $this->env->getExtension("native_profiler");
        $__internal_37c6970d724a7edca978f71115ed9c32c4514844cf7a344adc80abbab5763c5f->enter($__internal_37c6970d724a7edca978f71115ed9c32c4514844cf7a344adc80abbab5763c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "        <h2>ACCEDE A LA APLICACIÓN</h2>

        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 40
        echo "
    <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 43
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
        
        $__internal_37c6970d724a7edca978f71115ed9c32c4514844cf7a344adc80abbab5763c5f->leave($__internal_37c6970d724a7edca978f71115ed9c32c4514844cf7a344adc80abbab5763c5f_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f6abfa2a95fc24d037e93ddd54ae3fd15f61ec67fd0a1358236bd9ebbdeab38 = $this->env->getExtension("native_profiler");
        $__internal_6f6abfa2a95fc24d037e93ddd54ae3fd15f61ec67fd0a1358236bd9ebbdeab38->enter($__internal_6f6abfa2a95fc24d037e93ddd54ae3fd15f61ec67fd0a1358236bd9ebbdeab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f6abfa2a95fc24d037e93ddd54ae3fd15f61ec67fd0a1358236bd9ebbdeab38->leave($__internal_6f6abfa2a95fc24d037e93ddd54ae3fd15f61ec67fd0a1358236bd9ebbdeab38_prof);

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
        return array (  153 => 35,  132 => 43,  127 => 41,  124 => 40,  118 => 38,  116 => 37,  113 => 36,  111 => 35,  107 => 33,  101 => 32,  90 => 6,  78 => 5,  69 => 57,  67 => 32,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*        <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
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
