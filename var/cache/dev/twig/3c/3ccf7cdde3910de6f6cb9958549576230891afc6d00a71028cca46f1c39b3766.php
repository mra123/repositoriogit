<?php

/* alta/profesores.html.twig */
class __TwigTemplate_6fc58f68478bad8728fbdf7fd1a492ccc4cdeae708fc1910a08213a551f24163 extends Twig_Template
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
        $__internal_7b5dc999dbfbeec0ec63797e7517a912629e49f15d2d9dba1fb4e98c446ddc7c = $this->env->getExtension("native_profiler");
        $__internal_7b5dc999dbfbeec0ec63797e7517a912629e49f15d2d9dba1fb4e98c446ddc7c->enter($__internal_7b5dc999dbfbeec0ec63797e7517a912629e49f15d2d9dba1fb4e98c446ddc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alta/profesores.html.twig"));

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
        // line 31
        echo "  
    </body>
</html>

 
            ";
        
        $__internal_7b5dc999dbfbeec0ec63797e7517a912629e49f15d2d9dba1fb4e98c446ddc7c->leave($__internal_7b5dc999dbfbeec0ec63797e7517a912629e49f15d2d9dba1fb4e98c446ddc7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82da9faf867b377f30d990afabff7e87201272df08ce52595de4958d6c7e3fbe = $this->env->getExtension("native_profiler");
        $__internal_82da9faf867b377f30d990afabff7e87201272df08ce52595de4958d6c7e3fbe->enter($__internal_82da9faf867b377f30d990afabff7e87201272df08ce52595de4958d6c7e3fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividades";
        
        $__internal_82da9faf867b377f30d990afabff7e87201272df08ce52595de4958d6c7e3fbe->leave($__internal_82da9faf867b377f30d990afabff7e87201272df08ce52595de4958d6c7e3fbe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b5ff5a88a3b8262083239f74f06b0b972824750e07e79e7e704cf8b99ed18e3 = $this->env->getExtension("native_profiler");
        $__internal_1b5ff5a88a3b8262083239f74f06b0b972824750e07e79e7e704cf8b99ed18e3->enter($__internal_1b5ff5a88a3b8262083239f74f06b0b972824750e07e79e7e704cf8b99ed18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b5ff5a88a3b8262083239f74f06b0b972824750e07e79e7e704cf8b99ed18e3->leave($__internal_1b5ff5a88a3b8262083239f74f06b0b972824750e07e79e7e704cf8b99ed18e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52ea26a26ea0c7614cb0973947df40a21023435d65c013df01051813ab4c440a = $this->env->getExtension("native_profiler");
        $__internal_52ea26a26ea0c7614cb0973947df40a21023435d65c013df01051813ab4c440a->enter($__internal_52ea26a26ea0c7614cb0973947df40a21023435d65c013df01051813ab4c440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
      <h3>Selecciona el profesor que asistirá:</h3>
\t\t<ul>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor"]) ? $context["agregarprofesor"] : $this->getContext($context, "agregarprofesor")));
        foreach ($context['_seq'] as $context["_key"] => $context["username"]) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["agregarprofesor2"]) ? $context["agregarprofesor2"] : $this->getContext($context, "agregarprofesor2")));
            foreach ($context['_seq'] as $context["_key"] => $context["username2"]) {
                // line 18
                echo "        
          
       <li><a href=\"/agregarprofesor/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "idusuario", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["username2"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["username"], "username", array()), "html", null, true);
                echo "</a> </li> 
           
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['username'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>

         <hr><hr>
    <a href=\"/inicio\">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"/logout\">Logout</a>
    
        ";
        
        $__internal_52ea26a26ea0c7614cb0973947df40a21023435d65c013df01051813ab4c440a->leave($__internal_52ea26a26ea0c7614cb0973947df40a21023435d65c013df01051813ab4c440a_prof);

    }

    public function getTemplateName()
    {
        return "alta/profesores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 24,  120 => 23,  107 => 20,  103 => 18,  98 => 17,  94 => 16,  88 => 12,  82 => 11,  71 => 6,  59 => 5,  47 => 31,  45 => 11,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head> */
/*     <meta charset="UTF-8" />*/
/*         <title>{% block title %}Actividades{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     */
/*         {% block body %}*/
/* */
/*       <h3>Selecciona el profesor que asistirá:</h3>*/
/* 		<ul>*/
/* */
/*         {% for username in agregarprofesor %}*/
/*         {% for username2 in agregarprofesor2 %}*/
/*         */
/*           */
/*        <li><a href="/agregarprofesor/{{username.idusuario}}/{{username2}}">{{username.username}}</a> </li> */
/*            */
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*          <hr><hr>*/
/*     <a href="/inicio">Volver al inicio</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*     <a href="/logout">Logout</a>*/
/*     */
/*         {% endblock %}*/
/*   */
/*     </body>*/
/* </html>*/
/* */
/*  */
/*             */
