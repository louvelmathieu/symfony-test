<?php

/* blog/_rss.html.twig */
class __TwigTemplate_544e8566bd078ebf21d4bdac56a30e0589529cdceeed3e9beb73b6ee721ff653 extends Twig_Template
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
        $__internal_0c17a70e8b415270567228b5eae8526806ab5e3e55b23e500d6af1cbc09f5f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c17a70e8b415270567228b5eae8526806ab5e3e55b23e500d6af1cbc09f5f62->enter($__internal_0c17a70e8b415270567228b5eae8526806ab5e3e55b23e500d6af1cbc09f5f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_cf9f65d7b27745a503825bd06bef095f87de63cd3e404cfba3e4fab138c43a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9f65d7b27745a503825bd06bef095f87de63cd3e404cfba3e4fab138c43a5b->enter($__internal_cf9f65d7b27745a503825bd06bef095f87de63cd3e404cfba3e4fab138c43a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
        
        $__internal_0c17a70e8b415270567228b5eae8526806ab5e3e55b23e500d6af1cbc09f5f62->leave($__internal_0c17a70e8b415270567228b5eae8526806ab5e3e55b23e500d6af1cbc09f5f62_prof);

        
        $__internal_cf9f65d7b27745a503825bd06bef095f87de63cd3e404cfba3e4fab138c43a5b->leave($__internal_cf9f65d7b27745a503825bd06bef095f87de63cd3e404cfba3e4fab138c43a5b_prof);

    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section rss\">
    <a href=\"{{ path('blog_rss') }}\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ 'menu.rss'|trans }}
    </a>
</div>
", "blog/_rss.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/blog/_rss.html.twig");
    }
}
