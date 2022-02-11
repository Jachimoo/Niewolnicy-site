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

/* @Page:/user/pages/01.strona-glowna/_niewolnicy-systemu */
class __TwigTemplate_0809ffab4b5c3bf9a6b6d8dd07e7142e82e4cbe78558a7d67a260045047dc06e extends \Twig\Template
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
        echo "<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-xl\">
        <div class=\"columns right\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"mytext2\">
<div class=\"h1\">NIEwolnicy Systemu</div>

 Zespół inspirujący się polską muzyką rockową z lat '80 i '90. Założycielem i inicjatorem projektu jest Jerzy Sowa jr, muzyk, aranżer,  kompozytor, autor tekstów i pedagog. <br> <br>NIEwolnicy Systemu w pierwotnym założeniu (2016) mieli być młodzieżowym zespołem mającym na celu naukę gry zespołowej, jednak po kilku miesiącach przekształcił się w obecnie istniejący projekt twórczy.
</div>
<style>
    .mytext2{
        text-align: right;
        font-size: 24px;
    }
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/01.strona-glowna/_niewolnicy-systemu/cmyk_ns-czarny_kwadrat.png\" />
            </div>
                         
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/01.strona-glowna/_niewolnicy-systemu";
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
        return new Source("<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-xl\">
        <div class=\"columns right\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"mytext2\">
<div class=\"h1\">NIEwolnicy Systemu</div>

 Zespół inspirujący się polską muzyką rockową z lat '80 i '90. Założycielem i inicjatorem projektu jest Jerzy Sowa jr, muzyk, aranżer,  kompozytor, autor tekstów i pedagog. <br> <br>NIEwolnicy Systemu w pierwotnym założeniu (2016) mieli być młodzieżowym zespołem mającym na celu naukę gry zespołowej, jednak po kilku miesiącach przekształcił się w obecnie istniejący projekt twórczy.
</div>
<style>
    .mytext2{
        text-align: right;
        font-size: 24px;
    }
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/01.strona-glowna/_niewolnicy-systemu/cmyk_ns-czarny_kwadrat.png\" />
            </div>
                         
        </div>
    </section>
</section>
", "@Page:/user/pages/01.strona-glowna/_niewolnicy-systemu", "");
    }
}
