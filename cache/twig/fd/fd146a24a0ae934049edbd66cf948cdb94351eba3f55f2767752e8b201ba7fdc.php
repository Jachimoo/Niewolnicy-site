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

/* @Page:/user/pages/06.press-pack/_mainhero */
class __TwigTemplate_b8c8aff6e1828447ff04119ddbd78534483e249023c36769ec69d18d8a02a3e8 extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero hero-fullscreen \" style=\"background-image: url('/user/pages/06.press-pack/_mainhero/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"contacts_container p-centered\" data-aos=\"fade-in\" data-aos-duration=\"1200\">
    <h3>PRESS-PACK</h3>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Rider Techniczny <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rider_niewolnicy_systemu.pdf\" class=\"linkp\" target=\"_blank\">Pobierz</a> <br> <br>
    </div>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Logo kwadrat - czarne (pdf) <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rgb_ns-czarny_kwadrat.pdf\" class=\"linkp\" target=\"_blank\">Pobierz</a> <br> <br>
    </div>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Logo poziome - czarne (pdf) <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rgb_ns-poziome-czarne.pdf\" class=\"linkp\" target=\"_blank\">pobierz</a> <br> <br>
    </div>
</div>
<style>
   .contacts_container{
      background-color: #181a1bf1 ;
      padding: 20px;
      padding-top: 1px;
      align-items: center;
      width: 50%;
      margin-top: -5%;
      height: 60%; 
      text-align: left;
      font-size: large;
      line-height: 1.2;
      box-shadow: rgba(0, 0, 0, 0.753) 0px 8px 16px 0px, rgba(0, 0, 0, 0.712) 8px 0px 16px 0px;
      border:  #35393D 1px solid;
      border-radius: 5px;
    }
    .pdflogo{
        width: auto;
        height: 3em;
        float: left ;
        margin-right: 5px;
    }
    .pressp{
     float:left;
    }
    .elep{
        margin-top: 10px;
    }
    h1{
        margin-top: 0px ;
    }
    @media screen and (max-width: 600px){
        .contacts_container{
            width: 80%;
        }
    }
    @media screen and (max-width: 320px){
        .contacts_container{
            width: 98%;
        }
    }
</style>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/06.press-pack/_mainhero";
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
<section id=\"\" class=\"section modular-hero hero hero-fullscreen \" style=\"background-image: url('/user/pages/06.press-pack/_mainhero/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"contacts_container p-centered\" data-aos=\"fade-in\" data-aos-duration=\"1200\">
    <h3>PRESS-PACK</h3>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Rider Techniczny <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rider_niewolnicy_systemu.pdf\" class=\"linkp\" target=\"_blank\">Pobierz</a> <br> <br>
    </div>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Logo kwadrat - czarne (pdf) <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rgb_ns-czarny_kwadrat.pdf\" class=\"linkp\" target=\"_blank\">Pobierz</a> <br> <br>
    </div>
    <div class=\"elep\" data-aos=\"zoom-in\">
    <img src=\"/images/myphoto/pdf-svgrepo-com.svg\" class=\"pdflogo\">Logo poziome - czarne (pdf) <br><a href=\"user\\pages\\06.press-pack\\_mainhero\\rgb_ns-poziome-czarne.pdf\" class=\"linkp\" target=\"_blank\">pobierz</a> <br> <br>
    </div>
</div>
<style>
   .contacts_container{
      background-color: #181a1bf1 ;
      padding: 20px;
      padding-top: 1px;
      align-items: center;
      width: 50%;
      margin-top: -5%;
      height: 60%; 
      text-align: left;
      font-size: large;
      line-height: 1.2;
      box-shadow: rgba(0, 0, 0, 0.753) 0px 8px 16px 0px, rgba(0, 0, 0, 0.712) 8px 0px 16px 0px;
      border:  #35393D 1px solid;
      border-radius: 5px;
    }
    .pdflogo{
        width: auto;
        height: 3em;
        float: left ;
        margin-right: 5px;
    }
    .pressp{
     float:left;
    }
    .elep{
        margin-top: 10px;
    }
    h1{
        margin-top: 0px ;
    }
    @media screen and (max-width: 600px){
        .contacts_container{
            width: 80%;
        }
    }
    @media screen and (max-width: 320px){
        .contacts_container{
            width: 98%;
        }
    }
</style>
    </section>
</section>
", "@Page:/user/pages/06.press-pack/_mainhero", "");
    }
}
