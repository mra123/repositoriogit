<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f0d2f66a55ac625c700a6cd6900c5cd5e02169dadf276f88868d1d2b9fc198c1 extends Twig_Template
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
        $__internal_d6f90765f48443c40821744ab769a3f066649bc2371e18fb3a64c2dac5bbc09c = $this->env->getExtension("native_profiler");
        $__internal_d6f90765f48443c40821744ab769a3f066649bc2371e18fb3a64c2dac5bbc09c->enter($__internal_d6f90765f48443c40821744ab769a3f066649bc2371e18fb3a64c2dac5bbc09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f90765f48443c40821744ab769a3f066649bc2371e18fb3a64c2dac5bbc09c->leave($__internal_d6f90765f48443c40821744ab769a3f066649bc2371e18fb3a64c2dac5bbc09c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed3b8bc17a57be581e5287a6811ad4fa269715460ad3f75e42e375748cb1ef20 = $this->env->getExtension("native_profiler");
        $__internal_ed3b8bc17a57be581e5287a6811ad4fa269715460ad3f75e42e375748cb1ef20->enter($__internal_ed3b8bc17a57be581e5287a6811ad4fa269715460ad3f75e42e375748cb1ef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed3b8bc17a57be581e5287a6811ad4fa269715460ad3f75e42e375748cb1ef20->leave($__internal_ed3b8bc17a57be581e5287a6811ad4fa269715460ad3f75e42e375748cb1ef20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dc5ce583d5b89032ad612dea18918aa3bca2755b0ba66ab5cc32244c289cb35 = $this->env->getExtension("native_profiler");
        $__internal_0dc5ce583d5b89032ad612dea18918aa3bca2755b0ba66ab5cc32244c289cb35->enter($__internal_0dc5ce583d5b89032ad612dea18918aa3bca2755b0ba66ab5cc32244c289cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0dc5ce583d5b89032ad612dea18918aa3bca2755b0ba66ab5cc32244c289cb35->leave($__internal_0dc5ce583d5b89032ad612dea18918aa3bca2755b0ba66ab5cc32244c289cb35_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76624058258ffd38feb3f02b6bacacccf336a148bf09a552a79c25ad8ad24e9c = $this->env->getExtension("native_profiler");
        $__internal_76624058258ffd38feb3f02b6bacacccf336a148bf09a552a79c25ad8ad24e9c->enter($__internal_76624058258ffd38feb3f02b6bacacccf336a148bf09a552a79c25ad8ad24e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76624058258ffd38feb3f02b6bacacccf336a148bf09a552a79c25ad8ad24e9c->leave($__internal_76624058258ffd38feb3f02b6bacacccf336a148bf09a552a79c25ad8ad24e9c_prof);

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
