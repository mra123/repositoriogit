<?php

/* alta/grupos.html.twig */
class __TwigTemplate_fd82b8a59089b073fbec0c2e538db77fb1d196160ecabbc887063b906c0e84e7 extends Twig_Template
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
        $__internal_f9bfa41ec680486ed5f1e9fd443e8988c9077e6795f4c608ba013e76b7543f69 = $this->env->getExtension("native_profiler");
        $__internal_f9bfa41ec680486ed5f1e9fd443e8988c9077e6795f4c608ba013e76b7543f69->enter($__internal_f9bfa41ec680486ed5f1e9fd443e8988c9077e6795f4c608ba013e76b7543f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/grupos.html.twig"));

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
        echo "\" />        \t
    </head>
    <body>
    
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "  
    </body>
</html>
";
        
        $__internal_f9bfa41ec680486ed5f1e9fd443e8988c9077e6795f4c608ba013e76b7543f69->leave($__internal_f9bfa41ec680486ed5f1e9fd443e8988c9077e6795f4c608ba013e76b7543f69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8ea7b9059adb60239c1205fa0f26d14ae87e7f1dc454eb405c8b0d6c7c3370e = $this->env->getExtension("native_profiler");
        $__internal_c8ea7b9059adb60239c1205fa0f26d14ae87e7f1dc454eb405c8b0d6c7c3370e->enter($__internal_c8ea7b9059adb60239c1205fa0f26d14ae87e7f1dc454eb405c8b0d6c7c3370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_c8ea7b9059adb60239c1205fa0f26d14ae87e7f1dc454eb405c8b0d6c7c3370e->leave($__internal_c8ea7b9059adb60239c1205fa0f26d14ae87e7f1dc454eb405c8b0d6c7c3370e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70043ae48e3a6078c8a8e983f09d8be46040b3ab575660ba3f7a935e732a67d8 = $this->env->getExtension("native_profiler");
        $__internal_70043ae48e3a6078c8a8e983f09d8be46040b3ab575660ba3f7a935e732a67d8->enter($__internal_70043ae48e3a6078c8a8e983f09d8be46040b3ab575660ba3f7a935e732a67d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70043ae48e3a6078c8a8e983f09d8be46040b3ab575660ba3f7a935e732a67d8->leave($__internal_70043ae48e3a6078c8a8e983f09d8be46040b3ab575660ba3f7a935e732a67d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62a4384c7f204a4a4d06b6b2977ebeae78523521ee769cc3015626e08554e864 = $this->env->getExtension("native_profiler");
        $__internal_62a4384c7f204a4a4d06b6b2977ebeae78523521ee769cc3015626e08554e864->enter($__internal_62a4384c7f204a4a4d06b6b2977ebeae78523521ee769cc3015626e08554e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
        <h4>Listado de grupos: </h4>
\t\t<ul>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciclos"]) ? $context["ciclos"] : $this->getContext($context, "ciclos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
            // line 16
            echo "
\t\t<li> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "idciclo", array()), "html", null, true);
            echo ".&nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "nombreCiclo", array()), "html", null, true);
            echo ", &nbsp; Curso: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "curso", array()), "html", null, true);
            echo ", &nbsp;Turno: &nbsp; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciclo"], "turno", array()), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</ul>
        ";
        
        $__internal_62a4384c7f204a4a4d06b6b2977ebeae78523521ee769cc3015626e08554e864->leave($__internal_62a4384c7f204a4a4d06b6b2977ebeae78523521ee769cc3015626e08554e864_prof);

    }

    public function getTemplateName()
    {
        return "alta/grupos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 19,  98 => 17,  95 => 16,  91 => 15,  86 => 12,  80 => 11,  69 => 6,  57 => 5,  47 => 21,  45 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />        	*/
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/* */
/*         <h4>Listado de grupos: </h4>*/
/* 		<ul>*/
/* 		{% for ciclo in ciclos %}*/
/* */
/* 		<li> {{ciclo.idciclo}}.&nbsp; {{ciclo.nombreCiclo}}, &nbsp; Curso: {{ciclo.curso}}, &nbsp;Turno: &nbsp; {{ciclo.turno}}</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
