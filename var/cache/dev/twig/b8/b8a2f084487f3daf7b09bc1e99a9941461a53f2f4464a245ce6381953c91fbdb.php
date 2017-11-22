<?php

/* blog/_post_tags.html.twig */
class __TwigTemplate_e24e0e59c4def6668b1e3b2305a1b9023fe398bc1bf85c0d9ada428eb32bfeba extends Twig_Template
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
        $__internal_3b8c80c7dc3b4b73b15408b9a20807d3ecba7434e8266872022048f7a5aceadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8c80c7dc3b4b73b15408b9a20807d3ecba7434e8266872022048f7a5aceadb->enter($__internal_3b8c80c7dc3b4b73b15408b9a20807d3ecba7434e8266872022048f7a5aceadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        $__internal_8f20eb9c837bc9b7b5fccadf873b6ce85c18d1381f24cec575cd578cd598f9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f20eb9c837bc9b7b5fccadf873b6ce85c18d1381f24cec575cd578cd598f9a1->enter($__internal_8f20eb9c837bc9b7b5fccadf873b6ce85c18d1381f24cec575cd578cd598f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "tags", array()), "empty", array())) {
            // line 2
            echo "    <p class=\"post-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </p>
";
        }
        // line 10
        echo "
";
        
        $__internal_3b8c80c7dc3b4b73b15408b9a20807d3ecba7434e8266872022048f7a5aceadb->leave($__internal_3b8c80c7dc3b4b73b15408b9a20807d3ecba7434e8266872022048f7a5aceadb_prof);

        
        $__internal_8f20eb9c837bc9b7b5fccadf873b6ce85c18d1381f24cec575cd578cd598f9a1->leave($__internal_8f20eb9c837bc9b7b5fccadf873b6ce85c18d1381f24cec575cd578cd598f9a1_prof);

    }

    public function getTemplateName()
    {
        return "blog/_post_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  37 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not post.tags.empty %}
    <p class=\"post-tags\">
        {% for tag in post.tags %}
            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> {{ tag.name }}
            </span>
        {% endfor %}
    </p>
{% endif %}

", "blog/_post_tags.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/blog/_post_tags.html.twig");
    }
}
