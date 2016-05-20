<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dc0dc2567473722e4c9136438d8ed1de6ded33e51b56c04334d8c37f8745016b extends Twig_Template
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
        $__internal_1593a9add26d46464f7d59e4950b55301e6922555ac27fe1e78475e85c040e23 = $this->env->getExtension("native_profiler");
        $__internal_1593a9add26d46464f7d59e4950b55301e6922555ac27fe1e78475e85c040e23->enter($__internal_1593a9add26d46464f7d59e4950b55301e6922555ac27fe1e78475e85c040e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1593a9add26d46464f7d59e4950b55301e6922555ac27fe1e78475e85c040e23->leave($__internal_1593a9add26d46464f7d59e4950b55301e6922555ac27fe1e78475e85c040e23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_635d79030e5a409d4e028734d63142e59e92e5fbcafc1bfe9ec6a1f462814bd7 = $this->env->getExtension("native_profiler");
        $__internal_635d79030e5a409d4e028734d63142e59e92e5fbcafc1bfe9ec6a1f462814bd7->enter($__internal_635d79030e5a409d4e028734d63142e59e92e5fbcafc1bfe9ec6a1f462814bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_635d79030e5a409d4e028734d63142e59e92e5fbcafc1bfe9ec6a1f462814bd7->leave($__internal_635d79030e5a409d4e028734d63142e59e92e5fbcafc1bfe9ec6a1f462814bd7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c31ed21bf42ab0d906d721acbd824832b0e937d0361fc0eb3a14b045f4f0f6fe = $this->env->getExtension("native_profiler");
        $__internal_c31ed21bf42ab0d906d721acbd824832b0e937d0361fc0eb3a14b045f4f0f6fe->enter($__internal_c31ed21bf42ab0d906d721acbd824832b0e937d0361fc0eb3a14b045f4f0f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c31ed21bf42ab0d906d721acbd824832b0e937d0361fc0eb3a14b045f4f0f6fe->leave($__internal_c31ed21bf42ab0d906d721acbd824832b0e937d0361fc0eb3a14b045f4f0f6fe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edc5e62a2b86bb9e7c73c1c801a896608d14483091b08366f0cfe9a550617a85 = $this->env->getExtension("native_profiler");
        $__internal_edc5e62a2b86bb9e7c73c1c801a896608d14483091b08366f0cfe9a550617a85->enter($__internal_edc5e62a2b86bb9e7c73c1c801a896608d14483091b08366f0cfe9a550617a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edc5e62a2b86bb9e7c73c1c801a896608d14483091b08366f0cfe9a550617a85->leave($__internal_edc5e62a2b86bb9e7c73c1c801a896608d14483091b08366f0cfe9a550617a85_prof);

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
