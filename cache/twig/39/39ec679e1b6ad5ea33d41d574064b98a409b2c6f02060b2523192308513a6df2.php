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

/* @Page:/user/pages/02.o-nas/_4text-bartek */
class __TwigTemplate_ff81e7f6268ec55f2d8c384c3cd0b2c7061c9949fa09055492b0615610170e31 extends \Twig\Template
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
        <div class=\"columns left\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"text-bartek\">
<h2>Bartłomiej Kiebała</h2>
Hej, jestem Bartek pianista Niewolników Systemu. Styczność z pianinem mam praktycznie od urodzenia a  do niewolników dołączyłem 2 lata temu. Muzyka towarzyszy mi przez całe życie. 
<br><br>
Jeśli w danej chwili moje palce nie stukają po klawiszach, albo nie szarpią strun gitary, to najczęściej nucę sobie coś pod nosem. Ale najbardziej z tego lubie przelewać moje uczucia nuty, to moj sposob na wyrażenie siebie 
</div>
<style>
    .text-bartek{
        font-size: 20px;
        margin-top: 3em;

}
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/02.o-nas/_4text-bartek/pobrany plik.jpg\" />
            </div>
                         
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/02.o-nas/_4text-bartek";
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
        <div class=\"columns left\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"text-bartek\">
<h2>Bartłomiej Kiebała</h2>
Hej, jestem Bartek pianista Niewolników Systemu. Styczność z pianinem mam praktycznie od urodzenia a  do niewolników dołączyłem 2 lata temu. Muzyka towarzyszy mi przez całe życie. 
<br><br>
Jeśli w danej chwili moje palce nie stukają po klawiszach, albo nie szarpią strun gitary, to najczęściej nucę sobie coś pod nosem. Ale najbardziej z tego lubie przelewać moje uczucia nuty, to moj sposob na wyrażenie siebie 
</div>
<style>
    .text-bartek{
        font-size: 20px;
        margin-top: 3em;

}
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/02.o-nas/_4text-bartek/pobrany plik.jpg\" />
            </div>
                         
        </div>
    </section>
</section>
", "@Page:/user/pages/02.o-nas/_4text-bartek", "");
    }
}
