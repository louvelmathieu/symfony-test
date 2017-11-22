<?php

/* base.html.twig */
class __TwigTemplate_7cc1283f175be3790451e901128b243b19fa57df77e1550c05dfa7e62695afc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856e04d8a5bf510db7720f3ebe0ac46676043d8ad9ecfcc38bdd4cb5e21c2611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856e04d8a5bf510db7720f3ebe0ac46676043d8ad9ecfcc38bdd4cb5e21c2611->enter($__internal_856e04d8a5bf510db7720f3ebe0ac46676043d8ad9ecfcc38bdd4cb5e21c2611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aba46b728c081b095159113b0258bd8afd1f2439cc19d7572643dfc8e2fa06af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba46b728c081b095159113b0258bd8afd1f2439cc19d7572643dfc8e2fa06af->enter($__internal_aba46b728c081b095159113b0258bd8afd1f2439cc19d7572643dfc8e2fa06af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
        <div class=\"container body-container\">
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
        ";
        // line 147
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_856e04d8a5bf510db7720f3ebe0ac46676043d8ad9ecfcc38bdd4cb5e21c2611->leave($__internal_856e04d8a5bf510db7720f3ebe0ac46676043d8ad9ecfcc38bdd4cb5e21c2611_prof);

        
        $__internal_aba46b728c081b095159113b0258bd8afd1f2439cc19d7572643dfc8e2fa06af->leave($__internal_aba46b728c081b095159113b0258bd8afd1f2439cc19d7572643dfc8e2fa06af_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_eafc098cbef3aa31451ef721866c7a62c8fd0b35a5bea192aa6efe59794a3ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafc098cbef3aa31451ef721866c7a62c8fd0b35a5bea192aa6efe59794a3ca6->enter($__internal_eafc098cbef3aa31451ef721866c7a62c8fd0b35a5bea192aa6efe59794a3ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32b84803102fd768e388efa7eb9bcee142c31cebb05bae2bb751a4633b7118c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b84803102fd768e388efa7eb9bcee142c31cebb05bae2bb751a4633b7118c8->enter($__internal_32b84803102fd768e388efa7eb9bcee142c31cebb05bae2bb751a4633b7118c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_32b84803102fd768e388efa7eb9bcee142c31cebb05bae2bb751a4633b7118c8->leave($__internal_32b84803102fd768e388efa7eb9bcee142c31cebb05bae2bb751a4633b7118c8_prof);

        
        $__internal_eafc098cbef3aa31451ef721866c7a62c8fd0b35a5bea192aa6efe59794a3ca6->leave($__internal_eafc098cbef3aa31451ef721866c7a62c8fd0b35a5bea192aa6efe59794a3ca6_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4377c242bd904fda600b24f5ecf2b298db516c80c9e8e6b3beb77048b1d3cf8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4377c242bd904fda600b24f5ecf2b298db516c80c9e8e6b3beb77048b1d3cf8b->enter($__internal_4377c242bd904fda600b24f5ecf2b298db516c80c9e8e6b3beb77048b1d3cf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a204733bcfc232892d44ecaf8d4736033dc247d2e6ffbc22266d8f2136671f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a204733bcfc232892d44ecaf8d4736033dc247d2e6ffbc22266d8f2136671f9f->enter($__internal_a204733bcfc232892d44ecaf8d4736033dc247d2e6ffbc22266d8f2136671f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a204733bcfc232892d44ecaf8d4736033dc247d2e6ffbc22266d8f2136671f9f->leave($__internal_a204733bcfc232892d44ecaf8d4736033dc247d2e6ffbc22266d8f2136671f9f_prof);

        
        $__internal_4377c242bd904fda600b24f5ecf2b298db516c80c9e8e6b3beb77048b1d3cf8b->leave($__internal_4377c242bd904fda600b24f5ecf2b298db516c80c9e8e6b3beb77048b1d3cf8b_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_861bc63ca908b229fe2f809364a3c2241d7fcbf4ede0a1260a0f696d7a28c6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861bc63ca908b229fe2f809364a3c2241d7fcbf4ede0a1260a0f696d7a28c6ee->enter($__internal_861bc63ca908b229fe2f809364a3c2241d7fcbf4ede0a1260a0f696d7a28c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_7d9194c3963ea8953a1da6e8dc54d005b013a2f3912ca1ec76fff5e0bda8476a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9194c3963ea8953a1da6e8dc54d005b013a2f3912ca1ec76fff5e0bda8476a->enter($__internal_7d9194c3963ea8953a1da6e8dc54d005b013a2f3912ca1ec76fff5e0bda8476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7d9194c3963ea8953a1da6e8dc54d005b013a2f3912ca1ec76fff5e0bda8476a->leave($__internal_7d9194c3963ea8953a1da6e8dc54d005b013a2f3912ca1ec76fff5e0bda8476a_prof);

        
        $__internal_861bc63ca908b229fe2f809364a3c2241d7fcbf4ede0a1260a0f696d7a28c6ee->leave($__internal_861bc63ca908b229fe2f809364a3c2241d7fcbf4ede0a1260a0f696d7a28c6ee_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_270778a4c0365cb67e13a540007ac18b915120b4697aa18accda589033fe6c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270778a4c0365cb67e13a540007ac18b915120b4697aa18accda589033fe6c66->enter($__internal_270778a4c0365cb67e13a540007ac18b915120b4697aa18accda589033fe6c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2911eab449ebede4960551d7f9f5d8e3959190b2c5ca6b1a7636097e6257342a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2911eab449ebede4960551d7f9f5d8e3959190b2c5ca6b1a7636097e6257342a->enter($__internal_2911eab449ebede4960551d7f9f5d8e3959190b2c5ca6b1a7636097e6257342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                                    <li>
                                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 66
        echo "
                                <li>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_2911eab449ebede4960551d7f9f5d8e3959190b2c5ca6b1a7636097e6257342a->leave($__internal_2911eab449ebede4960551d7f9f5d8e3959190b2c5ca6b1a7636097e6257342a_prof);

        
        $__internal_270778a4c0365cb67e13a540007ac18b915120b4697aa18accda589033fe6c66->leave($__internal_270778a4c0365cb67e13a540007ac18b915120b4697aa18accda589033fe6c66_prof);

    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_92fe5e37332216e712de22cd010f93132030b099de31fd23030dcb8480c614ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fe5e37332216e712de22cd010f93132030b099de31fd23030dcb8480c614ae->enter($__internal_92fe5e37332216e712de22cd010f93132030b099de31fd23030dcb8480c614ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_3ccf0992d6f5e1fc3e18c56283af3ff50d300f4a9e62b6c699b4319ce73061fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccf0992d6f5e1fc3e18c56283af3ff50d300f4a9e62b6c699b4319ce73061fb->enter($__internal_3ccf0992d6f5e1fc3e18c56283af3ff50d300f4a9e62b6c699b4319ce73061fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
        
        $__internal_3ccf0992d6f5e1fc3e18c56283af3ff50d300f4a9e62b6c699b4319ce73061fb->leave($__internal_3ccf0992d6f5e1fc3e18c56283af3ff50d300f4a9e62b6c699b4319ce73061fb_prof);

        
        $__internal_92fe5e37332216e712de22cd010f93132030b099de31fd23030dcb8480c614ae->leave($__internal_92fe5e37332216e712de22cd010f93132030b099de31fd23030dcb8480c614ae_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_92674708047ff741db86146e6844fe0ad250945f82958f9354b05d377412f466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92674708047ff741db86146e6844fe0ad250945f82958f9354b05d377412f466->enter($__internal_92674708047ff741db86146e6844fe0ad250945f82958f9354b05d377412f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32cc8bb8a3d96814f6dc13cb000327d35cb1a9462391d3dd8f9200d88b89e234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cc8bb8a3d96814f6dc13cb000327d35cb1a9462391d3dd8f9200d88b89e234->enter($__internal_32cc8bb8a3d96814f6dc13cb000327d35cb1a9462391d3dd8f9200d88b89e234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 94
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
        
        $__internal_32cc8bb8a3d96814f6dc13cb000327d35cb1a9462391d3dd8f9200d88b89e234->leave($__internal_32cc8bb8a3d96814f6dc13cb000327d35cb1a9462391d3dd8f9200d88b89e234_prof);

        
        $__internal_92674708047ff741db86146e6844fe0ad250945f82958f9354b05d377412f466->leave($__internal_92674708047ff741db86146e6844fe0ad250945f82958f9354b05d377412f466_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_355caacf39a98537adb888154ae873d682cbe95a2ef3b5165c4e9c0894c99a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355caacf39a98537adb888154ae873d682cbe95a2ef3b5165c4e9c0894c99a9b->enter($__internal_355caacf39a98537adb888154ae873d682cbe95a2ef3b5165c4e9c0894c99a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_70b88ce7c4e90ef55c93e783a721152274027022bf57dde1cb123d5d2a3814b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b88ce7c4e90ef55c93e783a721152274027022bf57dde1cb123d5d2a3814b5->enter($__internal_70b88ce7c4e90ef55c93e783a721152274027022bf57dde1cb123d5d2a3814b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_70b88ce7c4e90ef55c93e783a721152274027022bf57dde1cb123d5d2a3814b5->leave($__internal_70b88ce7c4e90ef55c93e783a721152274027022bf57dde1cb123d5d2a3814b5_prof);

        
        $__internal_355caacf39a98537adb888154ae873d682cbe95a2ef3b5165c4e9c0894c99a9b->leave($__internal_355caacf39a98537adb888154ae873d682cbe95a2ef3b5165c4e9c0894c99a9b_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3b2e098d3f2683f025077928ec78298f34d85ec05da9944e6eb0a8f26d7dd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b2e098d3f2683f025077928ec78298f34d85ec05da9944e6eb0a8f26d7dd4e->enter($__internal_c3b2e098d3f2683f025077928ec78298f34d85ec05da9944e6eb0a8f26d7dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_77cef333ada7364ac7622a378934ec461c992cc41eeabc37e1b05d9a24951b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cef333ada7364ac7622a378934ec461c992cc41eeabc37e1b05d9a24951b2d->enter($__internal_77cef333ada7364ac7622a378934ec461c992cc41eeabc37e1b05d9a24951b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 104
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 105
        echo "
                        ";
        
        $__internal_77cef333ada7364ac7622a378934ec461c992cc41eeabc37e1b05d9a24951b2d->leave($__internal_77cef333ada7364ac7622a378934ec461c992cc41eeabc37e1b05d9a24951b2d_prof);

        
        $__internal_c3b2e098d3f2683f025077928ec78298f34d85ec05da9944e6eb0a8f26d7dd4e->leave($__internal_c3b2e098d3f2683f025077928ec78298f34d85ec05da9944e6eb0a8f26d7dd4e_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_40ca3cbb0aad7d295290cd50884f7682d7abb9e5c3f371db7127bbeb408c02f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ca3cbb0aad7d295290cd50884f7682d7abb9e5c3f371db7127bbeb408c02f9->enter($__internal_40ca3cbb0aad7d295290cd50884f7682d7abb9e5c3f371db7127bbeb408c02f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ef8460ecb59b8f337acee830d1f44c205d9056d0fb049f1b736413d521d8fa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8460ecb59b8f337acee830d1f44c205d9056d0fb049f1b736413d521d8fa93->enter($__internal_ef8460ecb59b8f337acee830d1f44c205d9056d0fb049f1b736413d521d8fa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_ef8460ecb59b8f337acee830d1f44c205d9056d0fb049f1b736413d521d8fa93->leave($__internal_ef8460ecb59b8f337acee830d1f44c205d9056d0fb049f1b736413d521d8fa93_prof);

        
        $__internal_40ca3cbb0aad7d295290cd50884f7682d7abb9e5c3f371db7127bbeb408c02f9->leave($__internal_40ca3cbb0aad7d295290cd50884f7682d7abb9e5c3f371db7127bbeb408c02f9_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9313f85bb8b627dd946026dc79ad7547c9345eae1f9f50c6e5d7a79817dd0ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9313f85bb8b627dd946026dc79ad7547c9345eae1f9f50c6e5d7a79817dd0ee6->enter($__internal_9313f85bb8b627dd946026dc79ad7547c9345eae1f9f50c6e5d7a79817dd0ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a335f80200ad6d958b62b8e0e195fd6bca09e0dacae18242cf4940edb86a77e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a335f80200ad6d958b62b8e0e195fd6bca09e0dacae18242cf4940edb86a77e3->enter($__internal_a335f80200ad6d958b62b8e0e195fd6bca09e0dacae18242cf4940edb86a77e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/common.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a335f80200ad6d958b62b8e0e195fd6bca09e0dacae18242cf4940edb86a77e3->leave($__internal_a335f80200ad6d958b62b8e0e195fd6bca09e0dacae18242cf4940edb86a77e3_prof);

        
        $__internal_9313f85bb8b627dd946026dc79ad7547c9345eae1f9f50c6e5d7a79817dd0ee6->leave($__internal_9313f85bb8b627dd946026dc79ad7547c9345eae1f9f50c6e5d7a79817dd0ee6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 141,  474 => 140,  469 => 139,  460 => 138,  431 => 118,  427 => 117,  421 => 113,  412 => 112,  401 => 105,  399 => 104,  397 => 101,  388 => 100,  371 => 96,  359 => 107,  357 => 100,  352 => 97,  350 => 96,  345 => 94,  341 => 92,  332 => 91,  322 => 57,  315 => 53,  311 => 52,  308 => 51,  306 => 50,  299 => 46,  295 => 45,  292 => 44,  283 => 43,  266 => 81,  249 => 79,  245 => 78,  239 => 75,  227 => 68,  223 => 66,  216 => 62,  212 => 61,  209 => 60,  207 => 59,  204 => 58,  202 => 43,  190 => 34,  180 => 27,  174 => 23,  165 => 22,  148 => 20,  135 => 14,  126 => 13,  108 => 11,  93 => 147,  90 => 143,  88 => 138,  85 => 137,  83 => 112,  79 => 110,  77 => 91,  73 => 89,  71 => 22,  66 => 20,  60 => 17,  57 => 16,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li>
                                    <a href=\"{{ path('blog_search') }}\"> <i class=\"fa fa-search\"></i> {{ 'menu.search'|trans }}</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('build/manifest.js') }}\"></script>
            <script src=\"{{ asset('build/js/common.js') }}\"></script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/home/mathieulouvel/htdocs/Symfony/blog/app/Resources/views/base.html.twig");
    }
}
