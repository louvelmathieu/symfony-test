<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4669c2efca49c5760e38abb0ac5c8b305da9e83c39555a1db07bb06117d2fda3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e741fdea84cdb7e76e6ffd921cb15e02c59319bf7e35c2d9bf4ad89cb9ec8168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e741fdea84cdb7e76e6ffd921cb15e02c59319bf7e35c2d9bf4ad89cb9ec8168->enter($__internal_e741fdea84cdb7e76e6ffd921cb15e02c59319bf7e35c2d9bf4ad89cb9ec8168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_61a3a509c54c99d1c5e31961c162480a1acb4ad8d509d147f51791b2ee611b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a3a509c54c99d1c5e31961c162480a1acb4ad8d509d147f51791b2ee611b85->enter($__internal_61a3a509c54c99d1c5e31961c162480a1acb4ad8d509d147f51791b2ee611b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e741fdea84cdb7e76e6ffd921cb15e02c59319bf7e35c2d9bf4ad89cb9ec8168->leave($__internal_e741fdea84cdb7e76e6ffd921cb15e02c59319bf7e35c2d9bf4ad89cb9ec8168_prof);

        
        $__internal_61a3a509c54c99d1c5e31961c162480a1acb4ad8d509d147f51791b2ee611b85->leave($__internal_61a3a509c54c99d1c5e31961c162480a1acb4ad8d509d147f51791b2ee611b85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a06a850dd9a07e078ad4e006ca9a80a12b794fe21005a30398459cc120e877a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a06a850dd9a07e078ad4e006ca9a80a12b794fe21005a30398459cc120e877a->enter($__internal_0a06a850dd9a07e078ad4e006ca9a80a12b794fe21005a30398459cc120e877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34f3653777521ba22c12302bad596e870e083d4c31a5be61564a8d6046ef6557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f3653777521ba22c12302bad596e870e083d4c31a5be61564a8d6046ef6557->enter($__internal_34f3653777521ba22c12302bad596e870e083d4c31a5be61564a8d6046ef6557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_34f3653777521ba22c12302bad596e870e083d4c31a5be61564a8d6046ef6557->leave($__internal_34f3653777521ba22c12302bad596e870e083d4c31a5be61564a8d6046ef6557_prof);

        
        $__internal_0a06a850dd9a07e078ad4e006ca9a80a12b794fe21005a30398459cc120e877a->leave($__internal_0a06a850dd9a07e078ad4e006ca9a80a12b794fe21005a30398459cc120e877a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
