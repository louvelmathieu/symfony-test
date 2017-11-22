<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_46eff95fc09c9ca154448761de5f07810bfd35fc4aa730bf735c3971fded6449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_38a4fc21364da6a872537345bf721de1453536f40ae77c849d28bfa353f0cdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a4fc21364da6a872537345bf721de1453536f40ae77c849d28bfa353f0cdb8->enter($__internal_38a4fc21364da6a872537345bf721de1453536f40ae77c849d28bfa353f0cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b8972b8d1dda593487da6aebbb2a3f5f6d44b9871f6d460a926c2d68ba477755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8972b8d1dda593487da6aebbb2a3f5f6d44b9871f6d460a926c2d68ba477755->enter($__internal_b8972b8d1dda593487da6aebbb2a3f5f6d44b9871f6d460a926c2d68ba477755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a4fc21364da6a872537345bf721de1453536f40ae77c849d28bfa353f0cdb8->leave($__internal_38a4fc21364da6a872537345bf721de1453536f40ae77c849d28bfa353f0cdb8_prof);

        
        $__internal_b8972b8d1dda593487da6aebbb2a3f5f6d44b9871f6d460a926c2d68ba477755->leave($__internal_b8972b8d1dda593487da6aebbb2a3f5f6d44b9871f6d460a926c2d68ba477755_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_683f318abe29e434af73d4c1d1d5c21b658c5223aab61db500ecd9323f9bd6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683f318abe29e434af73d4c1d1d5c21b658c5223aab61db500ecd9323f9bd6ad->enter($__internal_683f318abe29e434af73d4c1d1d5c21b658c5223aab61db500ecd9323f9bd6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bb862b4d14e750d7151f9f519db9cf2b55c3b0ce43f5bc043df4e8339d4a5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb862b4d14e750d7151f9f519db9cf2b55c3b0ce43f5bc043df4e8339d4a5f3->enter($__internal_9bb862b4d14e750d7151f9f519db9cf2b55c3b0ce43f5bc043df4e8339d4a5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9bb862b4d14e750d7151f9f519db9cf2b55c3b0ce43f5bc043df4e8339d4a5f3->leave($__internal_9bb862b4d14e750d7151f9f519db9cf2b55c3b0ce43f5bc043df4e8339d4a5f3_prof);

        
        $__internal_683f318abe29e434af73d4c1d1d5c21b658c5223aab61db500ecd9323f9bd6ad->leave($__internal_683f318abe29e434af73d4c1d1d5c21b658c5223aab61db500ecd9323f9bd6ad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8642a0ab546ad1452cbc3a89e73dd09f54eeeb90da6ef3ea52a02097c3bd3e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8642a0ab546ad1452cbc3a89e73dd09f54eeeb90da6ef3ea52a02097c3bd3e45->enter($__internal_8642a0ab546ad1452cbc3a89e73dd09f54eeeb90da6ef3ea52a02097c3bd3e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_170baaf824531e11695a5178d0b3ecbaf9a04c08bdd1411b9c8c914c3a247d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170baaf824531e11695a5178d0b3ecbaf9a04c08bdd1411b9c8c914c3a247d46->enter($__internal_170baaf824531e11695a5178d0b3ecbaf9a04c08bdd1411b9c8c914c3a247d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_170baaf824531e11695a5178d0b3ecbaf9a04c08bdd1411b9c8c914c3a247d46->leave($__internal_170baaf824531e11695a5178d0b3ecbaf9a04c08bdd1411b9c8c914c3a247d46_prof);

        
        $__internal_8642a0ab546ad1452cbc3a89e73dd09f54eeeb90da6ef3ea52a02097c3bd3e45->leave($__internal_8642a0ab546ad1452cbc3a89e73dd09f54eeeb90da6ef3ea52a02097c3bd3e45_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2c0efcd3660ef942eae4ee3a2fd673b1cf4078c0417dd1b1472ea45853d830d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c0efcd3660ef942eae4ee3a2fd673b1cf4078c0417dd1b1472ea45853d830d->enter($__internal_e2c0efcd3660ef942eae4ee3a2fd673b1cf4078c0417dd1b1472ea45853d830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb0fe13aac16572805987e18f81f228412e5d6228fdea6201a38c6ffb85ff9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0fe13aac16572805987e18f81f228412e5d6228fdea6201a38c6ffb85ff9b5->enter($__internal_fb0fe13aac16572805987e18f81f228412e5d6228fdea6201a38c6ffb85ff9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fb0fe13aac16572805987e18f81f228412e5d6228fdea6201a38c6ffb85ff9b5->leave($__internal_fb0fe13aac16572805987e18f81f228412e5d6228fdea6201a38c6ffb85ff9b5_prof);

        
        $__internal_e2c0efcd3660ef942eae4ee3a2fd673b1cf4078c0417dd1b1472ea45853d830d->leave($__internal_e2c0efcd3660ef942eae4ee3a2fd673b1cf4078c0417dd1b1472ea45853d830d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
