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

/* @Page:/user/pages/04.dyskografia/_dysk */
class __TwigTemplate_f455d49586079d11f3ed8f11ace295b1d055f1688037e5541d3200af54b50ca0 extends \Twig\Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero hero-small overlay-dark-gradient text-light \" style=\"background-image: url('/user/pages/04.dyskografia/_dysk/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"galleryhero\">Dyskografia</div>
<style>
.galleryhero{
    text-shadow: 0 0 15px #000, 0 0 15px #000;
    color: #fff;
    font-size: 72px;
    font-weight: 500;
}
 </style>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/04.dyskografia/_dysk";
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
        return new Source("
<section id=\"\" class=\"section modular-hero hero hero-small overlay-dark-gradient text-light \" style=\"background-image: url('/user/pages/04.dyskografia/_dysk/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"galleryhero\">Dyskografia</div>
<style>
.galleryhero{
    text-shadow: 0 0 15px #000, 0 0 15px #000;
    color: #fff;
    font-size: 72px;
    font-weight: 500;
}
 </style>
    </section>
</section>
", "@Page:/user/pages/04.dyskografia/_dysk", "");
    }
}
