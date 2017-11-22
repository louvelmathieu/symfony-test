<?php

/* blog/index.html.twig */
class __TwigTemplate_e43b2540aacfe465b77d1441cb2da6d6fdf043b6faf1acceb1d3e4e1a9c3e03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7430fbeade10dd8f11e59f7b4c1b80118fdac11a6038c8735042046bce6c66f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7430fbeade10dd8f11e59f7b4c1b80118fdac11a6038c8735042046bce6c66f8->enter($__internal_7430fbeade10dd8f11e59f7b4c1b80118fdac11a6038c8735042046bce6c66f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_2483485f5f1b309a6bdb3abb15ad68d3aa9d482b76ae559f3d73b4141222216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2483485f5f1b309a6bdb3abb15ad68d3aa9d482b76ae559f3d73b4141222216f->enter($__internal_2483485f5f1b309a6bdb3abb15ad68d3aa9d482b76ae559f3d73b4141222216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7430fbeade10dd8f11e59f7b4c1b80118fdac11a6038c8735042046bce6c66f8->leave($__internal_7430fbeade10dd8f11e59f7b4c1b80118fdac11a6038c8735042046bce6c66f8_prof);

        
        $__internal_2483485f5f1b309a6bdb3abb15ad68d3aa9d482b76ae559f3d73b4141222216f->leave($__internal_2483485f5f1b309a6bdb3abb15ad68d3aa9d482b76ae559f3d73b4141222216f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2a29a3345b301093d6f08126b72edfcb7910bfddb42c7c163cc499d04f3f77fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a29a3345b301093d6f08126b72edfcb7910bfddb42c7c163cc499d04f3f77fb->enter($__internal_2a29a3345b301093d6f08126b72edfcb7910bfddb42c7c163cc499d04f3f77fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ead9b2c607401301160078c017ad56806da520767a4629d419782d18deaddafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead9b2c607401301160078c017ad56806da520767a4629d419782d18deaddafe->enter($__internal_ead9b2c607401301160078c017ad56806da520767a4629d419782d18deaddafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_ead9b2c607401301160078c017ad56806da520767a4629d419782d18deaddafe->leave($__internal_ead9b2c607401301160078c017ad56806da520767a4629d419782d18deaddafe_prof);

        
        $__internal_2a29a3345b301093d6f08126b72edfcb7910bfddb42c7c163cc499d04f3f77fb->leave($__internal_2a29a3345b301093d6f08126b72edfcb7910bfddb42c7c163cc499d04f3f77fb_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c93bf4d556147873f649183356d7907c0e56288a4f999c7df31600214659e80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93bf4d556147873f649183356d7907c0e56288a4f999c7df31600214659e80a->enter($__internal_c93bf4d556147873f649183356d7907c0e56288a4f999c7df31600214659e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e97ddb16e46ba3fc0dce3ebc64a6f6e8398c292de9c8a143fdd5efe4aa84b732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97ddb16e46ba3fc0dce3ebc64a6f6e8398c292de9c8a143fdd5efe4aa84b732->enter($__internal_e97ddb16e46ba3fc0dce3ebc64a6f6e8398c292de9c8a143fdd5efe4aa84b732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "fullName", array()), "html", null, true);
            echo "</span>
            </p>

            ";
            // line 19
            echo $this->env->getExtension('AppBundle\Twig\AppExtension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute(($context["posts"] ?? $this->getContext($context, "posts")), "haveToPaginate", array())) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            ";
            // line 29
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta(($context["posts"] ?? $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
            echo "
        </div>
    ";
        }
        
        $__internal_e97ddb16e46ba3fc0dce3ebc64a6f6e8398c292de9c8a143fdd5efe4aa84b732->leave($__internal_e97ddb16e46ba3fc0dce3ebc64a6f6e8398c292de9c8a143fdd5efe4aa84b732_prof);

        
        $__internal_c93bf4d556147873f649183356d7907c0e56288a4f999c7df31600214659e80a->leave($__internal_c93bf4d556147873f649183356d7907c0e56288a4f999c7df31600214659e80a_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8442d9bc117358399ef4d745043a2b1219f74a8c62a09e113e28b194f22af798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8442d9bc117358399ef4d745043a2b1219f74a8c62a09e113e28b194f22af798->enter($__internal_8442d9bc117358399ef4d745043a2b1219f74a8c62a09e113e28b194f22af798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8060f9a5b148b55dd66e8c58929a4b0526488f5f4b69dbd8df64adcdf8f2fef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060f9a5b148b55dd66e8c58929a4b0526488f5f4b69dbd8df64adcdf8f2fef8->enter($__internal_8060f9a5b148b55dd66e8c58929a4b0526488f5f4b69dbd8df64adcdf8f2fef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_8060f9a5b148b55dd66e8c58929a4b0526488f5f4b69dbd8df64adcdf8f2fef8->leave($__internal_8060f9a5b148b55dd66e8c58929a4b0526488f5f4b69dbd8df64adcdf8f2fef8_prof);

        
        $__internal_8442d9bc117358399ef4d745043a2b1219f74a8c62a09e113e28b194f22af798->leave($__internal_8442d9bc117358399ef4d745043a2b1219f74a8c62a09e113e28b194f22af798_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 38,  181 => 37,  175 => 35,  166 => 34,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  135 => 24,  119 => 21,  114 => 19,  108 => 16,  104 => 15,  96 => 10,  92 => 9,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', {slug: post.slug}) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
            </p>

            {{ post.summary|md2html }}

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if posts.haveToPaginate %}
        <div class=\"navigation text-center\">
            {{ pagerfanta(posts, 'twitter_bootstrap3_translated', {routeName: 'blog_index_paginated'}) }}
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/blog/index.html.twig");
    }
}
