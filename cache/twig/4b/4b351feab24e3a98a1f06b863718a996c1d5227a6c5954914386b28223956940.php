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

/* partials/footer.html.twig */
class __TwigTemplate_1f8dad330519d35259f44f229289766ce9bf84fb361c09a92039dc17fa8913e1 extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"theme-switch\">
   \t\t\t<div class=\"switch\"></div>
  \t\t</div>
        <p style=\"text-align: center; line-height: 1.2;\">Strona stworzona przez <a href=\"https://www.facebook.com/profile.php?id=100011488507585\">GSJ</a> dla NIEwolnicy Systemu<br> Wszystkie Prawa zastrzerzone &copy;</p>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"theme-switch\">
   \t\t\t<div class=\"switch\"></div>
  \t\t</div>
        <p style=\"text-align: center; line-height: 1.2;\">Strona stworzona przez <a href=\"https://www.facebook.com/profile.php?id=100011488507585\">GSJ</a> dla NIEwolnicy Systemu<br> Wszystkie Prawa zastrzerzone &copy;</p>
    </section>
</section>
", "partials/footer.html.twig", "/user/themes/darkquark/templates/partials/footer.html.twig");
    }
}
