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

/* @Page:/user/pages/01.strona-glowna/_mainhero */
class __TwigTemplate_34df016063e713b79b15a3d64e1ebed4e73549ac6e55f14afb8f7a511a40708e extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero hero-fullscreen id \" style=\"background-image: url('/user/pages/01.strona-glowna/_mainhero/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"herocontent\">
    <div class=\"logo\">
        <img src=\"user\\pages\\01.strona-glowna\\_mainhero\\cmyk_ns_poziome-biale-bez_tla.png\" class=\"logo-hero p-centered\">
    </div>
    <div class=\"media p-centered\">
        <a href=\"https://www.facebook.com/NIEwolnicy-Systemu-280880099250258\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\facebook.svg\" class=\"icon-mine\"></a>
        <a href=\"https://www.youtube.com/channel/UCK_EaX7I568_Y5GmyQfUDiA\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\youtube.svg\" class=\"icon-mine\" style=\"width: 2.75%; height: 2.9%;\"></a>
        <a href=\"https://www.instagram.com/niewolnicy_systemu\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\instagram.svg\" class=\"icon-mine\" style=\"width: 2.1%; height: 2.1%;\"></a>
        <a href=\"mailto:niewolnicysystemu@gmail.com\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\email.svg\" class=\"icon-mine\"style=\"width: 2.7%; height: 2.7%;\"></a>
    </div>
</div>
<p><i id=\"to-start\" class=\"pulse fa fa-angle-down\" data-aos=\"flip-up\"  data-aos-duration=\"1000\" ></i></p>
<style>
    .logo-hero{
        width: 80%;
        height: 80%;
        filter: drop-shadow(5px 5px 5px #222);
    }
    .icon-mine{
        filter: drop-shadow(5px 5px 5px #222);
        width: 2%;
        height: 2%;
    }
    .media{
       margin-top: 5px
    }
    .icon-mine:hover{
        opacity: 80%;
        transition: ease-in-out opacity 150ms;
    }
    .herocontent{
        margin-top: 7.5%;
    }
</style>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/01.strona-glowna/_mainhero";
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
<section id=\"\" class=\"section modular-hero hero hero-fullscreen id \" style=\"background-image: url('/user/pages/01.strona-glowna/_mainhero/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"herocontent\">
    <div class=\"logo\">
        <img src=\"user\\pages\\01.strona-glowna\\_mainhero\\cmyk_ns_poziome-biale-bez_tla.png\" class=\"logo-hero p-centered\">
    </div>
    <div class=\"media p-centered\">
        <a href=\"https://www.facebook.com/NIEwolnicy-Systemu-280880099250258\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\facebook.svg\" class=\"icon-mine\"></a>
        <a href=\"https://www.youtube.com/channel/UCK_EaX7I568_Y5GmyQfUDiA\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\youtube.svg\" class=\"icon-mine\" style=\"width: 2.75%; height: 2.9%;\"></a>
        <a href=\"https://www.instagram.com/niewolnicy_systemu\" target=\"_blank\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\instagram.svg\" class=\"icon-mine\" style=\"width: 2.1%; height: 2.1%;\"></a>
        <a href=\"mailto:niewolnicysystemu@gmail.com\"><img src=\"user\\pages\\01.strona-glowna\\_mainhero\\email.svg\" class=\"icon-mine\"style=\"width: 2.7%; height: 2.7%;\"></a>
    </div>
</div>
<p><i id=\"to-start\" class=\"pulse fa fa-angle-down\" data-aos=\"flip-up\"  data-aos-duration=\"1000\" ></i></p>
<style>
    .logo-hero{
        width: 80%;
        height: 80%;
        filter: drop-shadow(5px 5px 5px #222);
    }
    .icon-mine{
        filter: drop-shadow(5px 5px 5px #222);
        width: 2%;
        height: 2%;
    }
    .media{
       margin-top: 5px
    }
    .icon-mine:hover{
        opacity: 80%;
        transition: ease-in-out opacity 150ms;
    }
    .herocontent{
        margin-top: 7.5%;
    }
</style>
    </section>
</section>
", "@Page:/user/pages/01.strona-glowna/_mainhero", "");
    }
}
