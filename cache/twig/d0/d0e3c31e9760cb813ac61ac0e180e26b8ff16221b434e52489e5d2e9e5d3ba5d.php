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

/* @Page:/user/pages/03.galeria-zdjec/04.zapach-swiat */
class __TwigTemplate_b9d2eec49d50dbd6dd9f9db560adfbac518f4c9107dedbe1b11a78764b040594 extends \Twig\Template
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
        echo "<p>Wesołych i wolnych (nie NIEwolniczych 😉 ) Świąt i całego życia w Szczęściu, <br>
Miłości i Błogosławieństwie życzymy my NIEwolnicy Systemu w składzie</p>
<ul>
<li>Ewa Agaś-Lange </li>
<li>Kacper Opaliński</li>
<li>Kacper Błoński</li>
<li>Jakub Kiebała ,</li>
<li>Bartek Kiebała </li>
<li>Jerzy Sowa Jr.  🙂<br>
Mamy dla Was najnowsze nagranie!
Posłuchacie naszej kolędy i wspólnie trwajmy w pokoju 🙂</li>
</ul>
<iframe src=\"https://www.youtube.com/embed/qmupwGX5keQ\" title=\"Zapach Świąt\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen class=\"p-centered ytemb\"></iframe>
<style>
.ytemb{
    width: 100%;
    height: 75vmin;
}
</style>";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/03.galeria-zdjec/04.zapach-swiat";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>Wesołych i wolnych (nie NIEwolniczych 😉 ) Świąt i całego życia w Szczęściu, <br>
Miłości i Błogosławieństwie życzymy my NIEwolnicy Systemu w składzie</p>
<ul>
<li>Ewa Agaś-Lange </li>
<li>Kacper Opaliński</li>
<li>Kacper Błoński</li>
<li>Jakub Kiebała ,</li>
<li>Bartek Kiebała </li>
<li>Jerzy Sowa Jr.  🙂<br>
Mamy dla Was najnowsze nagranie!
Posłuchacie naszej kolędy i wspólnie trwajmy w pokoju 🙂</li>
</ul>
<iframe src=\"https://www.youtube.com/embed/qmupwGX5keQ\" title=\"Zapach Świąt\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen class=\"p-centered ytemb\"></iframe>
<style>
.ytemb{
    width: 100%;
    height: 75vmin;
}
</style>", "@Page:/user/pages/03.galeria-zdjec/04.zapach-swiat", "");
    }
}
