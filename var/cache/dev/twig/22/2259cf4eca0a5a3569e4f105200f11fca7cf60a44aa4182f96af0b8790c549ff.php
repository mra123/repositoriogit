<?php

/* base.html.twig */
class __TwigTemplate_396b2a1e358e38d66ff8f57ed81e260b1b6467ac960d04c34bf774c1a39d671d extends Twig_Template
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
        $__internal_b60aba717645aef96369d543adfb63092e0bde0b1f1832093116d4e95e85a2cc = $this->env->getExtension("native_profiler");
        $__internal_b60aba717645aef96369d543adfb63092e0bde0b1f1832093116d4e95e85a2cc->enter($__internal_b60aba717645aef96369d543adfb63092e0bde0b1f1832093116d4e95e85a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b60aba717645aef96369d543adfb63092e0bde0b1f1832093116d4e95e85a2cc->leave($__internal_b60aba717645aef96369d543adfb63092e0bde0b1f1832093116d4e95e85a2cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0022d65fa8f7f7cdccca91186f2736382c1236f674c13a7c0eb48460225d73ee = $this->env->getExtension("native_profiler");
        $__internal_0022d65fa8f7f7cdccca91186f2736382c1236f674c13a7c0eb48460225d73ee->enter($__internal_0022d65fa8f7f7cdccca91186f2736382c1236f674c13a7c0eb48460225d73ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0022d65fa8f7f7cdccca91186f2736382c1236f674c13a7c0eb48460225d73ee->leave($__internal_0022d65fa8f7f7cdccca91186f2736382c1236f674c13a7c0eb48460225d73ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2bfa0fa0aa617bdc899fc5614485952a881ee86b7bad463ea0b0b5d39a62b67 = $this->env->getExtension("native_profiler");
        $__internal_c2bfa0fa0aa617bdc899fc5614485952a881ee86b7bad463ea0b0b5d39a62b67->enter($__internal_c2bfa0fa0aa617bdc899fc5614485952a881ee86b7bad463ea0b0b5d39a62b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2bfa0fa0aa617bdc899fc5614485952a881ee86b7bad463ea0b0b5d39a62b67->leave($__internal_c2bfa0fa0aa617bdc899fc5614485952a881ee86b7bad463ea0b0b5d39a62b67_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_95b9c7571cdf0ed737d9932ed4937355d6651402896d35ffdc722352dbdf0bb2 = $this->env->getExtension("native_profiler");
        $__internal_95b9c7571cdf0ed737d9932ed4937355d6651402896d35ffdc722352dbdf0bb2->enter($__internal_95b9c7571cdf0ed737d9932ed4937355d6651402896d35ffdc722352dbdf0bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95b9c7571cdf0ed737d9932ed4937355d6651402896d35ffdc722352dbdf0bb2->leave($__internal_95b9c7571cdf0ed737d9932ed4937355d6651402896d35ffdc722352dbdf0bb2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f5311fdf526af0f6b6c01f2d25b6ddb0b024d38d3d0c33d96ff873810de6d63 = $this->env->getExtension("native_profiler");
        $__internal_8f5311fdf526af0f6b6c01f2d25b6ddb0b024d38d3d0c33d96ff873810de6d63->enter($__internal_8f5311fdf526af0f6b6c01f2d25b6ddb0b024d38d3d0c33d96ff873810de6d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f5311fdf526af0f6b6c01f2d25b6ddb0b024d38d3d0c33d96ff873810de6d63->leave($__internal_8f5311fdf526af0f6b6c01f2d25b6ddb0b024d38d3d0c33d96ff873810de6d63_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
