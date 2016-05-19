<?php

/* security/register.html.twig */
class __TwigTemplate_cc4dd30c46e6feabedde6d514bd61bfb5c3ef705858c59f61481e1ad472d4c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba68f7336732e2d22783c7ed70121b4d5c8c75d063a9e3549b1ef80f0537d6d4 = $this->env->getExtension("native_profiler");
        $__internal_ba68f7336732e2d22783c7ed70121b4d5c8c75d063a9e3549b1ef80f0537d6d4->enter($__internal_ba68f7336732e2d22783c7ed70121b4d5c8c75d063a9e3549b1ef80f0537d6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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
    <h2>FORMULARIO DE REGISTRO:</h2>
        
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Password", array()), 'row');
        echo "
    <button type=\"submit\">Register!</button>
    
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

   

    </body>
</html>
";
        
        $__internal_ba68f7336732e2d22783c7ed70121b4d5c8c75d063a9e3549b1ef80f0537d6d4->leave($__internal_ba68f7336732e2d22783c7ed70121b4d5c8c75d063a9e3549b1ef80f0537d6d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a043103f50e4617b9926b3ec340b9642c43f183b3e3608766be10dc23431d22 = $this->env->getExtension("native_profiler");
        $__internal_3a043103f50e4617b9926b3ec340b9642c43f183b3e3608766be10dc23431d22->enter($__internal_3a043103f50e4617b9926b3ec340b9642c43f183b3e3608766be10dc23431d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3a043103f50e4617b9926b3ec340b9642c43f183b3e3608766be10dc23431d22->leave($__internal_3a043103f50e4617b9926b3ec340b9642c43f183b3e3608766be10dc23431d22_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ebe02daa4da2fe0d3584fe701167be788b91bdfa5ab5f49d0ac3957bc0043f1 = $this->env->getExtension("native_profiler");
        $__internal_0ebe02daa4da2fe0d3584fe701167be788b91bdfa5ab5f49d0ac3957bc0043f1->enter($__internal_0ebe02daa4da2fe0d3584fe701167be788b91bdfa5ab5f49d0ac3957bc0043f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ebe02daa4da2fe0d3584fe701167be788b91bdfa5ab5f49d0ac3957bc0043f1->leave($__internal_0ebe02daa4da2fe0d3584fe701167be788b91bdfa5ab5f49d0ac3957bc0043f1_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  78 => 5,  64 => 19,  58 => 16,  54 => 15,  50 => 14,  45 => 12,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
/*     <h2>FORMULARIO DE REGISTRO:</h2>*/
/*         */
/*     {{ form_start(form) }}*/
/*     */
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.Password) }}*/
/*     <button type="submit">Register!</button>*/
/*     */
/*     {{ form_end(form) }}*/
/* */
/*    */
/* */
/*     </body>*/
/* </html>*/
/* */
