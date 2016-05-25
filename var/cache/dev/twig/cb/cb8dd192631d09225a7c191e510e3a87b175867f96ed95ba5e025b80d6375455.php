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
        $__internal_4eaf0d89cece6ea3336392ce681c3fe2991cc95e6d818a0bfc6412fd18e808f6 = $this->env->getExtension("native_profiler");
        $__internal_4eaf0d89cece6ea3336392ce681c3fe2991cc95e6d818a0bfc6412fd18e808f6->enter($__internal_4eaf0d89cece6ea3336392ce681c3fe2991cc95e6d818a0bfc6412fd18e808f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        
        $__internal_4eaf0d89cece6ea3336392ce681c3fe2991cc95e6d818a0bfc6412fd18e808f6->leave($__internal_4eaf0d89cece6ea3336392ce681c3fe2991cc95e6d818a0bfc6412fd18e808f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67fb54f979e114540692613e97c2f2abb5406d59701ae8d07ad419f726ed003 = $this->env->getExtension("native_profiler");
        $__internal_e67fb54f979e114540692613e97c2f2abb5406d59701ae8d07ad419f726ed003->enter($__internal_e67fb54f979e114540692613e97c2f2abb5406d59701ae8d07ad419f726ed003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e67fb54f979e114540692613e97c2f2abb5406d59701ae8d07ad419f726ed003->leave($__internal_e67fb54f979e114540692613e97c2f2abb5406d59701ae8d07ad419f726ed003_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_500ec79a83ec860b4c3df664c0f4cc929334fc2a3eafdcf65180a1961150bbc6 = $this->env->getExtension("native_profiler");
        $__internal_500ec79a83ec860b4c3df664c0f4cc929334fc2a3eafdcf65180a1961150bbc6->enter($__internal_500ec79a83ec860b4c3df664c0f4cc929334fc2a3eafdcf65180a1961150bbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_500ec79a83ec860b4c3df664c0f4cc929334fc2a3eafdcf65180a1961150bbc6->leave($__internal_500ec79a83ec860b4c3df664c0f4cc929334fc2a3eafdcf65180a1961150bbc6_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5d23fc90b72c497fdb6b491bd17fb283f974a7835be491e7580525a5ee98c0e = $this->env->getExtension("native_profiler");
        $__internal_f5d23fc90b72c497fdb6b491bd17fb283f974a7835be491e7580525a5ee98c0e->enter($__internal_f5d23fc90b72c497fdb6b491bd17fb283f974a7835be491e7580525a5ee98c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f5d23fc90b72c497fdb6b491bd17fb283f974a7835be491e7580525a5ee98c0e->leave($__internal_f5d23fc90b72c497fdb6b491bd17fb283f974a7835be491e7580525a5ee98c0e_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a1cf03f5ddb95d4462be0a662bad1a5c658e7cc81e981965b1be558a528670f = $this->env->getExtension("native_profiler");
        $__internal_6a1cf03f5ddb95d4462be0a662bad1a5c658e7cc81e981965b1be558a528670f->enter($__internal_6a1cf03f5ddb95d4462be0a662bad1a5c658e7cc81e981965b1be558a528670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a1cf03f5ddb95d4462be0a662bad1a5c658e7cc81e981965b1be558a528670f->leave($__internal_6a1cf03f5ddb95d4462be0a662bad1a5c658e7cc81e981965b1be558a528670f_prof);

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
