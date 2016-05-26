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
        $__internal_c031b7ba76f5ba8201bd5598942c071cc333b7ecc98c61532e5eba689879145e = $this->env->getExtension("native_profiler");
        $__internal_c031b7ba76f5ba8201bd5598942c071cc333b7ecc98c61532e5eba689879145e->enter($__internal_c031b7ba76f5ba8201bd5598942c071cc333b7ecc98c61532e5eba689879145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c031b7ba76f5ba8201bd5598942c071cc333b7ecc98c61532e5eba689879145e->leave($__internal_c031b7ba76f5ba8201bd5598942c071cc333b7ecc98c61532e5eba689879145e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_096f14fc65d6df0c02da416d3f98d4a079d81f3364f87194b93cac727531a327 = $this->env->getExtension("native_profiler");
        $__internal_096f14fc65d6df0c02da416d3f98d4a079d81f3364f87194b93cac727531a327->enter($__internal_096f14fc65d6df0c02da416d3f98d4a079d81f3364f87194b93cac727531a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_096f14fc65d6df0c02da416d3f98d4a079d81f3364f87194b93cac727531a327->leave($__internal_096f14fc65d6df0c02da416d3f98d4a079d81f3364f87194b93cac727531a327_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_186fabb6303b956cb8258caa6a5440a42048a355dabc03b3ced310b15859a4c5 = $this->env->getExtension("native_profiler");
        $__internal_186fabb6303b956cb8258caa6a5440a42048a355dabc03b3ced310b15859a4c5->enter($__internal_186fabb6303b956cb8258caa6a5440a42048a355dabc03b3ced310b15859a4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_186fabb6303b956cb8258caa6a5440a42048a355dabc03b3ced310b15859a4c5->leave($__internal_186fabb6303b956cb8258caa6a5440a42048a355dabc03b3ced310b15859a4c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae9c96810d4abc777169c5b87ef972063e347dbc218786e71be799456249c52b = $this->env->getExtension("native_profiler");
        $__internal_ae9c96810d4abc777169c5b87ef972063e347dbc218786e71be799456249c52b->enter($__internal_ae9c96810d4abc777169c5b87ef972063e347dbc218786e71be799456249c52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae9c96810d4abc777169c5b87ef972063e347dbc218786e71be799456249c52b->leave($__internal_ae9c96810d4abc777169c5b87ef972063e347dbc218786e71be799456249c52b_prof);

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
