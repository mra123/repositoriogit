<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55107418181a331ad140b4303b8c8d721cd89baabc4f7796ca0520537de3e5f6 extends Twig_Template
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
        $__internal_10d1b680f419cfdcb7097678ed86c0dbb18eb33b3db6d4b5bd039f7217d9376c = $this->env->getExtension("native_profiler");
        $__internal_10d1b680f419cfdcb7097678ed86c0dbb18eb33b3db6d4b5bd039f7217d9376c->enter($__internal_10d1b680f419cfdcb7097678ed86c0dbb18eb33b3db6d4b5bd039f7217d9376c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d1b680f419cfdcb7097678ed86c0dbb18eb33b3db6d4b5bd039f7217d9376c->leave($__internal_10d1b680f419cfdcb7097678ed86c0dbb18eb33b3db6d4b5bd039f7217d9376c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1245d803c0caaffdccc54a7e5d91287baf01a1536bebd656b7528a21883dcdb0 = $this->env->getExtension("native_profiler");
        $__internal_1245d803c0caaffdccc54a7e5d91287baf01a1536bebd656b7528a21883dcdb0->enter($__internal_1245d803c0caaffdccc54a7e5d91287baf01a1536bebd656b7528a21883dcdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1245d803c0caaffdccc54a7e5d91287baf01a1536bebd656b7528a21883dcdb0->leave($__internal_1245d803c0caaffdccc54a7e5d91287baf01a1536bebd656b7528a21883dcdb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7171ee9228d5b0f27e0db9e0ac8e3ccf22baaf1657bdbbcb2efac25607ad6b7 = $this->env->getExtension("native_profiler");
        $__internal_a7171ee9228d5b0f27e0db9e0ac8e3ccf22baaf1657bdbbcb2efac25607ad6b7->enter($__internal_a7171ee9228d5b0f27e0db9e0ac8e3ccf22baaf1657bdbbcb2efac25607ad6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7171ee9228d5b0f27e0db9e0ac8e3ccf22baaf1657bdbbcb2efac25607ad6b7->leave($__internal_a7171ee9228d5b0f27e0db9e0ac8e3ccf22baaf1657bdbbcb2efac25607ad6b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49bd0292b3a6ed7135450d0540dc25ffd80c36221d7694c2202a922c17eb5e0a = $this->env->getExtension("native_profiler");
        $__internal_49bd0292b3a6ed7135450d0540dc25ffd80c36221d7694c2202a922c17eb5e0a->enter($__internal_49bd0292b3a6ed7135450d0540dc25ffd80c36221d7694c2202a922c17eb5e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49bd0292b3a6ed7135450d0540dc25ffd80c36221d7694c2202a922c17eb5e0a->leave($__internal_49bd0292b3a6ed7135450d0540dc25ffd80c36221d7694c2202a922c17eb5e0a_prof);

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
