<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5dc3d37b0904c0b9f4d9391b2d6161bd2468c9de70c131b8f9c023e768724cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db5fc200e81952a57d6927a9c8c0ff658d1443ca71df6d17480bde585e490eaa = $this->env->getExtension("native_profiler");
        $__internal_db5fc200e81952a57d6927a9c8c0ff658d1443ca71df6d17480bde585e490eaa->enter($__internal_db5fc200e81952a57d6927a9c8c0ff658d1443ca71df6d17480bde585e490eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5fc200e81952a57d6927a9c8c0ff658d1443ca71df6d17480bde585e490eaa->leave($__internal_db5fc200e81952a57d6927a9c8c0ff658d1443ca71df6d17480bde585e490eaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ac4caa531c195e6aa19de1766103bc462ca502947a4d98f3d8857b9f3ddac1c = $this->env->getExtension("native_profiler");
        $__internal_3ac4caa531c195e6aa19de1766103bc462ca502947a4d98f3d8857b9f3ddac1c->enter($__internal_3ac4caa531c195e6aa19de1766103bc462ca502947a4d98f3d8857b9f3ddac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ac4caa531c195e6aa19de1766103bc462ca502947a4d98f3d8857b9f3ddac1c->leave($__internal_3ac4caa531c195e6aa19de1766103bc462ca502947a4d98f3d8857b9f3ddac1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f55677d41aa5c0042848bb314defb8b06f0dabe4d3d9df27417770f57ddd7f33 = $this->env->getExtension("native_profiler");
        $__internal_f55677d41aa5c0042848bb314defb8b06f0dabe4d3d9df27417770f57ddd7f33->enter($__internal_f55677d41aa5c0042848bb314defb8b06f0dabe4d3d9df27417770f57ddd7f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f55677d41aa5c0042848bb314defb8b06f0dabe4d3d9df27417770f57ddd7f33->leave($__internal_f55677d41aa5c0042848bb314defb8b06f0dabe4d3d9df27417770f57ddd7f33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12f522c354ba530ba918eac5e1e835bcbc244f2d62fae0e5e483a81b1f6e144a = $this->env->getExtension("native_profiler");
        $__internal_12f522c354ba530ba918eac5e1e835bcbc244f2d62fae0e5e483a81b1f6e144a->enter($__internal_12f522c354ba530ba918eac5e1e835bcbc244f2d62fae0e5e483a81b1f6e144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12f522c354ba530ba918eac5e1e835bcbc244f2d62fae0e5e483a81b1f6e144a->leave($__internal_12f522c354ba530ba918eac5e1e835bcbc244f2d62fae0e5e483a81b1f6e144a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
