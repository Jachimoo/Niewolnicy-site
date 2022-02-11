<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular.html.twig */
class __TwigTemplate_7c62bd698459f9ef50c57837ad799ba8bffcb8ebb86a7911353bc8f28ab15248 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'lang' => [$this, 'block_lang'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 7
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/singlepagenav.min.js"], "method");
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        // line 48
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 49
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 52
        $this->loadTemplate("partials/logo.html.twig", "modular.html.twig", 52)->display($context);
        // line 53
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 57
        $this->displayBlock('lang', $context, $blocks);
        // line 60
        echo "                        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 63
        echo "                        </nav>

                        ";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 66
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "modular.html.twig", 66)->display($context);
            echo "</span>
                        ";
        }
        // line 68
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 57
    public function block_lang($context, array $blocks = [])
    {
        // line 58
        echo "                            ";
        $this->loadTemplate("partials/langswitcher.html.twig", "modular.html.twig", 58)->display($context);
        // line 59
        echo "                        ";
    }

    // line 60
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 61
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "modular.html.twig", 61)->display($context);
        // line 62
        echo "                        ";
    }

    // line 83
    public function block_hero($context, array $blocks = [])
    {
        // line 84
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) == "modular/hero")) {
                // line 85
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\"></div>
        ";
                // line 86
                echo $this->getAttribute($context["module"], "content", []);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        // line 91
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) != "modular/hero")) {
                // line 92
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo " p-centered\">
        ";
                // line 93
                echo $this->getAttribute($context["module"], "content", []);
                echo "
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 93,  173 => 92,  167 => 91,  164 => 90,  153 => 86,  148 => 85,  142 => 84,  139 => 83,  135 => 62,  132 => 61,  129 => 60,  125 => 59,  122 => 58,  119 => 57,  103 => 68,  97 => 66,  95 => 65,  91 => 63,  88 => 60,  86 => 57,  80 => 53,  78 => 52,  72 => 49,  69 => 48,  66 => 47,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  42 => 1,  40 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}

{% block javascripts %}
    {% if show_onpage_menu %}
        {% do assets.add('theme://js/singlepagenav.min.js') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{#{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu %}
        <script>
        // singlePageNav initialization & configuration
       // \$('ul.navigation').singlePageNav({
        //    offset: \$('#header').outerHeight(),
       //     filter: ':not(.external)',
       //     updateHash: true,
       //     currentClass: 'active'
       // });
        //</script>
    {% endif %} 
{% endblock %} 

{% block header_navigation %}
    {% if show_onpage_menu %}
        <ul class=\"navigation\">
        {% for module in page.collection() if module.header.visible is not same as(false) %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
            <li><a class=\"{{ current_module }}\" href=\"#{{ module.menu|hyphenize }}\">{{ module.menu }}</a></li>
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a {% if mitem.class %}class=\"{{ mitem.class }}\"{% endif %} href=\"{{ mitem.url }}\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
        </ul>
    {% else %}
        {{  parent() }}
    {% endif %}
{% endblock %}#}
{% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block lang %}
                            {% include 'partials/langswitcher.html.twig' %}
                        {% endblock %}
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}


{% block hero %}
    {% for module in page.collection() if module.template == 'modular/hero' %}
        <div id=\"{{ module.menu|hyphenize }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}

{% block body %}
    {% for module in page.collection() if module.template != 'modular/hero' %}
        <div id=\"{{ module.menu|hyphenize }} p-centered\">
        {{ module.content|raw }}
        </div>
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/user/themes/darkquark/templates/modular.html.twig");
    }
}
