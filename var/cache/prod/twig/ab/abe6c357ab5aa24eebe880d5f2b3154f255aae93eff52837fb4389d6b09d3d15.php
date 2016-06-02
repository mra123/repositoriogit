<?php

/* :alta:grupos.html.twig */
class __TwigTemplate_8a5845fee540a2d347831e110a3d7f8fd55bb795e0b3252e1b295d746dfd3c67 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Actividades";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
        <h4>Listado de grupos: </h4>
\t\t<ul>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciclos"]) ? $context["ciclos"] : null));
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
    }

    public function getTemplateName()
    {
        return ":alta:grupos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  77 => 17,  74 => 16,  70 => 15,  65 => 12,  62 => 11,  57 => 6,  51 => 5,  44 => 21,  42 => 11,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
