<?php

/* alta/altaedicion.html.twig */
class __TwigTemplate_6aef676290501a06ea1269eb09cdb5d099c6f2b6f866a6a0275cb4eea4652526 extends Twig_Template
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
        $__internal_300b84f06a119f449fdf60e900995e0791b0c4970a36f26e2ed942169a379a82 = $this->env->getExtension("native_profiler");
        $__internal_300b84f06a119f449fdf60e900995e0791b0c4970a36f26e2ed942169a379a82->enter($__internal_300b84f06a119f449fdf60e900995e0791b0c4970a36f26e2ed942169a379a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/altaedicion.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

    \t<style>

    \t\t.boton {    \t\t
    \t\t}

\t\t\th2 {
\t\t\t    color: black;
\t\t\t    text-align: center;
\t\t\t    border-style: solid;
\t\t\t    border-width: medium;
\t\t\t\tborder-color:orange;

\t\t\t}

\t\t\tp {
\t\t\t    font-family: \"Times New Roman\";
\t\t\t    font-size: 15px;
\t\t\t\t
\t\t\t}
\t\t\thr{
\t\t\t\tcolor: orange;
\t\t\t}


\t\t
\t\t</style>
       
    </head>
    <body>
    
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "       
    </body>
</html>
";
        
        $__internal_300b84f06a119f449fdf60e900995e0791b0c4970a36f26e2ed942169a379a82->leave($__internal_300b84f06a119f449fdf60e900995e0791b0c4970a36f26e2ed942169a379a82_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2feb5f276c70ba8a0f852e32102724c7552e1c6de2aae8bf67c8b991ed3f85 = $this->env->getExtension("native_profiler");
        $__internal_ca2feb5f276c70ba8a0f852e32102724c7552e1c6de2aae8bf67c8b991ed3f85->enter($__internal_ca2feb5f276c70ba8a0f852e32102724c7552e1c6de2aae8bf67c8b991ed3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <h2>Formulario de alta de edición: </h2>

       <ul>

\t\t
\t\t
        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
\t   \t\t
   
\t    
\t    ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


        ";
        
        $__internal_ca2feb5f276c70ba8a0f852e32102724c7552e1c6de2aae8bf67c8b991ed3f85->leave($__internal_ca2feb5f276c70ba8a0f852e32102724c7552e1c6de2aae8bf67c8b991ed3f85_prof);

    }

    public function getTemplateName()
    {
        return "alta/altaedicion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 48,  86 => 43,  77 => 36,  71 => 35,  61 => 52,  59 => 35,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*     	<style>*/
/* */
/*     		.boton {    		*/
/*     		}*/
/* */
/* 			h2 {*/
/* 			    color: black;*/
/* 			    text-align: center;*/
/* 			    border-style: solid;*/
/* 			    border-width: medium;*/
/* 				border-color:orange;*/
/* */
/* 			}*/
/* */
/* 			p {*/
/* 			    font-family: "Times New Roman";*/
/* 			    font-size: 15px;*/
/* 				*/
/* 			}*/
/* 			hr{*/
/* 				color: orange;*/
/* 			}*/
/* */
/* */
/* 		*/
/* 		</style>*/
/*        */
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/* */
/*         <h2>Formulario de alta de edición: </h2>*/
/* */
/*        <ul>*/
/* */
/* 		*/
/* 		*/
/*         {{ form_start(form) }}*/
/*     */
/* 	   		*/
/*    */
/* 	    */
/* 	    {{ form_end(form) }}*/
/* */
/* */
/*         {% endblock %}*/
/*        */
/*     </body>*/
/* </html>*/
/* */
