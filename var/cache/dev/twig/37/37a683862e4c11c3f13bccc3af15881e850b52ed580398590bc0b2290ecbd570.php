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
        $__internal_b4e56cb3eb02c5a39242905e93e45f812af9660852781eaf870f054f543056d0 = $this->env->getExtension("native_profiler");
        $__internal_b4e56cb3eb02c5a39242905e93e45f812af9660852781eaf870f054f543056d0->enter($__internal_b4e56cb3eb02c5a39242905e93e45f812af9660852781eaf870f054f543056d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e56cb3eb02c5a39242905e93e45f812af9660852781eaf870f054f543056d0->leave($__internal_b4e56cb3eb02c5a39242905e93e45f812af9660852781eaf870f054f543056d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db6944d3fca6d4a6c644a2323a16703d58347c9dd54a09a32c8916f3905759ef = $this->env->getExtension("native_profiler");
        $__internal_db6944d3fca6d4a6c644a2323a16703d58347c9dd54a09a32c8916f3905759ef->enter($__internal_db6944d3fca6d4a6c644a2323a16703d58347c9dd54a09a32c8916f3905759ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db6944d3fca6d4a6c644a2323a16703d58347c9dd54a09a32c8916f3905759ef->leave($__internal_db6944d3fca6d4a6c644a2323a16703d58347c9dd54a09a32c8916f3905759ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6abbf754b11cb97ddeafd82afb9615acc8b0d02858544fedbb9088f37d2d262a = $this->env->getExtension("native_profiler");
        $__internal_6abbf754b11cb97ddeafd82afb9615acc8b0d02858544fedbb9088f37d2d262a->enter($__internal_6abbf754b11cb97ddeafd82afb9615acc8b0d02858544fedbb9088f37d2d262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6abbf754b11cb97ddeafd82afb9615acc8b0d02858544fedbb9088f37d2d262a->leave($__internal_6abbf754b11cb97ddeafd82afb9615acc8b0d02858544fedbb9088f37d2d262a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de421a589d32d811b1d2c69395e52f9d0fb544344b66edfbaefbd32375d501f = $this->env->getExtension("native_profiler");
        $__internal_0de421a589d32d811b1d2c69395e52f9d0fb544344b66edfbaefbd32375d501f->enter($__internal_0de421a589d32d811b1d2c69395e52f9d0fb544344b66edfbaefbd32375d501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0de421a589d32d811b1d2c69395e52f9d0fb544344b66edfbaefbd32375d501f->leave($__internal_0de421a589d32d811b1d2c69395e52f9d0fb544344b66edfbaefbd32375d501f_prof);

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
