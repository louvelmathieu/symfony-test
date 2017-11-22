<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c1429749a3c68a13b30a6beb673a0440f357763febccb15854ef889fe5519ee5 extends Twig_Template
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
        $__internal_2903e0b9724c8d17ee8a1ea899fe2b37ee339b8217f749a7772dec1d7fc64564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2903e0b9724c8d17ee8a1ea899fe2b37ee339b8217f749a7772dec1d7fc64564->enter($__internal_2903e0b9724c8d17ee8a1ea899fe2b37ee339b8217f749a7772dec1d7fc64564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e25ac3a9ba05c01523983b1fb9c9833bc312d0f5a468f4b16e332f5a3dcbe23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e25ac3a9ba05c01523983b1fb9c9833bc312d0f5a468f4b16e332f5a3dcbe23->enter($__internal_2e25ac3a9ba05c01523983b1fb9c9833bc312d0f5a468f4b16e332f5a3dcbe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2903e0b9724c8d17ee8a1ea899fe2b37ee339b8217f749a7772dec1d7fc64564->leave($__internal_2903e0b9724c8d17ee8a1ea899fe2b37ee339b8217f749a7772dec1d7fc64564_prof);

        
        $__internal_2e25ac3a9ba05c01523983b1fb9c9833bc312d0f5a468f4b16e332f5a3dcbe23->leave($__internal_2e25ac3a9ba05c01523983b1fb9c9833bc312d0f5a468f4b16e332f5a3dcbe23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64ad33d84d37b5ef57bf5d218494a675bc863e819bda151745a3c7929b5841ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ad33d84d37b5ef57bf5d218494a675bc863e819bda151745a3c7929b5841ba->enter($__internal_64ad33d84d37b5ef57bf5d218494a675bc863e819bda151745a3c7929b5841ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ede06fc9ebb4354cd482c036c95869302136369f5fa42a051f697a4e944e161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ede06fc9ebb4354cd482c036c95869302136369f5fa42a051f697a4e944e161->enter($__internal_5ede06fc9ebb4354cd482c036c95869302136369f5fa42a051f697a4e944e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ede06fc9ebb4354cd482c036c95869302136369f5fa42a051f697a4e944e161->leave($__internal_5ede06fc9ebb4354cd482c036c95869302136369f5fa42a051f697a4e944e161_prof);

        
        $__internal_64ad33d84d37b5ef57bf5d218494a675bc863e819bda151745a3c7929b5841ba->leave($__internal_64ad33d84d37b5ef57bf5d218494a675bc863e819bda151745a3c7929b5841ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2aa0706adc925b964a233efe19fe7edd78815eaaed6d3f582746257f44daa92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aa0706adc925b964a233efe19fe7edd78815eaaed6d3f582746257f44daa92->enter($__internal_c2aa0706adc925b964a233efe19fe7edd78815eaaed6d3f582746257f44daa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d44ed4a31d45aef124780c3e6b95683ca67ab4d2867568a615c1ada8ce74269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d44ed4a31d45aef124780c3e6b95683ca67ab4d2867568a615c1ada8ce74269->enter($__internal_5d44ed4a31d45aef124780c3e6b95683ca67ab4d2867568a615c1ada8ce74269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d44ed4a31d45aef124780c3e6b95683ca67ab4d2867568a615c1ada8ce74269->leave($__internal_5d44ed4a31d45aef124780c3e6b95683ca67ab4d2867568a615c1ada8ce74269_prof);

        
        $__internal_c2aa0706adc925b964a233efe19fe7edd78815eaaed6d3f582746257f44daa92->leave($__internal_c2aa0706adc925b964a233efe19fe7edd78815eaaed6d3f582746257f44daa92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c005acb9d79b5ef887565e33cb939e5d4da4c565649388062a97b25c9b5dd7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c005acb9d79b5ef887565e33cb939e5d4da4c565649388062a97b25c9b5dd7e3->enter($__internal_c005acb9d79b5ef887565e33cb939e5d4da4c565649388062a97b25c9b5dd7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41dd23b8afe6b92d62fedaa4c70de237ded5437b021c589b90e55dfd30a25a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dd23b8afe6b92d62fedaa4c70de237ded5437b021c589b90e55dfd30a25a36->enter($__internal_41dd23b8afe6b92d62fedaa4c70de237ded5437b021c589b90e55dfd30a25a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41dd23b8afe6b92d62fedaa4c70de237ded5437b021c589b90e55dfd30a25a36->leave($__internal_41dd23b8afe6b92d62fedaa4c70de237ded5437b021c589b90e55dfd30a25a36_prof);

        
        $__internal_c005acb9d79b5ef887565e33cb939e5d4da4c565649388062a97b25c9b5dd7e3->leave($__internal_c005acb9d79b5ef887565e33cb939e5d4da4c565649388062a97b25c9b5dd7e3_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
