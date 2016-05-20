<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e2e246a92a8f8fd5fe92eb3beff1cfb50127406c7f053c664cec6f3faf7904a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1740e29ec3463f24440195a6e1e9d97f9b6e36f285566027788e5efde67a35b = $this->env->getExtension("native_profiler");
        $__internal_f1740e29ec3463f24440195a6e1e9d97f9b6e36f285566027788e5efde67a35b->enter($__internal_f1740e29ec3463f24440195a6e1e9d97f9b6e36f285566027788e5efde67a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1740e29ec3463f24440195a6e1e9d97f9b6e36f285566027788e5efde67a35b->leave($__internal_f1740e29ec3463f24440195a6e1e9d97f9b6e36f285566027788e5efde67a35b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c98e05cde473d4144089a6e3c49c5efd297407dee979b87abdd684e79284188d = $this->env->getExtension("native_profiler");
        $__internal_c98e05cde473d4144089a6e3c49c5efd297407dee979b87abdd684e79284188d->enter($__internal_c98e05cde473d4144089a6e3c49c5efd297407dee979b87abdd684e79284188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c98e05cde473d4144089a6e3c49c5efd297407dee979b87abdd684e79284188d->leave($__internal_c98e05cde473d4144089a6e3c49c5efd297407dee979b87abdd684e79284188d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f81333eea8e74bfad249422a460408fc14d28723e1a8a652ec5131b136772a5 = $this->env->getExtension("native_profiler");
        $__internal_9f81333eea8e74bfad249422a460408fc14d28723e1a8a652ec5131b136772a5->enter($__internal_9f81333eea8e74bfad249422a460408fc14d28723e1a8a652ec5131b136772a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f81333eea8e74bfad249422a460408fc14d28723e1a8a652ec5131b136772a5->leave($__internal_9f81333eea8e74bfad249422a460408fc14d28723e1a8a652ec5131b136772a5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9879c550e5439daf0b4f1a06bcc8f8bcb432515aebd0506b73b6de10cbe01169 = $this->env->getExtension("native_profiler");
        $__internal_9879c550e5439daf0b4f1a06bcc8f8bcb432515aebd0506b73b6de10cbe01169->enter($__internal_9879c550e5439daf0b4f1a06bcc8f8bcb432515aebd0506b73b6de10cbe01169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9879c550e5439daf0b4f1a06bcc8f8bcb432515aebd0506b73b6de10cbe01169->leave($__internal_9879c550e5439daf0b4f1a06bcc8f8bcb432515aebd0506b73b6de10cbe01169_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
