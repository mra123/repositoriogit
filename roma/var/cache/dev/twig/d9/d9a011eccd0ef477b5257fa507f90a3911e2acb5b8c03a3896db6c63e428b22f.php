<?php

/* base.html.twig */
class __TwigTemplate_a61b87dd975792570925e608c1eeab4f04ac924a040b1cf159633ab20d513e8d extends Twig_Template
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
        $__internal_92d4711ac595e5c9758e0d9103f49039500dfe1013a57d6c3d6c533c3856040b = $this->env->getExtension("native_profiler");
        $__internal_92d4711ac595e5c9758e0d9103f49039500dfe1013a57d6c3d6c533c3856040b->enter($__internal_92d4711ac595e5c9758e0d9103f49039500dfe1013a57d6c3d6c533c3856040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_92d4711ac595e5c9758e0d9103f49039500dfe1013a57d6c3d6c533c3856040b->leave($__internal_92d4711ac595e5c9758e0d9103f49039500dfe1013a57d6c3d6c533c3856040b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6da3578e79ea4819c0d845e2538bb2e685ba482074d73468342353135e8be3f = $this->env->getExtension("native_profiler");
        $__internal_f6da3578e79ea4819c0d845e2538bb2e685ba482074d73468342353135e8be3f->enter($__internal_f6da3578e79ea4819c0d845e2538bb2e685ba482074d73468342353135e8be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f6da3578e79ea4819c0d845e2538bb2e685ba482074d73468342353135e8be3f->leave($__internal_f6da3578e79ea4819c0d845e2538bb2e685ba482074d73468342353135e8be3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d33515a7957396d9801576415e5820a94f603feed29b89532a6d95596d1de5fa = $this->env->getExtension("native_profiler");
        $__internal_d33515a7957396d9801576415e5820a94f603feed29b89532a6d95596d1de5fa->enter($__internal_d33515a7957396d9801576415e5820a94f603feed29b89532a6d95596d1de5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d33515a7957396d9801576415e5820a94f603feed29b89532a6d95596d1de5fa->leave($__internal_d33515a7957396d9801576415e5820a94f603feed29b89532a6d95596d1de5fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_63ac9c9316d00a7c44931e83232c39c5d3b6ff215e3e2ce4b491b0579a1a2a8f = $this->env->getExtension("native_profiler");
        $__internal_63ac9c9316d00a7c44931e83232c39c5d3b6ff215e3e2ce4b491b0579a1a2a8f->enter($__internal_63ac9c9316d00a7c44931e83232c39c5d3b6ff215e3e2ce4b491b0579a1a2a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63ac9c9316d00a7c44931e83232c39c5d3b6ff215e3e2ce4b491b0579a1a2a8f->leave($__internal_63ac9c9316d00a7c44931e83232c39c5d3b6ff215e3e2ce4b491b0579a1a2a8f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_590a703952004b750d1140f0d9c014230a8e5f5458e0d4d08b2f490be7d6a97a = $this->env->getExtension("native_profiler");
        $__internal_590a703952004b750d1140f0d9c014230a8e5f5458e0d4d08b2f490be7d6a97a->enter($__internal_590a703952004b750d1140f0d9c014230a8e5f5458e0d4d08b2f490be7d6a97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_590a703952004b750d1140f0d9c014230a8e5f5458e0d4d08b2f490be7d6a97a->leave($__internal_590a703952004b750d1140f0d9c014230a8e5f5458e0d4d08b2f490be7d6a97a_prof);

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
