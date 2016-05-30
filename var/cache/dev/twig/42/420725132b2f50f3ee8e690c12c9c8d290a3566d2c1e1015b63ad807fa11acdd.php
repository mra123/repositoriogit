<?php

/* alta/grupos.html.twig */
class __TwigTemplate_fd82b8a59089b073fbec0c2e538db77fb1d196160ecabbc887063b906c0e84e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1c8b6cad2fe7def1a67721df40353b6ed516ed4d0e442da617e1d47ae7597e4 = $this->env->getExtension("native_profiler");
        $__internal_c1c8b6cad2fe7def1a67721df40353b6ed516ed4d0e442da617e1d47ae7597e4->enter($__internal_c1c8b6cad2fe7def1a67721df40353b6ed516ed4d0e442da617e1d47ae7597e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/grupos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>    \t
    </head>
    <body>
    
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "  
    </body>
</html>
";
        
        $__internal_c1c8b6cad2fe7def1a67721df40353b6ed516ed4d0e442da617e1d47ae7597e4->leave($__internal_c1c8b6cad2fe7def1a67721df40353b6ed516ed4d0e442da617e1d47ae7597e4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_deac251686a534882cca0c80ca46a41f3cb65e6cc326fe58e11be6df367e660f = $this->env->getExtension("native_profiler");
        $__internal_deac251686a534882cca0c80ca46a41f3cb65e6cc326fe58e11be6df367e660f->enter($__internal_deac251686a534882cca0c80ca46a41f3cb65e6cc326fe58e11be6df367e660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <h4>Listado de grupos: </h4>
\t\t<ul>
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciclos"]) ? $context["ciclos"] : $this->getContext($context, "ciclos")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
            // line 12
            echo "
\t\t<li> ";
            // line 13
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
        // line 15
        echo "\t\t</ul>
        ";
        
        $__internal_deac251686a534882cca0c80ca46a41f3cb65e6cc326fe58e11be6df367e660f->leave($__internal_deac251686a534882cca0c80ca46a41f3cb65e6cc326fe58e11be6df367e660f_prof);

    }

    public function getTemplateName()
    {
        return "alta/grupos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  61 => 13,  58 => 12,  54 => 11,  49 => 8,  43 => 7,  33 => 17,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>    	*/
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
