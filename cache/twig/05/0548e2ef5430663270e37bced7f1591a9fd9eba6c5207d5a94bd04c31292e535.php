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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_d6d2960199cdf7e93db9550897a5d54859b71a1c575f5dae760ba6cae68c4321 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"card\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 7
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
        <div class=\"card-title\">
        ";
        // line 10
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 10)->display(twig_array_merge($context, ["title_level" => "h5"]));
        // line 11
        echo "        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 14
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 15
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"card-footer\">
        ";
        // line 21
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  76 => 21,  72 => 19,  66 => 17,  60 => 15,  58 => 14,  53 => 11,  51 => 10,  47 => 8,  45 => 7,  41 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    {% set image = page.media.images|first %}
    {% if image %}
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/blog/date.html.twig' %}
    </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
        </div>
    </div>
    <div class=\"card-body\">
        {% if page.summary != page.content %}
            {{ page.summary|raw }}
        {% else %}
            {{ page.content|raw }}
        {% endif %}
    </div>
    <div class=\"card-footer\">
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
</div>

", "partials/blog-list-item.html.twig", "/user/themes/darkquark/templates/partials/blog-list-item.html.twig");
    }
}
