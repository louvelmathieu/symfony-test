<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_795708c98ffc630db21e833b7880f0f968a433ec41ce7959093026102e1a3440 extends Twig_Template
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
        $__internal_4ff50b9efbdce28e304728f921220c6623b864ff2f4426f3be025511fd7ebf26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff50b9efbdce28e304728f921220c6623b864ff2f4426f3be025511fd7ebf26->enter($__internal_4ff50b9efbdce28e304728f921220c6623b864ff2f4426f3be025511fd7ebf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_3fcfa3a8a0a17f34303b8709f2103d70e8890cb7826c2d92bc6e8fa8f156beb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcfa3a8a0a17f34303b8709f2103d70e8890cb7826c2d92bc6e8fa8f156beb6->enter($__internal_3fcfa3a8a0a17f34303b8709f2103d70e8890cb7826c2d92bc6e8fa8f156beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 9
        echo "
<div class=\"messages\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "            ";
                // line 14
                echo "            <div class=\"alert alert-dismissible alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
        
        $__internal_4ff50b9efbdce28e304728f921220c6623b864ff2f4426f3be025511fd7ebf26->leave($__internal_4ff50b9efbdce28e304728f921220c6623b864ff2f4426f3be025511fd7ebf26_prof);

        
        $__internal_3fcfa3a8a0a17f34303b8709f2103d70e8890cb7826c2d92bc6e8fa8f156beb6->leave($__internal_3fcfa3a8a0a17f34303b8709f2103d70e8890cb7826c2d92bc6e8fa8f156beb6_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 22,  49 => 19,  40 => 14,  38 => 13,  33 => 12,  29 => 11,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is a template fragment designed to be included in other templates
   See https://symfony.com/doc/current/book/templating.html#including-other-templates

   A common practice to better distinguish between templates and fragments is to
   prefix fragments with an underscore. That's why this template is called
   '_flash_messages.html.twig' instead of 'flash_messages.html.twig'
#}

<div class=\"messages\">
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            {# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
            <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                {{ message|trans }}
            </div>
        {% endfor %}
    {% endfor %}
</div>
", "default/_flash_messages.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/default/_flash_messages.html.twig");
    }
}
