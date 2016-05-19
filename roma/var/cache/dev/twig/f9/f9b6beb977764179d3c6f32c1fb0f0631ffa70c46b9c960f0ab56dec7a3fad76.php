<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee806530267b4f3b262fa7edc412e6f53bdc8d2933d2a2cbc007715a1d61583f extends Twig_Template
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
        $__internal_b8c933f8c5664ba0c3e51e9ccd4913671fc50929e765c78cfbccb8a6a2866d65 = $this->env->getExtension("native_profiler");
        $__internal_b8c933f8c5664ba0c3e51e9ccd4913671fc50929e765c78cfbccb8a6a2866d65->enter($__internal_b8c933f8c5664ba0c3e51e9ccd4913671fc50929e765c78cfbccb8a6a2866d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c933f8c5664ba0c3e51e9ccd4913671fc50929e765c78cfbccb8a6a2866d65->leave($__internal_b8c933f8c5664ba0c3e51e9ccd4913671fc50929e765c78cfbccb8a6a2866d65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe99b2051d2be4149a932a636caf3d30b9c76e4c608aae460d5d30540b2cc803 = $this->env->getExtension("native_profiler");
        $__internal_fe99b2051d2be4149a932a636caf3d30b9c76e4c608aae460d5d30540b2cc803->enter($__internal_fe99b2051d2be4149a932a636caf3d30b9c76e4c608aae460d5d30540b2cc803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe99b2051d2be4149a932a636caf3d30b9c76e4c608aae460d5d30540b2cc803->leave($__internal_fe99b2051d2be4149a932a636caf3d30b9c76e4c608aae460d5d30540b2cc803_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1f086b858cfe4e9b854d3a2795d88841b30f21bda77439ffa8f2d80dab9597e = $this->env->getExtension("native_profiler");
        $__internal_e1f086b858cfe4e9b854d3a2795d88841b30f21bda77439ffa8f2d80dab9597e->enter($__internal_e1f086b858cfe4e9b854d3a2795d88841b30f21bda77439ffa8f2d80dab9597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1f086b858cfe4e9b854d3a2795d88841b30f21bda77439ffa8f2d80dab9597e->leave($__internal_e1f086b858cfe4e9b854d3a2795d88841b30f21bda77439ffa8f2d80dab9597e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3719c5e7aaa444f9c211de9a820f0238f902f0933d0c074a17bddf5da5a90d0 = $this->env->getExtension("native_profiler");
        $__internal_a3719c5e7aaa444f9c211de9a820f0238f902f0933d0c074a17bddf5da5a90d0->enter($__internal_a3719c5e7aaa444f9c211de9a820f0238f902f0933d0c074a17bddf5da5a90d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a3719c5e7aaa444f9c211de9a820f0238f902f0933d0c074a17bddf5da5a90d0->leave($__internal_a3719c5e7aaa444f9c211de9a820f0238f902f0933d0c074a17bddf5da5a90d0_prof);

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
