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

/* modular/text.html.twig */
class __TwigTemplate_863e4407e35f59175531fafdb0fc10902e6af7615424f9db822da2c1d8a7fdf8 extends \Twig\Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "<section class=\"section modular-text ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []), "html", null, true);
        echo " bg-gray\">
    <section class=\"container ";
        // line 4
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"columns ";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", []), "align-right")) : ("align-right")), "html", null, true);
        echo "\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
            ";
        // line 6
        if (($context["image"] ?? null)) {
            // line 7
            echo "            <div class=\"column col-6 col-md-12\">
                ";
            // line 8
            echo ($context["content"] ?? null);
            echo "
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                ";
            // line 11
            echo $this->getAttribute(($context["image"] ?? null), "html", []);
            echo "
            </div>
            ";
        } else {
            // line 14
            echo "            <div class=\"column col-12\">
                ";
            // line 15
            echo ($context["content"] ?? null);
            echo "
            </div>
            ";
        }
        // line 18
        echo "            ";
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo " 
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  67 => 15,  64 => 14,  58 => 11,  52 => 8,  49 => 7,  47 => 6,  43 => 5,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}
<section class=\"section modular-text {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
            {% if image %}
            <div class=\"column col-6 col-md-12\">
                {{ content|raw }}
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                {{ image.html|raw }}
            </div>
            {% else %}
            <div class=\"column col-12\">
                {{ content|raw }}
            </div>
            {% endif %}
            {{ i }} 
        </div>
    </section>
</section>
", "modular/text.html.twig", "/user/themes/darkquark/templates/modular/text.html.twig");
    }
}
