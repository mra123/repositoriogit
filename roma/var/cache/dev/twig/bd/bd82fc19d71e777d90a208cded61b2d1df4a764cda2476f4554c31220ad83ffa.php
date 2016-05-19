<?php

/* security/login.html.twig */
class __TwigTemplate_123faccf89231d1c696ef62fc660a8390987f4c51545aee033c6272f040da932 extends Twig_Template
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
        $__internal_dc653c0252e23a3759847c7e971fffef088e27ce90d20f6f28b5fbf0864a1026 = $this->env->getExtension("native_profiler");
        $__internal_dc653c0252e23a3759847c7e971fffef088e27ce90d20f6f28b5fbf0864a1026->enter($__internal_dc653c0252e23a3759847c7e971fffef088e27ce90d20f6f28b5fbf0864a1026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_dc653c0252e23a3759847c7e971fffef088e27ce90d20f6f28b5fbf0864a1026->leave($__internal_dc653c0252e23a3759847c7e971fffef088e27ce90d20f6f28b5fbf0864a1026_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6c879ed3d78f6cc8a203d96e00cca2341461d5ec36646ea1eebd731ad70683b = $this->env->getExtension("native_profiler");
        $__internal_c6c879ed3d78f6cc8a203d96e00cca2341461d5ec36646ea1eebd731ad70683b->enter($__internal_c6c879ed3d78f6cc8a203d96e00cca2341461d5ec36646ea1eebd731ad70683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6c879ed3d78f6cc8a203d96e00cca2341461d5ec36646ea1eebd731ad70683b->leave($__internal_c6c879ed3d78f6cc8a203d96e00cca2341461d5ec36646ea1eebd731ad70683b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_086163ba68dbc08da9146c080b62e5203234d8eb32c3dcc3c50db9f46ef258c5 = $this->env->getExtension("native_profiler");
        $__internal_086163ba68dbc08da9146c080b62e5203234d8eb32c3dcc3c50db9f46ef258c5->enter($__internal_086163ba68dbc08da9146c080b62e5203234d8eb32c3dcc3c50db9f46ef258c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_086163ba68dbc08da9146c080b62e5203234d8eb32c3dcc3c50db9f46ef258c5->leave($__internal_086163ba68dbc08da9146c080b62e5203234d8eb32c3dcc3c50db9f46ef258c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1c3dac418c22abe9bcf62cd03ac1e4d0add2681ebba0ee385d700eee003f881 = $this->env->getExtension("native_profiler");
        $__internal_b1c3dac418c22abe9bcf62cd03ac1e4d0add2681ebba0ee385d700eee003f881->enter($__internal_b1c3dac418c22abe9bcf62cd03ac1e4d0add2681ebba0ee385d700eee003f881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h2>FORMULARIO DE LOGIN:</h2>

        
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 20
        echo "
    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 33
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_b1c3dac418c22abe9bcf62cd03ac1e4d0add2681ebba0ee385d700eee003f881->leave($__internal_b1c3dac418c22abe9bcf62cd03ac1e4d0add2681ebba0ee385d700eee003f881_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24d7896e1b32f2b8e038b9cfec97d18b99c1d8442d6bc63c5d6ff4d8d16953e6 = $this->env->getExtension("native_profiler");
        $__internal_24d7896e1b32f2b8e038b9cfec97d18b99c1d8442d6bc63c5d6ff4d8d16953e6->enter($__internal_24d7896e1b32f2b8e038b9cfec97d18b99c1d8442d6bc63c5d6ff4d8d16953e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24d7896e1b32f2b8e038b9cfec97d18b99c1d8442d6bc63c5d6ff4d8d16953e6->leave($__internal_24d7896e1b32f2b8e038b9cfec97d18b99c1d8442d6bc63c5d6ff4d8d16953e6_prof);

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
        return array (  130 => 15,  120 => 33,  112 => 23,  107 => 21,  104 => 20,  98 => 18,  96 => 17,  93 => 16,  91 => 15,  86 => 12,  80 => 11,  69 => 6,  57 => 5,  48 => 37,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <h2>FORMULARIO DE LOGIN:</h2>*/
/* */
/*         */
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/* */
/*     <form action="{{ path('login') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*             <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
