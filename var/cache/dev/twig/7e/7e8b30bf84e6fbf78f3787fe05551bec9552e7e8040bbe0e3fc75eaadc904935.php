<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bfd9d89b45c3a0a720037d491a86b22301d0bcb47f973df35cc18b4e59a627c7 extends Twig_Template
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
        $__internal_3ba6244e36cd0a83ec6a165e73fe6453537a8f86afab995c8a688d89517f0a01 = $this->env->getExtension("native_profiler");
        $__internal_3ba6244e36cd0a83ec6a165e73fe6453537a8f86afab995c8a688d89517f0a01->enter($__internal_3ba6244e36cd0a83ec6a165e73fe6453537a8f86afab995c8a688d89517f0a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba6244e36cd0a83ec6a165e73fe6453537a8f86afab995c8a688d89517f0a01->leave($__internal_3ba6244e36cd0a83ec6a165e73fe6453537a8f86afab995c8a688d89517f0a01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40bdb12df60af368ed53b399864ebf6619cf5b38b4a70f4923c2f2b8ebe0f18b = $this->env->getExtension("native_profiler");
        $__internal_40bdb12df60af368ed53b399864ebf6619cf5b38b4a70f4923c2f2b8ebe0f18b->enter($__internal_40bdb12df60af368ed53b399864ebf6619cf5b38b4a70f4923c2f2b8ebe0f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40bdb12df60af368ed53b399864ebf6619cf5b38b4a70f4923c2f2b8ebe0f18b->leave($__internal_40bdb12df60af368ed53b399864ebf6619cf5b38b4a70f4923c2f2b8ebe0f18b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13f97ffb4e7e826248ad1527e959793843f7488f7648b518a891fc15aee8cd5f = $this->env->getExtension("native_profiler");
        $__internal_13f97ffb4e7e826248ad1527e959793843f7488f7648b518a891fc15aee8cd5f->enter($__internal_13f97ffb4e7e826248ad1527e959793843f7488f7648b518a891fc15aee8cd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13f97ffb4e7e826248ad1527e959793843f7488f7648b518a891fc15aee8cd5f->leave($__internal_13f97ffb4e7e826248ad1527e959793843f7488f7648b518a891fc15aee8cd5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67ca9aa7a6d4d87645e31824530dc84628858e03dbeb8a34cc7be58fec519829 = $this->env->getExtension("native_profiler");
        $__internal_67ca9aa7a6d4d87645e31824530dc84628858e03dbeb8a34cc7be58fec519829->enter($__internal_67ca9aa7a6d4d87645e31824530dc84628858e03dbeb8a34cc7be58fec519829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67ca9aa7a6d4d87645e31824530dc84628858e03dbeb8a34cc7be58fec519829->leave($__internal_67ca9aa7a6d4d87645e31824530dc84628858e03dbeb8a34cc7be58fec519829_prof);

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
