<?php

/* security/login.html.twig */
class __TwigTemplate_fab4536a97b09842111d04ae902539f34c8b062f8ee8849f8babd791fe084395 extends Twig_Template
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
        $__internal_a0dee5ab779c0124fb85710821d611774630663572c21ebeafe092573b21b6b3 = $this->env->getExtension("native_profiler");
        $__internal_a0dee5ab779c0124fb85710821d611774630663572c21ebeafe092573b21b6b3->enter($__internal_a0dee5ab779c0124fb85710821d611774630663572c21ebeafe092573b21b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        
        $__internal_a0dee5ab779c0124fb85710821d611774630663572c21ebeafe092573b21b6b3->leave($__internal_a0dee5ab779c0124fb85710821d611774630663572c21ebeafe092573b21b6b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a86cfebff0f5e14932bab4c5b71d7fa29adeb633a44a19b4c62e6c6a6fb6333 = $this->env->getExtension("native_profiler");
        $__internal_5a86cfebff0f5e14932bab4c5b71d7fa29adeb633a44a19b4c62e6c6a6fb6333->enter($__internal_5a86cfebff0f5e14932bab4c5b71d7fa29adeb633a44a19b4c62e6c6a6fb6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5a86cfebff0f5e14932bab4c5b71d7fa29adeb633a44a19b4c62e6c6a6fb6333->leave($__internal_5a86cfebff0f5e14932bab4c5b71d7fa29adeb633a44a19b4c62e6c6a6fb6333_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31b4f0e8db18a53b8fe52cc59f6379164bb56d3df47a05beb5eaa6b1d83f1730 = $this->env->getExtension("native_profiler");
        $__internal_31b4f0e8db18a53b8fe52cc59f6379164bb56d3df47a05beb5eaa6b1d83f1730->enter($__internal_31b4f0e8db18a53b8fe52cc59f6379164bb56d3df47a05beb5eaa6b1d83f1730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31b4f0e8db18a53b8fe52cc59f6379164bb56d3df47a05beb5eaa6b1d83f1730->leave($__internal_31b4f0e8db18a53b8fe52cc59f6379164bb56d3df47a05beb5eaa6b1d83f1730_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de628a4c47154386d32fa842834c0e1d0e1184dbc00c2fa7c84fe0ec2d5e3189 = $this->env->getExtension("native_profiler");
        $__internal_de628a4c47154386d32fa842834c0e1d0e1184dbc00c2fa7c84fe0ec2d5e3189->enter($__internal_de628a4c47154386d32fa842834c0e1d0e1184dbc00c2fa7c84fe0ec2d5e3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de628a4c47154386d32fa842834c0e1d0e1184dbc00c2fa7c84fe0ec2d5e3189->leave($__internal_de628a4c47154386d32fa842834c0e1d0e1184dbc00c2fa7c84fe0ec2d5e3189_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f29fde6d0363a50397248d5d9215916db5cf3f7881813ed1ee0f6fc4f66dc4b0 = $this->env->getExtension("native_profiler");
        $__internal_f29fde6d0363a50397248d5d9215916db5cf3f7881813ed1ee0f6fc4f66dc4b0->enter($__internal_f29fde6d0363a50397248d5d9215916db5cf3f7881813ed1ee0f6fc4f66dc4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f29fde6d0363a50397248d5d9215916db5cf3f7881813ed1ee0f6fc4f66dc4b0->leave($__internal_f29fde6d0363a50397248d5d9215916db5cf3f7881813ed1ee0f6fc4f66dc4b0_prof);

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
