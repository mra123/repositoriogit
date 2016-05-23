<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e0dce8e8200c4ed0522ef8e20163f59cae72563dfb3862becd1af45c787b4c10 extends Twig_Template
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
        $__internal_71b214c8f3d29a6dba7027ad7f04945502137de773aeb28acda47e1f67943155 = $this->env->getExtension("native_profiler");
        $__internal_71b214c8f3d29a6dba7027ad7f04945502137de773aeb28acda47e1f67943155->enter($__internal_71b214c8f3d29a6dba7027ad7f04945502137de773aeb28acda47e1f67943155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b214c8f3d29a6dba7027ad7f04945502137de773aeb28acda47e1f67943155->leave($__internal_71b214c8f3d29a6dba7027ad7f04945502137de773aeb28acda47e1f67943155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1ed736a33f2a229fbadd4a6e5776b064cf947f0f022a73d5b44c6befe6622cb = $this->env->getExtension("native_profiler");
        $__internal_e1ed736a33f2a229fbadd4a6e5776b064cf947f0f022a73d5b44c6befe6622cb->enter($__internal_e1ed736a33f2a229fbadd4a6e5776b064cf947f0f022a73d5b44c6befe6622cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1ed736a33f2a229fbadd4a6e5776b064cf947f0f022a73d5b44c6befe6622cb->leave($__internal_e1ed736a33f2a229fbadd4a6e5776b064cf947f0f022a73d5b44c6befe6622cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ede2c626b88f0b867aa7b2480cd69066f5fd0bc6079e4681229813f7032fcda9 = $this->env->getExtension("native_profiler");
        $__internal_ede2c626b88f0b867aa7b2480cd69066f5fd0bc6079e4681229813f7032fcda9->enter($__internal_ede2c626b88f0b867aa7b2480cd69066f5fd0bc6079e4681229813f7032fcda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ede2c626b88f0b867aa7b2480cd69066f5fd0bc6079e4681229813f7032fcda9->leave($__internal_ede2c626b88f0b867aa7b2480cd69066f5fd0bc6079e4681229813f7032fcda9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9cb07b3baa075251f0f208da869b5dc43eade9e3fb044e9a3ff3bb75fe853e = $this->env->getExtension("native_profiler");
        $__internal_4e9cb07b3baa075251f0f208da869b5dc43eade9e3fb044e9a3ff3bb75fe853e->enter($__internal_4e9cb07b3baa075251f0f208da869b5dc43eade9e3fb044e9a3ff3bb75fe853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4e9cb07b3baa075251f0f208da869b5dc43eade9e3fb044e9a3ff3bb75fe853e->leave($__internal_4e9cb07b3baa075251f0f208da869b5dc43eade9e3fb044e9a3ff3bb75fe853e_prof);

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
