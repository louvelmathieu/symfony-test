<?php

/* blog/about.html.twig */
class __TwigTemplate_ceeb98a3fcbd0d379503fde7839528a3e4a5b9729a8fa21171af0ebd1a59b128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc58fc6a9cb5ca92f027b09cb7dc729275c1a32eb05ab5aaef9d70a8e308ab40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc58fc6a9cb5ca92f027b09cb7dc729275c1a32eb05ab5aaef9d70a8e308ab40->enter($__internal_cc58fc6a9cb5ca92f027b09cb7dc729275c1a32eb05ab5aaef9d70a8e308ab40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_9c31fff8dec98dee2ba1911261bbefff78e1d14faff40d40b298873d8c553a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c31fff8dec98dee2ba1911261bbefff78e1d14faff40d40b298873d8c553a36->enter($__internal_9c31fff8dec98dee2ba1911261bbefff78e1d14faff40d40b298873d8c553a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_cc58fc6a9cb5ca92f027b09cb7dc729275c1a32eb05ab5aaef9d70a8e308ab40->leave($__internal_cc58fc6a9cb5ca92f027b09cb7dc729275c1a32eb05ab5aaef9d70a8e308ab40_prof);

        
        $__internal_9c31fff8dec98dee2ba1911261bbefff78e1d14faff40d40b298873d8c553a36->leave($__internal_9c31fff8dec98dee2ba1911261bbefff78e1d14faff40d40b298873d8c553a36_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/blog/about.html.twig");
    }
}
